<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $RegModel=$this->load->model('RegModel');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data=array();
		$user_data=$this->HomeModel->get_details();
        $data['user_data']=$user_data;
        $data['pat_data']=$this->RegModel->get();
		$this->load->view('common/header',$data);
		$this->load->view('welcome_message',$data);
		$this->load->view('common/footer',$data);

	}

	// public function edit()
	// {
	// 	$data=array();
	// 	$user_data=$this->HomeModel->get_details();
    //     $data['user_data']=$user_data;
    //     $data['pat_data']=$this->RegModel->get_data_by_id($id);
	// 	$this->load->view('common/header',$data);
	// 	$this->load->view('welcome_message',$data);
	// 	$this->load->view('common/footer',$data);

	// }
}
