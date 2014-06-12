<?php

class Site extends CI_Controller{

	function msk(){
	$this->load->model('site_model');
	$data['rd'] =$this->site_model->getall();

		$this->load->view('home', $data);
	}
	function Page(){
			
		if($this->input->post('verb')==0){
		$data['val']=$_POST['buy'];
		$data['nam1'] =$_POST['name1'];
		$this->load->view('buy', $data);}
		if($_POST['verb']==1){
		$data['val1']=$_POST['sell'];
		$data['nam2'] =$_POST['name2'];
		$this->load->view('sell',$data);
		}
	}

	
	 function buy1(){

	 
	  $this->load->model('site_model');
	  $this->site_model->buyg();


	}
	}
	