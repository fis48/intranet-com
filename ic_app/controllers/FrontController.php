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
        $data['slides'] = $this->GeneralModel->getSlides();
        $data['mainImg']    = $this->GeneralModel->getSectionImg('home');
        $data['mainContent']    = 'front/index';
        $this->load->view('general/front-template', $data);
    }

    // who
    public function who()
    {
        $data['mainImg']    = $this->GeneralModel->getSectionImg('who');
        $data['team']   = $this->GeneralModel->getSimpleItems('team', 'order', 'asc');
        $data['mainContent']    = 'front/who';
        $this->load->view('general/front-template', $data);
    }

    // glossary
    public function glossary()
    {
        $data['mainImg']    = $this->GeneralModel->getSectionImg('glossary');
        $data['glossary']   = $this->GeneralModel->getSimpleItems('glossary');
        $data['mainContent']    = 'front/glossary';
        $this->load->view('general/front-template', $data);
    }
    // ajax get full meaning info
    public function getGlossaryWord()
    {
        $word = $this->GeneralModel->getSimpleItem('glossary', $this->input->post("wordId"));
        echo json_encode($word);
    }
    // ajax get full team item
    public function getTeamItem()
    {
        $team = $this->GeneralModel->getSimpleItem('team', $this->input->post("teamId"));
        echo json_encode($team);
    }
    // questions
    public function questions()
    {
        $data['mainImg']    = $this->GeneralModel->getSectionImg('questions');
        $data['now']    = new Datetime();
        $data['questions']  = $this->GeneralModel->getQuestions();
        $data['mainContent']    = 'front/questions';
        $this->load->view('general/front-template', $data);
    }
    // questions all
    public function questionsAll()
    {
        $data['questions']  = $this->GeneralModel->getQuestions(true);
        $data['mainContent']    = 'front/questions-all';
        $this->load->view('general/front-template', $data);

    }
    // ask
    public function askQuestion()
    {
        $is_comment = $this->input->post('is_comment');
        $is_admin = $this->input->post('is_admin');
        $this->GeneralModel->askQuestion($this->input->post());
        // redirect
        if ($is_comment) {
            $this->session->set_flashdata('msg', 'Gracias por enviarnos tus inquietudes. En los próximos días recibirás respuesta del equipo de transformación.');
            redirect('/front/comments', 'refresh');
        }
        elseif ($is_admin) {
            $this->session->set_flashdata('msg', 'Gracias por enviarnos tus inquietudes. En los próximos días recibirás respuesta del equipo de transformación.');
            redirect('/admin/questions', 'refresh');
        }
        else
        {
            $this->session->set_flashdata('msg', 'Gracias por enviarnos tus inquietudes. En los próximos días recibirás respuesta del equipo de transformación.');
            redirect('/front/questions', 'refresh');
        }
    }
    // comments
    public function comments()
    {
        $data['mainImg']    = $this->GeneralModel->getSectionImg('interact');
        $data['now']    = new Datetime();
        $rawComments = $this->GeneralModel->getComments();
        $selValue = NULL;
        switch ($this->uri->segment(1)) {
            case 'me-preocupa':
                $comments = $rawComments->worry;
                $selValue = 'worry';
                $title = "Me preocupa que";
            break;
            case 'me-gusta':
                $comments = $rawComments->like;
                $selValue = 'like';
                $title = "Me gusta que";
            break;
            case 'se-me-ocurre':
                $comments = $rawComments->occur;
                $selValue = 'occur';
                $title = "Se me ocurre que";
            break;
            default:
                $comments = $rawComments;
        }
        $data['mainImg']    = $this->GeneralModel->getSectionImg('news');
        $data['comments']   = $comments;
        $data['title']  = $title;
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
        $data['mainImg']    = $this->GeneralModel->getSectionImg('news');
        $data['news']   = $this->GeneralModel->getSimpleItems('news', 'date', 'desc');
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
        $data['mainImg']    = $this->GeneralModel->getSectionImg('events');
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
    // projects
    public function projects()
    {
        $data['mainImg']    = $this->GeneralModel->getSectionImg('projects');
        $data['projects']   = $this->GeneralModel->getSimpleItems('projects');
        $data['mainContent']    = 'front/projects';
        $this->load->view('general/front-template', $data);
    }
    // event
    public function project()
    {
        $data['project']    = $this->GeneralModel->getSimpleItem('projects',
            $this->uri->segment(2));
        $data['mainContent']    = 'front/project';
        $this->load->view('general/front-template', $data);
    }
}













