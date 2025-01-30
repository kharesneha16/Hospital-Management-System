<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pat_today extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $HomeModel=$this->load->model('HomeModel');
        $Amodel=$this->load->model('Amodel');
    }

    public function view(){
        // echo ($id); die;
        $data=array();
        $data['user_data']=$this->HomeModel->get_details();
        $data['a_data']=$this->Amodel->list();
        // echo $this->db->last_query();
        // echo '<pre>';
        // print_r($data['a_data']);
        // echo '</pre>';
        // die;
        // echo '<pre>';
        // print_r($data['user_data']);die;
        // echo '</pre>';
        
        $this->load->view('common/header',$data);
        $this->load->view('patient_today',$data);
        $this->load->view('common/footer',$data);
    }
}