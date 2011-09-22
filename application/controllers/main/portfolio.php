<?php
class Portfolio extends CI_Controller{

	function __construct(){
		parent::__construct();
		
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->database();
	}
	
	public function index(){	
		$this->load->model('portfolio_model');
		$row_pf=$this->portfolio_model->get_portfolio();
		
		$pf="";
		$i=1;
		$pf_desc="";

		foreach($row_pf as $row){
			$pf.="<li class = 'thumbnail grid_3'><div class='thumbnail-image'>";
			$pf.=img('libs/'.$row['site_img']);
    		$pf.="</div><div class = 'bubble-pointer'></div></li>";
			$pf_desc.="<div id='content".$i."'>";
			$i++;
			$pf_desc.="<div class='portfolio-img grid_3 alpha'>";
			$image_properties = array(
  				'src' => 'libs/'.$row['site_img'],
          		'alt' => $row['client_name'],
			    'width' => '221',
          		'height' => '227',
			    'title' => $row['client_name']
			);
			
			$pf_desc.=img($image_properties)."</div>";
			$pf_desc.="<div class='portfolio-detail grid_9 omega clearfix'><h1>".$row['id'].". ".$row['client_name']."</h1>";
			$pf_desc.="<h2>".$row['jobs']."</h2><p>".$row['about']."</p></div></div>";
		}
		$data['pf']=$pf;
		$data['pf_desc']=$pf_desc;
		$this->load->view('main/portfolio_view', $data);
	}
}
?>