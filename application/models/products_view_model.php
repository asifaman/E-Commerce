<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products_view_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

	function update_cart($rowid, $qty, $price, $amount) {
 		$data = array(
			'rowid'   => $rowid,
			'qty'     => $qty,
			'price'   => $price,
			'amount'   => $amount
		);

		$this->cart->update($data);
	}
	
	public function get_product_info($table_id = '', $id = '')
	{
		if($table_id == 0)
		{
			$this->db->where('serial', $id);
			$this->db->select('*');
			$get_data = $this->db->get('p_dry_fish_view');
			if($get_data->num_rows() > 0)
			{
				return $get_data->row_array();
			}
			else
				return false;
		}
		if($table_id == 1)
		{
			$this->db->where('serial', $id);
			$this->db->select('*');
			$get_data = $this->db->get('p_dry_fish_view_all');
			if($get_data->num_rows() > 0)
			{
				return $get_data->row_array();
			}
			else
				return false;
		}
		elseif($table_id == 2)
		{
			$this->db->where('serial', $id);
			$this->db->select('*');
			$get_data = $this->db->get('p_e_book_view');
			if($get_data->num_rows() > 0)
			{
				return $get_data->row_array();
			}
			else
				return false;
		}
		elseif($table_id == 3)
		{
			$this->db->where('serial', $id);
			$this->db->select('*');
			$get_data = $this->db->get('p_e_book_view_all');
			if($get_data->num_rows() > 0)
			{
				return $get_data->row_array();
			}
			else
				return false;
		}
		elseif($table_id == 4)
		{
			$this->db->where('serial', $id);
			$this->db->select('*');
			$get_data = $this->db->get('p_electronic_view');
			if($get_data->num_rows() > 0)
			{
				return $get_data->row_array();
			}
			else
				return false;
		}
		elseif($table_id == 5)
		{
			$this->db->where('serial', $id);
			$this->db->select('*');
			$get_data = $this->db->get('p_electronic_view_all');
			if($get_data->num_rows() > 0)
			{
				return $get_data->row_array();
			}
			else
				return false;
		}
		elseif($table_id == 6)
		{
			$this->db->where('serial', $id);
			$this->db->select('*');
			$get_data = $this->db->get('p_spice_view');
			if($get_data->num_rows() > 0)
			{
				return $get_data->row_array();
			}
			else
				return false;
		}
		elseif($table_id == 7)
		{
			$this->db->where('serial', $id);
			$this->db->select('*');
			$get_data = $this->db->get('p_spice_view_all');
			if($get_data->num_rows() > 0)
			{
				return $get_data->row_array();
			}
			else
				return false;
		}
	}
}