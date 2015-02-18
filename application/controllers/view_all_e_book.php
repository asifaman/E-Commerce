<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class View_all_e_book extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Products_model');
	}

	public function index()
	{	
	    $this->load->view('header');
		$this->load->view('sub_slide');
		
		
		
       $this->data['title'] = 'p_e_book_view_all';

		$this->data['p_e_book_view_all'] = $this->Products_model->get_e_book_all();

		
		
		$this->load->view('view_all_e_book' , $this->data);
				
		$this->load->view('footer');

	}
}