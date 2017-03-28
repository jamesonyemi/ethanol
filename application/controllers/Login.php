<?php 
class Login extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

        $config = array(

                array(
                        'field' => 'username',
                        'label' => 'Username',
                        'rules' => 'required'
                ),

                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required',
                        'errors' => array(
                                'required' => 'You must provide a %s.',
                        ),
                ),

         );

        $this->form_validation->set_rules($config);

        

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('pages/login');
                }
                
                else
                {
                       
                        $data['title'] = ucfirst("home"); // Capitalize the first letter

                             $this->load->view('templates/header', $data);
                             $this->load->view('pages/home', $data);
                             $this->load->view('templates/footer', $data);      
                }
        }
}
 