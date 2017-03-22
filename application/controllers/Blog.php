<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
	
	public function blogpage()
	{
		 $data['title'] = ucfirst("blog"); // Capitalize the first letter

		      $this->load->view('templates/header', $data);
		      $this->load->view('pages/blog', $data);
		      $this->load->view('templates/footer', $data);	
		      // print_r($data) ; exit();
	}


}
