<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpu extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Bpu_model');
    //Codeigniter : Write Less Do More
  }

  public function cekbpub1(){
    $data['bpuuncekb1'] = $this->Bpu_model->getbpuuncekb1();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('bpu/cekbpub1', $data);
    $this->load->view('template/footer');
  }

  public function cekbpub2(){
    $data['bpuuncekb2'] = $this->Bpu_model->getbpuuncekb2();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('bpu/cekbpub2', $data);
    $this->load->view('template/footer');
  }

  public function cekbpurutin(){
    $data['bpuuncekrutin'] = $this->Bpu_model->getbpuuncekrutin();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('bpu/cekbpurutin', $data);
    $this->load->view('template/footer');
  }

  public function cekbpunonrutin(){
    $data['bpuunceknonrutin'] = $this->Bpu_model->getbpuunceknonrutin();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('bpu/cekbpunonrutin', $data);
    $this->load->view('template/footer');
  }

  public function prosescek(){
    $jmlbpu   = $this->input->post('jmlbpu');
    $totalbpu = $this->input->post('totalbpu');
    $baliknya = 'bpu/'.$this->input->post('back');

    if($jmlbpu == $totalbpu){
      $this->Bpu_model->ubahcekbpu();
      $this->session->set_flashdata('sukses', 'BPU telah Di Check!!');
      redirect($baliknya);
    }
    else{
      $this->session->set_flashdata('gagal', 'Total BPU tidak sama!!');
      redirect($baliknya);
    }
  }

  public function approvebpu(){
    $data['bpub1app'] = $this->Bpu_model->getbpub1app();
    $data['bpub2app'] = $this->Bpu_model->getbpub2app();
    $data['bpurutinapp'] = $this->Bpu_model->getbpurutinapp();
    $data['bpunonrutinapp'] = $this->Bpu_model->getbpunonrutinapp();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('bpu/approvebpu', $data);
    $this->load->view('template/footer');
  }

  public function appbpub1(){
    $data['bpub1app'] = $this->Bpu_model->getbpub1app();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('bpu/appbpub1', $data);
    $this->load->view('template/footer');
  }

  public function appbpub2(){
    $data['bpub2app'] = $this->Bpu_model->getbpub2app();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('bpu/appbpub2', $data);
    $this->load->view('template/footer');
  }

  public function appbpurutin(){
    $data['bpurutinapp'] = $this->Bpu_model->getbpurutinapp();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('bpu/appbpurutin', $data);
    $this->load->view('template/footer');
  }

  public function appbpunonrutin(){
    $data['bpunonrutinapp'] = $this->Bpu_model->getbpunonrutinapp();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('bpu/appbpunonrutin', $data);
    $this->load->view('template/footer');
  }

  public function prosessetuju(){
    foreach ($_POST['check'] as $key => $value) {
      $waktu    = $this->input->post("waktu$value");
      $nosel    = $this->input->post("nosel$value");
      $termbpu  = $this->input->post("termbpu$value");
      $tglcair  = $this->input->post("tglcair$value");
      $this->Bpu_model->setujuibpu($waktu,$nosel,$termbpu,$tglcair);
    }
      $this->session->set_flashdata('sukses', 'BPU telah Di Setujui!!');
      redirect('bpu/approvebpu');

  }


}
