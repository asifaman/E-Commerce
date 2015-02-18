<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class View_all_spice extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Products_model');
	}

	public function index()
	{	
	    $this->load->view('header');
		$this->load->view('sub_slide');
		
		
		
       $this->data['title'] = 'p_spice_view_all';

		$this->data['p_spice_view_all'] = $this->Products_model->get_spice_all();

		
		
		$this->load->view('view_all_spice' , $this->data);
				
		$this->load->view('footer');

	}
}