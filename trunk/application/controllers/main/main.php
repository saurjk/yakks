<?php
class Main extends CI_Controller{

	function __construct(){
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
	}
	
	public function index(){	
		$this->load->model('membership_model');
		$row_members=$this->membership_model->get_all_members();
		
		$members="<ul>";
		foreach($row_members as $row){
			$members.="<li><span class='first-name'>".$row['fname']."</span> ";
			$members.="<span class='last-name'>".$row['lname']."</span> ";
			$members.="<span class='job-position'>".$row['post']."</span></li>";	
		}
		$members.="</ul>";
		
		$data['members']=$members;
		$this->load->view('main/main_view', $data);
	}
	
	function page_not_found(){
			$this->load->view('errors/error_404');
	}
}
?>