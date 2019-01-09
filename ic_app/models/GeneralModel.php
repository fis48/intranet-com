<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneralModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->config->load('appconf');
    }

    // simple item
    public function getSimpleItem($tableName, $itemId)
    {
        $this->db->where('id',$itemId);
        return $this->db->get($tableName)->row();
    }
    // items list
    public function getSimpleItems($tableName)
    {   
        $this->db->order_by('id', 'desc');
        return $this->db->get($tableName)->result();
    }
    // last item
    public function getLastItem($table)
    {
        $this->db->select_max('id');
        $max = $this->db->get($table)->row();
        $lastItem = $this->getSimpleItem($table, $max->id);
        return $lastItem;
    }
    // item delete
    public function itemDelete($table, $itemId)
    {
        $deleted = $this->getSimpleItem($table, $itemId);
        $this->db->where('id', $itemId);
        $this->db->delete($table);
        return $deleted;
    }
    // login
    public function login($postData)
    {
        $this->db->select('full_name, email');
        $this->db->where('email', $postData['email']);
        $this->db->where('password', md5($postData['password']));
        $result = $this->db->get('users')->row();
        if (!$result) {
            return false;
        }
        else
        {
            $this->session->set_userdata('admin', $result);
            return $result;
        }
    }
    // add glossary word
    public function addWord($postData)
    {
        $this->db->insert('glossary', $postData);
        return $this->getLastItem('glossary');
    }
    // edit word
    public function updateWord($postData)
    {
        $this->db->where('id', $postData['word-id']);
        $this->db->update('glossary', array(
            'word'  => $postData['word'],
            'meaning'   => $postData['meaning']
        ));
        return $this->getSimpleItem('glossary', $postData['word-id']);
    }
    // ask question
    public function askQuestion($postData)
    {
        // db register
        $this->db->insert('questions', $postData);
        // notify to asker
        $this->sendNotification('q-asker', $postData);
        // notify to admin
        $this->sendNotification('q-ask-responsable', $postData);
        return $this->getLastItem('questions');
    }
    // send notifications
    public function sendNotification($type, $mailData)
    {
        switch ($type) {
            case 'q-asker':
                if (isset($mailData['is_comment'])) {
                    $subject = 'Nuevo comentario guardado';
                    $tipo = 'Comentario';
                    $message = 'Su comentario ha sido guardado';
                }
                else {
                    $subject = 'Nueva pregunta guardada.';
                    $tipo = 'Pregunta';
                    $message = 'Su pregunta ha sido guardada';
                }
            break;
            case 'q-ask-responsable':
                if (isset($mailData['is_comment'])) {
                    $subject = 'Nuevo comentario';
                    $tipo = 'Comentario';
                    $message = 'Ha recibido un nuevo comentario';
                }
                else {
                    $subject = 'Nueva pregunta';
                    $tipo = 'Pregunta';
                    $message = 'Ha recibido una nueva pregunta';
                }
            break;
            case 'q-response':
                if (isset($mailData['is_comment'])) {
                    $subject = 'Respuesta a su comentario';
                    $tipo = 'Comentario';
                    $message = 'Ha recibido respuesta a su comentario.';
                }
                else {
                    $subject = 'Respuesta a su pregunta';
                    $tipo = 'Pregunta';
                    $message = 'Ha recibido respuesta a su pregunta.';
                }
            break;
            case 'q-response-update':
                if ($mailData['is_comment'] == 1) {
                    $subject = 'Actualización a un comentario.';
                    $tipo = 'Comentario';
                    $message = 'Nueva actualización de respuesta a su comentario.';
                }
                else {
                    $subject = 'Actualización a una respuesta.';
                    $tipo = 'Pregunta';
                    $message = 'Nueva actualización de respuesta a su pregunta.';
                }
            break;
        }
        // send email
        $this->load->library('email');
        $this->email->from('fidel@MacBook-Pro-de-Fidel-2.local', 'Fidel Silva');
        $this->email->to('fidel@MacBook-Pro-de-Fidel-2.local');
        $this->email->subject($subject);
        $this->email->message('Correo de notificación: '.$tipo.' ** '.$message);
        if (!$this->email->send()) {
            print_r( $this->email->print_debugger() );
        }
        return $type;
        // SMTP config
        // $config['smtp_host'] = 'mail.google.com';
        // $config['smtp_port'] = 587;
        // $config['smtp_user'] = 'info@fidelsilva.com';
        // $config['smtp_pass'] = '';
        // $config['protocol'] = 'smtp';

    }
    // get all questions
    public function getQuestions($seeAll = false)
    {
        $questions = new StdClass();
        $questions->unresolved  = array();
        $questions->resolved    = array();
        // raw questions
        $this->db->where('is_comment', 0);
        $this->db->where('is_public', 1);
        if ($seeAll == false) {
            $this->db->limit(5);
        }
        $rawQuestions = $this->db->get('questions')->result();
        foreach ($rawQuestions as $rQuestion) {
            if ($rQuestion->response_date == NULL) {
                $questions->unresolved[]    = $rQuestion;
            }
            else
            {
                $questions->resolved[]  = $rQuestion;
            }
        }
        return $questions;
    }
    // get all questions from backend
    public function getQuestionsFromAdmin()
    {
        $questions = new StdClass();
        $questions->unresolved  = array();
        $questions->resolved    = array();
        // raw questions
        $this->db->where('is_comment', 0);
        $rawQuestions = $this->db->get('questions')->result();
        foreach ($rawQuestions as $rQuestion) {
            if ($rQuestion->response_date == NULL) {
                $questions->unresolved[]    = $rQuestion;
            }
            else
            {
                $questions->resolved[]  = $rQuestion;
            }
        }
        return $questions;
    }
    // question response
    public function questionResponse($question, $postData)
    {
        $this->db->where('id', $question->id);
        $updArray = array(
            'response'  => $postData['response'],
            'source'    => $postData['source'],
            'response_date' => $postData['response_date']
        );
        $this->db->update('questions', $updArray);
        // responsable notify new question
        $this->sendNotification('q-response', $postData);
        return $this->getSimpleItem('questions', $question->id);
    }
    // response update
    public function responseUpdate($postData)
    {
        $this->db->where('id', $postData['q_id']);
        $arrUpd = array(
            'response'  => $postData['response'],
            'source'  => $postData['source'],
            'response_update_date'  => $postData['response_update_date']
        );
        $this->db->update('questions', $arrUpd);
        $this->db->where('id', $postData['q_id']);
        // notify question update to asker
        $this->sendNotification('q-response-update', $postData);
        return $this->db->get('questions')->row();
    }
    // question update
    public function questionUpdate($postData)
    {
        $this->db->where('id', $postData['q_id']);
        $arrUpd = array(
            'question'  => $postData['question'],
            'response'  => $postData['response'],
            'source'  => $postData['source']
        );
        $this->db->update('questions', $arrUpd);
        $this->db->where('id', $postData['q_id']);
        return $this->db->get('questions')->row();
    }
    // get comments
    public function getComments()
    {
        $comments   = new StdClass();
        $comments->like     = array();
        $comments->worry    = array();
        $comments->occur    = array();
        $comments->occur['efficiency']  = array();
        $comments->occur['client'] = array();
        $comments->occur['paper']   = array();
        // raw comments
        $this->db->where('is_comment', 1);
        $rawComments = $this->db->get('questions')->result();

        foreach ($rawComments as $rComment) {
            switch ($rComment->type) {
                case 'like':
                    $comments->like[]   = $rComment;
                break;
                case 'worry':
                    $comments->worry[]   = $rComment;
                break;
                case 'occur':
                    $comments->occur[$rComment->subtype][]   = $rComment;
                break;
            }
        }
        return $comments;
    }
    // get news
    public function getNews()
    {
        $this->db->order_by('date', 'DESC');
        return $this->db->get('news')->result();
    }
    // add news
    public function addNews($postData, $filesData)
    {
        // db register
        $this->db->insert('news', $postData);
        return $this->getLastItem('news');
    }
    // add events
    public function addEvent($postData, $filesData)
    {
        // upload image
        move_uploaded_file($filesData['image']['tmp_name'],
            $this->config->item('eventsUpload').$filesData['image']['name']);
        // register new
        $dateIni = $postData['date_ini'].' '. $postData['time_ini'];
        $dateEnd = $postData['date_end'].' '. $postData['time_end'];
        $arrIns = array(
            'title' => $postData['title'],
            'date_ini'  => $dateIni,
            'date_end'  => $dateEnd,
            'location'  => $postData['location'],
            'description'  => $postData['description'],
            'image'     => $filesData['image']['name']
        );
        $this->db->insert('events', $arrIns);
        return $this->getLastItem('events');
    }
    // add projects
    public function addProject($postData, $filesData)
    {

        // upload image
        move_uploaded_file($filesData['image']['tmp_name'],
            $this->config->item('projectsUpload').$filesData['image']['name']);
        // register new
        $arrIns = array(
            'title' => $postData['title'],
            'description'  => $postData['description'],
            'image'     => $filesData['image']['name']
        );
        $this->db->insert('projects', $arrIns);
        return $this->getLastItem('projects');
    }
    // set public
    function setPublic($postData)
    {
        $this->db->where('id', $postData['qId']);
        if ($postData['public'] == 'true') {
            $arrUpd = array(
                'is_public' => 1
            );
        }
        else {
            $arrUpd = array(
                'is_public' => 0
            );
        }
        $this->db->update('questions', $arrUpd);
        return $this->getSimpleItem('questions', $postData['qId']);
    }
}



























