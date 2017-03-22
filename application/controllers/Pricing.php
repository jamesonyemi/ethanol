<?php

/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class Pricing extends CI_Controller
{
	
	 public function pricings()
	{	

		       $data['title'] = ucfirst("pricing"); // Capitalize the first letter
		       $this->load->view('templates/header', $data);
		       $this->load->view('pages/pricing', $data);
		       $this->load->view('templates/footer', $data);	
	}
}