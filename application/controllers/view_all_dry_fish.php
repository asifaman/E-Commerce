<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class View_all_dry_fish extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Products_model');
	}

	public function index()
	{	
	    $this->load->view('header');
		$this->load->view('sub_slide');
		
		
		
       $this->data['title'] = 'p_dry_fish_view_all';

		$this->data['p_dry_fish_view_all'] = $this->Products_model->get_dry_fish_all();

		
		
		$this->load->view('view_all_dry_fish' , $this->data);
				
		$this->load->view('footer');

	}
}