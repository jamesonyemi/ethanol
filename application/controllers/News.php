<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['users'] = $this->news_model->get_news();
                $data['title'] = 'News archive';

                       $this->load->view('templates/header', $data);
                       $this->load->view('news/index', $data);
                       $this->load->view('templates/footer');
        }

        public function view($user_email = NULL)
        {
                $data['users_details'] = $this->news_model->get_news($user_email);
                if (empty($data['users_details']))
                        {
                                show_404();
                        }

                        $data['title'] = $data['users_details']['title'];

                        $this->load->view('templates/header', $data);
                        $this->load->view('news/view', $data);
                        $this->load->view('templates/footer');
        }
}