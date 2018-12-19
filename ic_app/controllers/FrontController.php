<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontController extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('GeneralModel');
    }
    // index
    public function index()
    {
        $data['mainContent']    = 'front/index';
        $this->load->view('general/front-template', $data);
    }

    // who
    public function who()
    {
        $data['mainContent']    = 'front/who';
        $this->load->view('general/front-template', $data);
    }

    // glossary
    public function glossary()
    {
        $data['glossary']   = $this->GeneralModel->getSimpleItems('glossary');
        $data['mainContent']    = 'front/glossary';
        $this->load->view('general/front-template', $data);
    }

    // questions
    public function questions()
    {
        $data['now']    = new Datetime();
        $data['questions']  = $this->GeneralModel->getQuestions();
        $data['mainContent']    = 'front/questions';
        $this->load->view('general/front-template', $data);
    }
    // ask
    public function askQuestion()
    {
        $is_comment = $this->input->post('is_comment');
        $this->GeneralModel->askQuestion($this->input->post());
        // redirect
        if ($is_comment) {
            $this->session->set_flashdata('msg', 'Su comentario ha sido enviado.');
            redirect('/front/comments', 'refresh');
        }
        else
        {
            $this->session->set_flashdata('msg', 'Su pregunta ha sido enviada.');
            redirect('/front/questions', 'refresh');
        }
    }
    // comments
    public function comments()
    {
        $data['now']    = new Datetime();
        $rawComments = $this->GeneralModel->getComments();
        $selValue = NULL;
        switch ($this->uri->segment(1)) {
            case 'me-preocupa':
                $comments = $rawComments->worry;
                $selValue = 'worry';
            break;
            case 'me-gusta':
                $comments = $rawComments->like;
                $selValue = 'like';
            break;
            case 'se-me-ocurre':
                $comments = $rawComments->occur;
                $selValue = 'occur';
            break;
            default:
                $comments = $rawComments;
        }
        $data['comments']   = $comments;
        $data['selValue']   = $selValue;
        $data['mainContent']    = 'front/comments';
        $this->load->view('general/front-template', $data);
    }
    // add comment
    public function addComment()
    {
        $comment = $this->GeneralModel->addComment($this->input->post());
        $this->session->set_flashdata('msg', 'Comentario guardado.');
        redirect('/front/comments', 'refresh');
    }
    // interact
    public function interact()
    {
        $data['mainContent']    = 'front/interact';
        $this->load->view('general/front-template', $data);
    }
    // news
    public function news()
    {
        $data['news']   = $this->GeneralModel->getSimpleItems('news');
        $data['mainContent']    = 'front/news';
        $this->load->view('general/front-template', $data);
    }
    // new detail
    public function bulletin()
    {
        $data['new']    = $this->GeneralModel->getSimpleItem('news',
            $this->uri->segment(2));
        $data['mainContent']    = 'front/new';
        $this->load->view('general/front-template', $data);
    }
    // events
    public function events()
    {
        $data['events']   = $this->GeneralModel->getSimpleItems('events');
        $data['mainContent']    = 'front/events';
        $this->load->view('general/front-template', $data);
    }
    // event
    public function event()
    {
        $data['event']  = $this->GeneralModel->getSimpleItem('events',
            $this->uri->segment(2));
        $data['mainContent']    = 'front/event';
        $this->load->view('general/front-template', $data);
    }
}













