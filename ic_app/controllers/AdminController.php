<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('GeneralModel');
    }

    // dashboard
    public function dashboard()
    {
        setlocale(LC_ALL, 'es_ES');
        $logged = $this->session->userdata('admin');
        if (!$logged) {
            $this->session->set_flashdata('msg', 'No existe un usuario registrado.');
            redirect('/admin/', 'refresh');
        }
        $data['logged'] = $logged;
        $data['glossary']   = $this->GeneralModel->getSimpleItems('glossary');
        $data['events']   = $this->GeneralModel->getSimpleItems('events');
        $data['questions']  = $this->GeneralModel->getQuestions();
        $data['news']   = $this->GeneralModel->getNews();
        $comments = $this->GeneralModel->getComments();
        $data['comments']   = $comments;
        // comments count
        $commentsCount = 0;
        $commentsCount += count($comments->like);
        $commentsCount += count($comments->worry);
        if (isset($comments->occur['efficiency']) && isset($comments->occur['client']) &&
                isset($comments->occur['paper']) ) {
            $commentsCount += count($comments->occur['efficiency']);
            $commentsCount += count($comments->occur['client']);
            $commentsCount += count($comments->occur['paper']);
        }

        $data['commentsCount']  = $commentsCount;
        $data['mainContent']    = 'back/dashboard';
        $this->load->view('general/back-template', $data);
    }
    // login
    public function login()
    {
        if ($this->session->userdata('admin') !== NULL) {
            redirect('/admin/dashboard', 'refresh');
        }
        // post
        if ($this->input->post()) {
            $logged = $this->GeneralModel->login($this->input->post());
            if (!$logged) {
                $this->session->set_flashdata('msg', 'Ingreso no permitido.');
                redirect('/admin', 'refresh');
            }
            else
            {
                redirect('/admin/dashboard', 'refresh');
            }
        }
        // default
        $data['logged'] = $this->session->userdata('admin');
        $data['mainContent']    = 'forms/admin-login';
        $this->load->view('general/back-template', $data);
    }
    // logout
    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('msg', 'Sesión cerrarda.');
        redirect('/admin', 'refresh');
    }
    // add word to glossary
    public function addWord()
    {
        // post
        if ($this->input->post()) {
            $added = $this->GeneralModel->addWord($this->input->post());
            $this->session->set_flashdata('msg', 'Palabra guardada.');
            redirect('/admin/glossary', 'refresh');
        }
        // default form
        $data['logged'] = $this->session->userdata('admin');
        $data['formTitle'] = 'Agregar palabra';
        $data['mainContent']    = 'forms/glossary';
        $this->load->view('general/back-template', $data);
    }
    // glossary
    public function glossary()
    {
        $data['logged'] = $this->session->userdata('admin');
        $data['glossary']   = $this->GeneralModel->getSimpleItems('glossary');
        $data['mainContent']    = 'back/glossary';
        $this->load->view('general/back-template', $data);
    }
    // glossaru edit
    public function glossaryEdit()
    {
        // post
        if ($this->input->post()) {
            $this->GeneralModel->updateWord($this->input->post());
        }
        // default
        $data['logged'] = $this->session->userdata('admin');
        $data['word']   = $this->GeneralModel->getSimpleItem('glossary',
            $this->uri->segment(3));
        $data['formTitle'] = 'Actualizar palabra';
        $data['mainContent']    = 'forms/glossary';
        $this->load->view('general/back-template', $data);
    }
    // glossary delete
    public function glossaryDelete()
    {
        $this->GeneralModel->itemDelete('glossary', $this->uri->segment(3));
        $this->session->set_flashdata('msg', 'Registro eliminado.');
        redirect('/admin/glossary', 'refresh');
    }
    // unresolved questions
    public function questions()
    {
        setlocale(LC_ALL, 'es_ES');
        $data['logged'] = $this->session->userdata('admin');
        $data['mainContent']    = 'back/questions';
        $data['questions']  = $this->GeneralModel->getQuestions();
        $this->load->view('general/back-template', $data);
    }
    // question response
    public function questionResponse()
    {
        setlocale(LC_ALL, 'es_ES');
        $question = $this->GeneralModel->getSimpleItem('questions', $this->uri->segment(3));
        // post
        if ($this->input->post()) {
            $this->GeneralModel->questionResponse($question, $this->input->post());
            $this->session->set_flashdata('msg', 'Pregunta resuelta.');
            redirect('/admin/questions');
        }
        // default
        $data['logged'] = $this->session->userdata('admin');
        $data['now']    = new Datetime();
        $data['question'] = $question;
        $data['mainContent']    = 'forms/question-response';
        $this->load->view('general/back-template', $data);
    }
    // response update
    public function responseUpdate()
    {
        // post
        if ($this->input->post()) {
            $updated = $this->GeneralModel->responseUpdate($this->input->post());
            $this->session->set_flashdata('msg', 'Respuesta actualizada.');
            if ($updated->is_comment == 1) {
                redirect('/admin/comments', 'refresh');
            }
            else
            {
                redirect('/admin/questions', 'refresh');
            }
        }
        // default
        $data['logged'] = $this->session->userdata('admin');
        $data['now']    = new Datetime();
        $data['question']   = $this->GeneralModel->getSimpleItem('questions',
            $this->uri->segment(3));
        $data['mainContent']    = 'forms/question-response';
        $this->load->view('general/back-template', $data);
    }
    // comments
    public function comments()
    {
        setlocale(LC_ALL, 'es_ES');
        $data['logged'] = $this->session->userdata('admin');
        $data['comments']   = $this->GeneralModel->getComments();
        $data['mainContent']    = 'back/comments';
        $this->load->view('general/back-template', $data);
    }
    // new
    public function news()
    {
        setlocale(LC_ALL, 'es_ES');
        // default
        $data['logged'] = $this->session->userdata('admin');
        $data['news']   = $this->GeneralModel->getNews();
        $data['mainContent']    = 'back/news';
        $this->load->view('general/back-template', $data);
    }
    // add news
    public function addNews()
    {
        // ajax images form bulletin creation
        if ( $this->input->is_ajax_request() ) {
            $filesData = $_FILES['file'];
            move_uploaded_file($filesData['tmp_name'][0],
                '/Users/fidel/Documents/web/cmcanalytics/intranet-com/html/news/'.
                $filesData['name'][0]);
            // set img name in sessión for bulletin db insert
            $this->session->set_userdata('temp_bull_img', $filesData['name'][0]);
            echo '/news/'.$filesData['name'][0];
            return;
        }
        // post
        if ($this->input->post()) {
            $this->GeneralModel->addNews($this->input->post(), $_FILES);
            $this->session->set_flashdata('msg', 'Noticia guardada.');
            // redirect('/admin/news', 'refresh');
        }
        // default
        $data['logged'] = $this->session->userdata('admin');
        $data['now']    = new Datetime();
        $data['mainContent']    = 'forms/news';
        $this->load->view('general/back-template', $data);
    }
    // events
    public function events()
    {
        $data['logged'] = $this->session->userdata('admin');
        $data['now']    = new Datetime();
        $data['events'] = $this->GeneralModel->getSimpleItems('events');
        $data['mainContent']    = 'back/events';
        $this->load->view('general/back-template', $data);
    }
    // add event
    public function addEvent()
    {
        // post
        if ($this->input->post()) {
            $this->GeneralModel->addEvent($this->input->post(), $_FILES);
            $this->session->set_flashdata('msg', 'Evento guardada.');
            redirect('/admin/events', 'refresh');
        }
        // default
        $data['logged'] = $this->session->userdata('admin');
        $data['now']    = new Datetime();
        $data['mainContent']    = 'forms/events';
        $this->load->view('general/back-template', $data);
    }
}














