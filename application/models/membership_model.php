<?php

class Membership_model extends CI_Model {

	function get_all_members(){
		$query=$this->db->get('yks_members');
		
		return $query->result_array();
	}
}
?>