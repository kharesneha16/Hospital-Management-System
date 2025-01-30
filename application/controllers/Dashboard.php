<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	   public function __construct(){
       parent::__construct();
       $HomeModel=$this->load->model('HomeModel');
	   $Amodel=$this->load->model('Amodel');
     }
	public function index()
	{
		// print_r($_SESSION);die;

		$user_data=$this->HomeModel->get_details();
		// print_r($user_data);die;
		$appointment= $this->Amodel->appointment();
		// echo($appointment->total_appoinment);die;

		$data['user_data']=$user_data;
		$data['appointment']=$appointment;
		
		 $this->load->view('common/header.php',$data);
		 $this->load->view('dashboard.php',$data);
		 $this->load->view('common/footer.php',$data);
		//print_r($_SESSION);
	}

	public function logout(){
		//     echo 'hello';
		session_unset();
        session_destroy();
		// print_r($_SESSION);die;
		redirect ('login');
	}
}
