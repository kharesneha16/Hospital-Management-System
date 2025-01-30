<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class home_c extends CI_Controller {

    public function __construct(){
        parent::__construct();
       $HomeModel=$this->load->model('HomeModel');
}

public function view(){
    $this->load->view('dashboard');
}

public function login(){
    $this->load->view('login');
}
}