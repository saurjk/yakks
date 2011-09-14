<?php
class Contact extends CI_Controller{

	function __construct(){
		parent::__construct();
		
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
	}
	
	public function index(){	
		
		$this->load->view('main/contact_view');
	}
	
	public function sendmail(){
		echo "sendmail";
	}
}
?>