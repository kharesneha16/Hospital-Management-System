<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg extends CI_Controller {

    public function __construct(){
        parent::__construct();
       $RegModel=$this->load->model('RegModel');
    }
    public function regs(){
        // print_r($_POST);
        $data['fname']=$_POST['fname'];
        $data['lname']=$_POST['lname'];
        $data['DOB']=$_POST['DOB'];
        //$data['age']=$_POST['age'];
        $data['gender']=$_POST['gender'];
        $data['email']=$_POST['email'];
        $data['mobile_no']=$_POST['mobile_no'];
        $data['state']=$_POST['state'];
        $data['district']=$_POST['district'];
        $data['address']=$_POST['address'];
        
        $diff = (date('Y') - date('Y',strtotime($_POST['DOB'])));
        $data['age']= $diff;
        $res=$this->RegModel->insert($data);
        redirect('welcome');

    }
    
    public function editRegs($id){
    //   echo 'hii sneha';
    $data=array();
    $user_data=$this->HomeModel->get_details();
    $data['user_data']=$user_data;
    $data['pat_data']=$this->RegModel->get_data_by_id($id);

    // print_r($data['pat_data']);die;
    $this->load->view('common/header',$data);
    $this->load->view('reg_edit',$data);
    $this->load->view('common/footer',$data);
    }


    public function update(){
        // print_r($_POST);
        $data['id']=$_POST['id'];
        $data['fname']=$_POST['fname'];
        $data['lname']=$_POST['lname'];
        $data['DOB']=$_POST['DOB'];
        $data['age']=$_POST['age'];
        $data['gender']=$_POST['gender'];
        $data['email']=$_POST['email'];
        $data['mobile_no']=$_POST['mobile_no'];
        $data['state']=$_POST['state'];
        $data['district']=$_POST['district'];
        $data['address']=$_POST['address'];
        
        $diff = (date('Y') - date('Y',strtotime($_POST['DOB'])));
        $data['age']= $diff;
        $res=$this->RegModel->update($data);
        redirect('Welcome');

    }

    public function deleteRegs($id){
    //echo $id;
    $this->RegModel->delete($id);
    redirect('welcome');
    }
}