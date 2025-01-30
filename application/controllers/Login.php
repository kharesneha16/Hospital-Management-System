<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	   public function __construct(){
       parent::__construct();
       $HomeModel=$this->load->model('HomeModel');
     }
	public function index()
	{   $msg="";
		$data['msg']=$msg;
		$this->load->view('login/login',$data);

	}

	public function logged(){
		$log = $this->HomeModel->check($_POST);
		if (empty($log)){
		//    redirect("login");
		   $msg="Wrong Password";
		   $data['msg']=$msg;
		   $this->load->view('login/login',$data);
		}
		else{
			//print_r($log);
			$_SESSION['user_id']=$log->id;
			$_SESSION['user_email']=$log->email;
			redirect('dashboard');
		}

	}
}
