<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {
	   public function __construct(){
       parent::__construct();
       $HomeModel=$this->load->model('HomeModel');
     }
    
      public function index(){
        $user_data=$this->HomeModel->get_details();
		    $data['user_data']=$user_data;
        // print_r($user_data);
      			$this->load->view('common/header',$data);
            $this->load->view('user-profile',$data);
			      $this->load->view('common/footer',$data);
    
       }
       
      public function get($id){
        $data['user_data']=$user_data;
        $data['user_data']=$this->HomeModel->get_details($id);    
        $this->load->view('user_profile',$data);  
        }

      public function update(){
        // print_r($_FILES);die;
             if(!empty($_FILES)){
              $config['upload_path']          = './public/uploads/';
              $config['allowed_types']        = 'gif|jpg|png|jpeg';
              // $config['max_size']             = 100000;
              // $config['max_width']            = 1024000;
              // $config['max_height']           = 768000;
              chmod('public/uploads','777');

              $this->load->library('upload', $config);

              if ( ! $this->upload->do_upload('fileData'))
              {
                      $error = array('error' => $this->upload->display_errors());
                      // $this->load->view('upload_form', $error);
                      $msg=($error["error"]);
              }
              else
              {
                    $s_data['profile_image']=$_FILES['fileData']['name'];
                      // $data = array('upload_data' => $this->upload->data());
                      $msg='Profile Picture Uploaded Successfully';
              }
       
             }
// die;
           $data['id']=$_POST['id'];
           $data['email']=$_POST['email'];
		       $data['country']=$_POST['country'];
           $data['phone']=$_POST['phone'];
           $data['address']=$_POST['address'];
         $result=$this->HomeModel->update($data);

           $data['id']=$_POST['id'];
           $data_emp['about']=$_POST['about'];
           $data_emp['company']=$_POST['company'];
           $data_emp['job']=$_POST['job'];
         $result=$this->HomeModel->update_emp($data_emp,$_POST['id']);

          $data['id']=$_POST['id'];
          $s_data['twitter']=$_POST['twitter'];
          $s_data['facebook']=$_POST['facebook'];
          $s_data['instagram']=$_POST['instagram'];
          $s_data['linkedin']=$_POST['linkedin'];
         $result=$this->HomeModel->update_sp($s_data,$_POST['id']);

        redirect('profile');
        }
  
    public function password(){
        //print_r($_POST);die;
        if( $_POST['newpassword']==$_POST['renewpassword'] ){
            $pass= $this->HomeModel->password($_POST);    
            // print_r($pass);
            if(empty($pass)){
                 echo " entered incorrect password";
            }
            else{
           $result=$this->HomeModel->change_password($_POST);
           echo 'password changed';
            }
        }
        else{
            echo "newpassword is not matching";
           // redirect('profile');
        }
      }

      public function delete_photo($id){
        $result = $this-> HomeModel-> delete_photo($id);
        // return  $result;
        // redirect('profile');
      }

    }
      // public function save(){
      //   if($_POST['employee_id']==$id){
      //     $result=$this->HomeModel->employee_details();
      //     if(empty($result)){
      //       echo "data not found";
      //     }
      //     else{
      //       $result=$this->HomeModel->save($_POST);
      //       echo 'DATA SAVED';
      //     }
      //   }
      //     else{
      //       echo 'data not found';
      //     }
      // }
   
    