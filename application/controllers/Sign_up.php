<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sign_up extends CI_Controller {


	public function index()
	{	
	     $this->load->view('header');
		$this->data['title'] = 'Sign_up';
		
		$this->load->view('sign_up');
		 $this->load->view('footer');
	}
	
}