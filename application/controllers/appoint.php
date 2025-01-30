<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class appoint extends CI_Controller{

    public function __construct(){
        parent::__construct();
       $Amodel=$this->load->model('Amodel');
       $RegModel=$this->load->model('RegModel');
    }

    public function view($id)
	{ // echo "hii";
		$data=array();
		$user_data=$this->HomeModel->get_details();
          $data['user_data']=$user_data;
        $data['pat_data']=$this->Amodel->get_data($id);
        $data['a_data']=$this->Amodel->get_appointment_by_id($id);
        // echo $this->db->last_query();die;
        //   print_r($data['pat_data']);die;
		 $this->load->view('common/header',$data);
		 $this->load->view('appointment.php',$data);
		 $this->load->view('common/footer',$data);
	}

    public function save(){
        //print_r($_POST);
        $data['fname']=$_POST['fname'];
        $data['lname']=$_POST['lname'];
        $data['DOB']=$_POST['DOB'];
        $data['gender']=$_POST['gender'];
        $data['patient_id']=$_POST['id'];
        $data['specialization']=$_POST['specialization'];
        $data['fees']=$_POST['fees'];
        $data['date']=$_POST['date'];
        $data['time']=$_POST['time'];

        $diff = (date('Y') - date('Y',strtotime($_POST['DOB'])));
        $data['age']= $diff;
        // $d=(date('d-m-Y'), strtotime($date));
        // $date['date']=$d;
        // print_r($data);die;
        $results=$this->Amodel->insert($data);
       // print_r($_POST);die;
         redirect('appoint/view/'.$_POST['id']);
    }

    public function receipt_view($id){
        //  echo "hii";
		$data=array();
		 $user_data=$this->HomeModel->get_details();
         $data['user_data']=$user_data;
         
         $data['pat_data']=$this->Amodel->get_data($id);

         $a_data=$this->Amodel->receipt($id);
         $data['a_data']=$a_data;

         $doc_data =$this->RegModel->info($_POST);
         $data['doc_data']=$doc_data;
        //  echo '<pre>';
        // print_r($user_data);
        // echo '</pre>';
        // echo '<pre>';

        // print_r($a_data);
        // echo '</pre>';
        // echo '<pre>';

        // print_r($data['doc_data']);
        // echo '</pre>';
        // die;
		$this->load->view('common/header',$data);
		 $this->load->view('receipt.php',$data);
		 $this->load->view('common/footer',$data);
	}
}