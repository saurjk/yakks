<?php
class Team extends CI_Controller{

	function __construct(){
		parent::__construct();
		
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->database();
	}
	
	public function index(){	
		
		$this->load->view('main/team_view');
	}
}
?>