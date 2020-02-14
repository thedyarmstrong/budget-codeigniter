<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budget extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Budget_model');
  }

  function createbudget()
  {
    $data['getallproject'] = $this->Budget_model->getprojectb1();
    $data['katnon'] = $this->Budget_model->getkatnon();
    $data['allnama'] = $this->Budget_model->getallnama();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('budget/createbudget', $data);
    $this->load->view('template/footer');
  }

  function prosescreatebudget(){
    $this->Budget_model->insertkepengajuan();
    $this->session->set_flashdata('flash', 'Pembuatan Budget Berhasil!!');
    redirect('budget/createbudget');
  }

  function listbudget(){
    $data['b12020'] = $this->Budget_model->getbudgetb12020();
    $data['b22020'] = $this->Budget_model->getbudgetb22020();
    $data['rutin2020'] = $this->Budget_model->getbudgetrutin2020();
    $data['nonrutin2020'] = $this->Budget_model->getbudgetnonrutin2020();
    $data['emergency2020'] = $this->Budget_model->getbudgetemergency2020();
    $data['b12019'] = $this->Budget_model->getbudgetb12019();
    $data['b22019'] = $this->Budget_model->getbudgetb22019();
    $data['rutin2019'] = $this->Budget_model->getbudgetrutin2019();
    $data['nonrutin2019'] = $this->Budget_model->getbudgetnonrutin2019();
    $data['emergency2019'] = $this->Budget_model->getbudgetemergency2019();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('budget/listbudget', $data);
    $this->load->view('template/footer');
  }

  function arsipbudget(){
    $data['b12018'] = $this->Budget_model->getbudgetb12018();
    $data['b22018'] = $this->Budget_model->getbudgetb22018();
    $data['rutin2018'] = $this->Budget_model->getbudgetrutin2018();
    $data['nonrutin2018'] = $this->Budget_model->getbudgetnonrutin2018();
    $data['emergency2018'] = $this->Budget_model->getbudgetemergency2018();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('budget/arsipbudget', $data);
    $this->load->view('template/footer');
  }

}
