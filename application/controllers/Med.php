<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Med extends CI_Controller{
    public function __construct(){
        parent::__construct();
       $Amodel=$this->load->model('Amodel');
       $RegModel=$this->load->model('RegModel');
       $HomeModel=$this->load->model('HomeModel');
}

    public function medicine(){

        $data=array();
        // $data['query']='';
        $user_data=$this->HomeModel->get_details();
        $data['user_data']=$user_data;
        $data['med_data']=$this->Amodel->table();
    //     if(isset($_POST['query'])){    
    //         $data['query']=$_POST['query'];
    //     }
    //     $data['doc_data']=$this->RegModel->information($_POST);
        $this->load->view('common/header',$data);
        $this->load->view('medicine',$data);
        $this->load->view('common/footer',$data); 
    }

    public function save(){
// echo 'df';
        // $data['patient_id']=$_POST['id'];
        $data['name']=$_POST['name'];
        $data['mg']=$_POST['mg'];
        
        $results=$this->Amodel->save($data);
        redirect('Med/medicine/'.$_POST['id']);
    }

    public function editview($id){
        $data=array();
        $user_data=$this->HomeModel->get_details();
        $data['user_data']=$user_data;
        $data['med_data']=$this->Amodel->data($id);
        // print_r($data['med_data']);die;
        $this->load->view('common/header',$data);
        $this->load->view('med_edit',$data);
        $this->load->view('common/footer',$data); 
    }

    public function update(){
        // print_r($data['med_data']);die;
        $data['id']=$_POST['id'];
        $data['name']=$_POST['name'];
        $data['mg']=$_POST['mg'];
        // print_r($_POST);die;
        $result=$this->Amodel->update($data);
        redirect('Med/medicine');
    }

    public function delete($id){
        $this->Amodel->delete($id);
        redirect('Med/medicine');
    }

}