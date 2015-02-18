<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {


	public function index()
	{	
	    $this->load->view('header');
		$this->data['title'] = 'About';
		
		$this->load->view('about');
		 $this->load->view('footer');
	}
	
}