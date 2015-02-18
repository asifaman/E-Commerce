<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}
///////////////////////////////////////////////////
	public function get_dry_fish()
	{
		$query = $this->db->get('p_dry_fish_view');
		return $query->result_array();
	}
	public function get_dry_fish_all()
	{
		$query = $this->db->get('p_dry_fish_view_all');
		return $query->result_array();
	}


//////////////////////////////////////////////////////////
	public function get_e_book()
	{
		$query = $this->db->get('p_e_book_view');
		return $query->result_array();
	}
	public function get_e_book_all()
	{
		$query = $this->db->get('p_e_book_view_all');
		return $query->result_array();
	}
	
////////////////////////////////////////////////////////////

	public function get_electronic()
	{
		$query = $this->db->get('p_electronic_view');
		return $query->result_array();
	}
	public function get_electronic_all()
	{
		$query = $this->db->get('p_electronic_view_all');
		return $query->result_array();
	}
	
/////////////////////////////////////////////////////////////////

	public function get_spice()
	{
		$query = $this->db->get('p_spice_view');
		return $query->result_array();
	}
	public function get_spice_all()
	{
		$query = $this->db->get('p_spice_view_all');
		return $query->result_array();
	}
}