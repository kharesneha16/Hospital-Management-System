<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class R_Model extends CI_Model {

    public function pat_visit($id){

        $query=$this->db->query('SELECT appointment.patient_id as a, fname, lname, DOB, age, gender, specialization
        ,fees, appointment.date, appointment.time, medicine.name, medicine.mg, admit, advice,patient_visit.visit_id
         FROM `appointment` left JOIN patient_visit ON patient_visit.patient_id = appointment.patient_id LEFT JOIN 
         medicine ON patient_visit.name = medicine.id WHERE patient_visit.visit_id='.$id);
        //  echo $this->db->last_query();die;
        return $query->row();
    }
}