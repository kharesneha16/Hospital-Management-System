<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct(){
    parent::__construct();
    $HomeModel=$this->load->model('HomeModel');
    $Amodel=$this->load->model('Amodel');
    $R_Model=$this->load->model('R_Model');
    }

    public function view($id){
        $data=array();
        $data['user_data']=$this->HomeModel->get_details();
        $data['a_data']=$this->Amodel->a_data($id);
        $data['med_data']=$this->Amodel->table();
        $data['pat_data']=$this->Amodel->get_data($id);
        $data['v_data']=$this->R_Model->pat_visit($id);
        // $data['v_data']=$this->R_Model->report($id);
        // print_r($data['v_data']);die;

        $this->load->view('common/header',$data);
        $this->load->view('patient_report',$data);
        $this->load->view('common/footer',$data);
    }

}