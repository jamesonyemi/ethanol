<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();

		$this->check_isvalidated()
	}
	
	public function index()
	{
		 $data['title'] = ucfirst("home"); // Capitalize the first letter

		      $this->load->view('templates/header', $data);
		      $this->load->view('pages/home', $data);
		      $this->load->view('templates/footer', $data);	
		      // print_r($data) ; exit();
	}

	private function check_isvalidated()
	{
		if (! $this->session->userdata('status')) {
			
			
		}
	}

	public function do_logout()
	{
		$this->session->sess_destroy();
		redirect('pages/login');
	}


}
