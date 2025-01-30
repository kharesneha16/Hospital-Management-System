<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class RegModel extends CI_Model {


    public function insert($data){
        // echo 'f';die;
        $this->db->insert('patient',$data);
    }

    public function get(){
       $patient_data= $this->db->query ('SELECT * FROM patient ORDER BY ID DESC')->result();
       //$patient_data= $this->db->get('patient')->result();
       return $patient_data;
    }

    public function get_data_by_id($id){
        // echo $id;
       $query = $this->db->query('select * from patient where ID = '.$id);
       return $query->row();
    }

    public function update($data){
        // echo $id;
        $this->db->where("ID",$data['id']);
        $this->db->update("patient",$data);
    //    $query = $this->db->query('UPDATE patient SET state = delhi  WHERE ID = '.$id);
    //    return $query->row();
    }

    public function delete($id){
        $this->db->where("ID",$id);
        $this->db->delete("patient");    
    }
    
    public function inserts($data){
        $this->db->insert('doctor',$data);
    }

    public function info($data){
        // print_r($data);die;
        if(!isset($data['query'])){
            $doc_data= $this->db->query ('SELECT * FROM doctor ORDER BY id DESC');
        }else{
            $doc_data= $this->db->query ("SELECT * FROM doctor  WHERE doctor LIKE '%".$data['query']."%' ORDER BY id DESC");
        }
        //$doc_data=$this->db->get('doctor')->result();
        return $doc_data->row();
    }

    public function information($data){
        // print_r($data);die;
        if(!isset($data['query'])){
            $doc_data= $this->db->query ('SELECT * FROM doctor ORDER BY id DESC');
        }else{
            $doc_data= $this->db->query ("SELECT * FROM doctor  WHERE doctor LIKE '%".$data['query']."%' ORDER BY id DESC");
        }
        //$doc_data=$this->db->get('doctor')->result();
        return $doc_data->result();
    }

    public function get_id_data($id){
     //echo $id;
     $query = $this->db->query('select * from doctor where id ='.$id);
     return $query->row();
    }

    public function updates($data){
        //print_r($data);die;
        $this->db->where("id",$data['id']);
        $this->db->update("doctor",$data);
    }

    public function deletes($id){
        $this->db->where("id",$id);
        $this->db->delete("doctor");    
    }

    public function search_data($data){
        // print_r($data);
        // die;
      $query= $this->db->query("SELECT * FROM doctor WHERE doctor ='".$data['query']."'");
    //   echo $this->db->last_query();
      return $query->result();
    }

}