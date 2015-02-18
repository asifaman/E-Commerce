<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products_view extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Products_view_model');
	}

	public function index()
	{	
	    $this->load->view('header');
			
		$this->data['title'] = 'Shopping Carts';

		if (!$this->cart->contents()){
			$this->data['message'] = '<p>Your cart is empty!</p>';
		}else{
			$this->data['message'] = $this->session->flashdata('message');
		}

		$this->load->view('products_view', $this->data);
	   
				

	}

	public function view_details($table_id = '')
	{
		$this->load->model('Products_view_model');
	
		$id = $this->input->post('id');
		
		$data['get_product_info'] = $this->Products_view_model->get_product_info($table_id, $id);	
		//print_r($data['get_product_info']);exit();

		$this->load->view('product_view_details', $data);
		
	}
	
	public function ebook_view_details($table_id = '')
	{
		$this->load->model('Products_view_model');
	
		$id = $this->input->post('id');
		
		$data['get_product_info'] = $this->Products_view_model->get_product_info($table_id, $id);	
		//print_r($data['get_product_info']);exit();

		$this->load->view('product_view_details_ebook', $data);
		
	}

	public function add($table_id = '')
	{
		$this->load->model('Products_view_model');
	
		$id = $this->input->post('id');
		
		$data['get_product_info'] = $this->Products_view_model->get_product_info($table_id, $id);	
		//print_r($data['get_product_info']);exit();

		$this->cart->insert($insert_room);
			
		redirect('products_view');
				

	}
		
}