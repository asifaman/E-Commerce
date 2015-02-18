<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class View_all_electronic extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Products_model');
	}

	public function index()
	{	
	    $this->load->view('header');
		$this->load->view('sub_slide');
		
		
		
       $this->data['title'] = 'p_electronic_view_all';

		$this->data['p_electronic_view_all'] = $this->Products_model->get_electronic_all();

		
		
		$this->load->view('view_all_electronic' , $this->data);
				
		$this->load->view('footer');

	}
}