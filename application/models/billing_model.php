<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

	public function insert_customer($data)
	{
		$this->db->insert('customers', $data);

		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;		
	}
	
	public function insert_order($data)
	{
		$this->db->insert('orders', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}
	
	public function insert_order_detail($data)
	{
		$this->db->insert('order_detail', $data);
	}
}