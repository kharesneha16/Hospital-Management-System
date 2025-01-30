<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register_c extends CI_Controller {
	 public function __construct(){
         parent::__construct();
       $HomeModel=$this->load->model('HomeModel');
	 }

	public function views(){
		$msg='';
		$this->load->view('login/registration.php');
	}

	public function save(){
		//print_r($_POST);die;
		$msg='';
		$data['name']=$_POST['name'];
		$data['email']=$_POST['email'];
		$data['password']=$_POST['password'];
		$result=$this->HomeModel->insert($data);
		if($result==1){
			$msg='Registration Successful';
		}
		redirect('register_c/views',$msg);
		}
}
