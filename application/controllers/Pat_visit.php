<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pat_visit extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $HomeModel=$this->load->model('HomeModel');
        $Amodel=$this->load->model('Amodel');    }

    public function view($id){
        $data=array();
        $data['user_data']=$this->HomeModel->get_details();
        $data['a_data']=$this->Amodel->a_data($id);
        $data['med_data']=$this->Amodel->table();
        $data['pat_data']=$this->Amodel->get_data($id);
        $data['visit_data']=$this->Amodel->visit_table($id);
        // print_r($data['pat_data']);

        //  echo '<pre>';
        // print_r($data['a_data']);
        // echo '</pre>';
        // die;
       
        // echo '<pre>';
        // print_r($data['visit_data']);
        // echo '</pre>';
        // die;
        $this->load->view('common/header',$data);
        $this->load->view('patient_visit',$data);
        $this->load->view('common/footer',$data);
    }

    public function save(){
        $data['admit']='No';
        $data['patient_id']=$_POST['patient_id'];
        $data['id']=$_POST['id'];
        $data['date']=$_POST['date'];
        $data['time']=$_POST['time'];
        $data['name']=$_POST['name'];
        if(isset($_POST['admit'])){
        $data['admit']='Yes';
    }
        $data['advice']=$_POST['advice'];
        // echo '<pre>';
        //  print_r ($_POST);
        // echo '</pre>';
        //  die;

        $results=$this->Amodel->save_patient($data);
        // print_r($v_data);die;
        redirect('Pat_visit/view/'.$_POST['id']);
    }
}