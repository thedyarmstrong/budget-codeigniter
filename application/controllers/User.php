<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('User_model');
  }

 public function listuser(){
   $data['alluseraktif'] = $this->User_model->getalluseraktif();
   $data['allusernonaktif'] = $this->User_model->getallusernonaktif();
   $this->load->view('template/header');
   $this->load->view('template/sidebar');
   $this->load->view('user/listuser', $data);
   $this->load->view('template/footer');
 }

}
