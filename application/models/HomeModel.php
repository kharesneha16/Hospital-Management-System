<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class HomeModel extends CI_Model {

    public function insert($data){
        $inster=$this->db->insert('employee',$data);
        return $inster;
    }

    public function check($data){
        // print_r ($data);die;
        $query = $this->db->query("SELECT * FROM employee WHERE email='".$_POST['email']."'"."AND password='".$_POST['password']."'");
        //echo $this->db->last_query();die;
        return $query->row();
    }

    public function get_details(){
        //echo "hy";die;
        $get=$this->db->query('SELECT * FROM `employee` left JOIN emp_details ON employee.id = emp_details.employee_id 
        left JOIN social_profile ON employee.id= social_profile.employee_id where employee.id='.$_SESSION['user_id']);
        return $get->row();
       
    }

    public function save($user_data){
        $save =$this->db->insert('emp_details',$user_data);
        return $save;
    }

    
    public function update($user_data){
        //print_r($_POST);die;
        $this->db->where("id",$user_data['id']);
        $this->db->update("employee",$user_data);
    }
    
    public function update_emp($user_data,$id){
        // print_r($user_data);die;
        $query = $this->db->query("SELECT COUNT(*) as count FROM emp_details WHERE employee_id =$id");
        
        if($query->row()->count==0){
            $user_data['employee_id']=$id;
            $this->HomeModel->save($user_data);
            // echo $this->db->last_query();die;
        }
        
        else{
            $this->db->where("employee_id",$id);
            $this->db->update("emp_details",$user_data);
            // echo $this->db->last_query();die;
        }
    }
    
    public function save_sp($user_data){
        // print_r($user_data);die;
        $save_sp =$this->db->insert('social_profile',$user_data);
        //  echo $this->db->last_query();die;
        return $save_sp;

    }
    public function update_sp($user_data,$id){
        // print_r($user_data);die;
        $query = $this->db->query("SELECT COUNT(*) as count FROM social_profile WHERE employee_id =$id");
        // echo $this->db->last_query();die;

        if($query->row()->count==0){
            $user_data['employee_id']=$id;
            $this->HomeModel->save_sp($user_data);
            }

        else{
        $this->db->where("employee_id",$id);
        $this->db->update("social_profile",$user_data);
        // echo $this->db->last_query();die;
        }
    }

    public function password($data){
        $query = $this->db->query("SELECT * FROM employee WHERE email='".$_SESSION['user_email']."'"."AND password='".$_POST['currentpassword']."'");
        //echo 'yes';
        return $query->row();
    }

    public function change_password($data){
        $map['password']=$data['newpassword'];
       $this->db->where("id",$_SESSION['user_id']);
       $this->db->update('employee',$map);
    }

    public function delete_photo($id){
        $query =$this->db->query("Update social_profile set profile_image = NULL WHERE employee_id =$id");
        // echo $this->db->last_query();die;
    }
    
    // public function logout(){
    //      $query= $this ->db ->query( session_destroy());
    //       return $query->row();
    // }

}