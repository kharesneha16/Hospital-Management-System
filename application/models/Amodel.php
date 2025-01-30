<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Amodel extends CI_Model {

    public function insert($data){
        // print_r($data);die;
        $this->db->insert('appointment',$data);
    }

    public function get_data($id){
        // echo $id;
       $query = $this->db->query('select * from patient where ID = '.$id);
       return $query->row();
    }

    public function appointment(){
        $query = $this->db->query('SELECT COUNT(id) as total_appoinment FROM appointment;');
        return $query-> row();
    }

    public function get_appointment_by_id($id){
        // echo $id;
       $query = $this->db->query('select * from appointment where patient_id = '.$id);
       return $query->result();
    }

    public function receipt($id){
        // echo $id;       
       $query=$this->db->query('SELECT *, appointment.id as app_id FROM `appointment` left JOIN patient ON patient.ID = appointment.patient_id 
       left JOIN employee ON appointment.id= employee.id where appointment.id = '.$id);
    //    echo $this->db->last_query();die;
       return $query->row();
    }

    public function save($data){
        $this->db->insert('medicine',$data);
    }

    public function table(){
        $med_data = $this->db->query('SELECT * from medicine ORDER BY ID DESC')->result();
        return $med_data;
    }

    public function data($id){
        $query = $this->db->query('SELECT * from medicine where ID ='.$id);
        return $query->row();
    }

    public function update($data){
        // print_r($data);die;
        $this->db->where("ID",$data['id']);
        $this->db->update("medicine",$data);
    }

    public function delete($id){
        $this->db->where("ID",$id);
        $this->db->delete("medicine");
    }

    public function a_data($id){
        $query = $this->db->query('select * from appointment where id = '.$id);
        return $query->row();
    }

    public function list(){
       $query= $this->db->query('SELECT * FROM appointment WHERE DATE(date) = DATE(curdate())');
       return $query->result();
    }
    
    // saves patient_visit details
    public function save_patient($data){
       $this->db->insert('patient_visit',$data);
    }

    // patient_visit table
    public function visit_table($id){
        $query=$this->db->query('SELECT appointment.patient_id as a,visit_id,fname,lname,DOB,age,gender,
        specialization,fees,appointment.date,appointment.time,medicine.name,medicine.mg,admit,advice FROM 
        `appointment` left JOIN patient_visit ON patient_visit.patient_id = appointment.patient_id LEFT JOIN
         medicine ON patient_visit.name = medicine.id WHERE appointment.id='.$id);
        //  echo $this->db->last_query();die;
        return $query->result();
    }
}