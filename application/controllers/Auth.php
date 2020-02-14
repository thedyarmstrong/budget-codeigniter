<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth_model');
  }

  function index()
  {
    $this->load->view('auth/login');
  }

  public function login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $cekuser = $this->Auth_model->cekusernya($username,$password);

    if($cekuser->num_rows() == 1){
      $data = $cekuser->row_array();
      $this->session->set_userdata('masuk', TRUE);
      $this->session->set_userdata('ses_id_user', $data['id_user']);
      $this->session->set_userdata('ses_nama_user', $data['nama_user']);
      $this->session->set_userdata('ses_divisi', $data['divisi']);
      $this->session->set_userdata('ses_hak_akses', $data['hak_akses']);
      $this->session->set_userdata('ses_level', $data['level']);
      redirect(base_url('dashboard'));
    }
    else{
      $url=base_url();
      echo $this->session->set_flashdata('flash', 'Username atau password salah !!');
      redirect($url);
    }
  }

  public function register(){
    $data['alldivisi'] = $this->Auth_model->getalldivisi();
    $this->load->view('auth/register', $data);
  }

  public function logout(){
    $this->session->unset_userdata('masuk');
    $this->session->unset_userdata('ses_id_user');
    $this->session->unset_userdata('ses_nama_user');
    $this->session->unset_userdata('ses_divisi');
    $this->session->unset_userdata('ses_hak_akses');
    $this->session->unset_userdata('ses_level');
    $url=base_url();
    redirect($url);
  }

}
