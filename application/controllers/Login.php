<?php 
// class Login extends CI_Controller {

//     function __construct()
//     {
//         parent::__construct();
//         $this->load->model('login/login_model', 'login_model');
//     }

//         public function index()
//         {
//                 $this->load->helper(array('form', 'url'));

//                 $this->load->library('form_validation');

//         $config = array(

//                 array(
//                         'field' => 'username',
//                         'label' => 'Username',
//                         'rules' => 'required'
//                 ),

//                 array(
//                         'field' => 'email',
//                         'label' => 'email',
//                         'rules' => 'required'
//                 ),

//                 array(
//                         'field' => 'password',
//                         'label' => 'Password',
//                         'rules' => 'required',
//                         'errors' => array(
//                                 'required' => 'You must provide a %s.',
//                         ),
//                 ),

//          );

//         $this->form_validation->set_rules($config);

        

//                 if ($this->form_validation->run() == FALSE)
//                 {
//                         // $this->load->view('templates/header');
//                         $this->load->view('pages/login');
                       
//                 }
                
//                 else
//                 {
                       
//                         $data['title'] = ucfirst("home"); // Capitalize the first letter

//                              $this->load->view('templates/header', $data);
//                              $this->load->view('pages/home', $data);
//                              $this->load->view('templates/footer', $data);      
//                 }
//         }

//         public function process($error_msg = '')
//         {
//             // $this->load->model('login/login_model', 'login_model');
//             $result = $this->load->login_model->validate();


//             if (! $result) {
                
//                 $error_msg = ('Invalid username and password') ;
//         }
//         else{
//          redirect('pages/home');
//      }
 
//     }

// }


class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url','html'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('login/login_model', 'Login_model');
    }
    public function index()
    {
        // get form input
        $email = $this->input->post("email");
        $password = $this->input->post("password");

        // form validation
        $this->form_validation->set_rules("email", "Email-ID", "trim|required|xss_clean");
        $this->form_validation->set_rules("password", "Password", "trim|required|xss_clean");
        
        if ($this->form_validation->run() == FALSE)
        {
            // validation fail
            $this->load->view('pages/login');
        }
        else
        {
            // check for user credentials
            $uresult = $this->Login_model->get_user($email, $password);
            if (count($uresult) > 0)
            {
                // set session
                $sess_data = array('login' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);
                $this->session->set_userdata($sess_data);
                redirect("profile/index");
            }
            else
            {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
                redirect('login/index');
            }
        }
    }
}