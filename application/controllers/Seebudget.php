<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seebudget extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Seebudget_model');
  }

  public function seedireksi($noid)
  {
    $data['allpeng'] = $this->Seebudget_model->getpeng($noid);
    $waktu = $data['allpeng']['waktu'];
    $data['allselesaidir'] = $this->Seebudget_model->getallselesaidir($waktu);
    $data['noid'] = $noid;
    $data['jumlahbpu'] = $this->Seebudget_model->getalljumlahbpu($waktu);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('seebudget/seedireksi', $data);
    $this->load->view('template/footer');
  }

  public function simpanEksternal()
  {
    $file_name = $_FILES['uploadbpu']['name'];
    $file_tmp = $_FILES['uploadbpu']['tmp_name'];
    move_uploaded_file($file_tmp,"dist/uploadbpu/".$file_name);
    $cek = $this->Seebudget_model->simpanEksternal($file_name);
    if($cek == 1){
      if($this->session->userdata('ses_divisi') == 'Direksi'){
        $this->session->set_flashdata('sukses', 'BPU Telah Berhasil Di Simpan!!');
        redirect('seebudget/seedireksi/'.$this->input->post('noid'));
      }else if($this->session->userdata('ses_divisi') == 'FINANCE'){
        $this->session->set_flashdata('sukses', 'BPU Telah Berhasil Di Simpan!!');
        redirect('seebudget/seefinance/'.$this->input->post('noid'));
      }
    } else {
      if($this->session->userdata('ses_divisi') == 'Direksi'){
      $this->session->set_flashdata('gagal', 'Gagal. BPU Telah Melebihi Total Harga!!');
      redirect('seebudget/seedireksi/'.$this->input->post('noid'));
      }
      else if($this->session->userdata('ses_divisi') == 'FINANCE'){
        $this->session->set_flashdata('sukses', 'BPU Telah Berhasil Di Simpan!!');
        redirect('seebudget/seefinance/'.$this->input->post('noid'));
      }
    }
  }

  public function simpanumbiaya()
  {
    $file_name = $_FILES['uploadbpu']['name'];
    $file_tmp = $_FILES['uploadbpu']['tmp_name'];
    move_uploaded_file($file_tmp,"dist/uploadbpu/".$file_name);
    $cek = $this->Seebudget_model->simpanumbiaya($file_name);
    if($cek == 1){
      if($this->session->userdata('ses_divisi') == 'Direksi'){
        $this->session->set_flashdata('sukses', 'BPU Telah Berhasil Di Simpan!!');
        redirect('seebudget/seedireksi/'.$this->input->post('noid'));
      }else if($this->session->userdata('ses_divisi') == 'FINANCE'){
        $this->session->set_flashdata('sukses', 'BPU Telah Berhasil Di Simpan!!');
        redirect('seebudget/seefinance/'.$this->input->post('noid'));
      }
    } else {
      if($this->session->userdata('ses_divisi') == 'Direksi'){
      $this->session->set_flashdata('gagal', 'Gagal. BPU Telah Melebihi Total Harga!!');
      redirect('seebudget/seedireksi/'.$this->input->post('noid'));
      }
      else if($this->session->userdata('ses_divisi') == 'FINANCE'){
        $this->session->set_flashdata('sukses', 'BPU Telah Berhasil Di Simpan!!');
        redirect('seebudget/seefinance/'.$this->input->post('noid'));
      }
    }
  }

  public function simpanEdit()
  {
    $cek = $this->Seebudget_model->simpanEdit();

    if($cek == 1){
      $this->session->set_flashdata('informasi', 'Item Berhasil Di Ubah!!');
      redirect('seebudget/seedireksi/'.$this->input->post('noid'));
    } else {
      $this->session->set_flashdata('gagal', 'Gagal. Total Harga Lebih Kecil Dari Total BPU!!');
      redirect('seebudget/seedireksi/'.$this->input->post('noid'));
    }

  }

  public function seefinance($noid)
  {
    $data['allpeng'] = $this->Seebudget_model->getpeng($noid);
    $waktu = $data['allpeng']['waktu'];
    $data['allselesaidir'] = $this->Seebudget_model->getallselesaidir($waktu);
    $data['jumlahbpu'] = $this->Seebudget_model->getalljumlahbpu($waktu);
    $data['bpurtp'] = $this->Seebudget_model->getallbpurtp($waktu);
    $data['noid'] = $noid;
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('seebudget/seefinance', $data);
    $this->load->view('template/footer');
  }

  public function hapusBudgetSelesai($id,$waktu,$noid)
  {
    $this->Seebudget_model->hapusBudgetSelesai($id, $waktu);
    $this->session->set_flashdata('hapus', 'Data Di Hapus!!');
    redirect('seebudget/seedireksi/'.$noid);
  }

}
