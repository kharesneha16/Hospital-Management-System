<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller{

    public function __construct(){
        parent::__construct();
       $RegModel=$this->load->model('RegModel');
    }

public function docs(){

    $data=array();
    $user_data=$this->HomeModel->get_details();
    // print_r($user_data);die;
    $data['query']='';
    $data['user_data']=$user_data;
    if(isset($_POST['query'])){    
        $data['query']=$_POST['query'];
    }
    $data['doc_data']=$this->RegModel->information($_POST);
    
    $this->load->view('common/header',$data);
    $this->load->view('doctor_pg',$data);
    $this->load->view('common/footer',$data);
}

public function save(){
    $data['doctor']=$_POST['doctor'];
    $data['specialization']=$_POST['specialization'];
    $results=$this->RegModel->inserts($data);
    redirect('doctor/docs');
}

public function edits($id){
    //echo 'hii sneha';
    $data=array();
    $user_data=$this->HomeModel->get_details();
    $data['user_data']=$user_data;
    $data['doc_data']=$this->RegModel->get_id_data($id);
    $this->load->view('common/header',$data);
    $this->load->view('doctor_edit',$data);
    $this->load->view('common/footer',$data);
}

public function updates(){
    //print_r($_POST);die;
    $data['id']=$_POST['id'];
    $data['doctor']=$_POST['doctor'];
    $data['specialization']=$_POST['specialization'];
    $results=$this->RegModel->updates($data);
    redirect('doctor/docs');
}

public function deletes($id){
    //echo $id;
    $this->RegModel->deletes($id);
    redirect('doctor/docs');
}

public function search(){
    // print_r($_POST);
    // $data=array();
    $search=$this->RegModel->search_data($_POST);
    print_r($search);
    //$this->load->view('doctor',$data);
}

}