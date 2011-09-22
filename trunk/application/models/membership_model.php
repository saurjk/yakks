<?php

class Membership_model extends CI_Model {

	function get_all_members(){
		$query=$this->db->get('yks_members');
		return $query->result_array();
	}
	
	function validate(){
		
	}
	
	function return_result(){
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('yks_members');
		$row=$query->row();
		
		return $row;
	}
}
?>