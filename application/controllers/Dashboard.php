<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Dashboard_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    if ($this->session->userdata('ses_divisi') == 'Direksi'){
      $data['allrtp'] = $this->Dashboard_model->getallrtp();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('dashboard/direksi', $data);
      $this->load->view('template/footer');
    }
    else if($this->session->userdata('ses_divisi') == 'FINANCE' && $this->session->userdata('ses_hak_akses') == 'Manager'){
      $data['allrtp'] = $this->Dashboard_model->getallrtp();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('dashboard/financemanager', $data);
      $this->load->view('template/footer');
    }
    else{
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('dashboard/financemanager');
      $this->load->view('template/footer');
    }
  }

}
