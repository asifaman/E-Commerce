<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Products_model');
	}

	public function index()
	{	
	    $this->load->view('header');
		$this->load->view('slide');
		
		$this->data['title'] = 'p_dry_fish_view';

		$this->data['p_dry_fish_view'] = $this->Products_model->get_dry_fish();
		
		$this->data['title'] = 'p_e_book_view';

		$this->data['p_e_book_view'] = $this->Products_model->get_e_book();
		
		$this->data['title'] = 'p_electronic_view';

		$this->data['p_electronic_view'] = $this->Products_model->get_electronic();
		$this->data['title'] = 'p_spice_view';

		$this->data['p_spice_view'] = $this->Products_model->get_spice();


		
		
		$this->load->view('products', $this->data);
				
		$this->load->view('footer');

	}
}