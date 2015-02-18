<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Billing_model');
	}

	public function index()
	{	
	    $this->load->view('header');
	    $this->load->view('sub_slidelogin');

		$this->data['title'] = 'Billing';
		
		$this->load->view('billing', $this->data);
		$this->load->view('footer');

	}
	
	public function save_order()
	{
		$customer = array(
			'name' 		=> $this->input->post('name'),
			'email' 	=> $this->input->post('email'),
			'address' 	=> $this->input->post('address'),
			'phone' 	=> $this->input->post('phone'),
			
		);		

		$cust_id = $this->Billing_model->insert_customer($customer);

		$order = array(
			'date' 			=> date('Y-m-d'),
			'customerid' 	=> $cust_id
		);		

		$ord_id = $this->Billing_model->insert_order($order);
		
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$order_detail = array(
					'orderid' 		=> $ord_id,
					'productid' 	=> $item['id'],
					'quantity' 		=> $item['qty'],
					'price' 		=> $item['price'],
					'product_name'  => $item['name']
				);		

				$cust_id = $this->Billing_model->insert_order_detail($order_detail);
			endforeach;
		endif;
		
		
		
  header("Location:".base_url()."alert");

  echo "<script type='text/javascript'>\n";
echo "alert('you are Succesflly Placed Order');\n";
echo "</script>";
  exit;

	}
}
