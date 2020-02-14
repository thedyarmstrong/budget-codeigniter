<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seebudget_model extends CI_Model{

  function getpeng($noid){
    $allseldir = $this->db->query("SELECT * FROM pengajuan WHERE noid='$noid'")->row_array();
    return $allseldir;
  }

  function getallselesaidir($waktu){
    $allseldir = $this->db->query("SELECT
                                  	a.*,
                                  	SUM(b.jumlah) AS totalbpu
                                  FROM
                                  	selesai a
                                  LEFT JOIN bpu b ON a.waktu = b.waktu AND a.no = b.no
                                  WHERE
                                  	a.waktu = '$waktu'
                                  GROUP BY a.no
                                  ORDER BY
                                  	a.NO ASC")->result_array();
    return $allseldir;
  }

  public function simpanEksternal($file_name)
  {
    // $bpu = $this->db->get_where('',[''=> $this->input->post('')])->result_array();
    $no = $this->input->post('noeksternal');
    $waktu = $this->input->post('waktu');

    $bpu = $this->db->query("SELECT SUM(jumlah) as total from bpu where no = '$no' and waktu = '$waktu'")->row_array();
    $term = $this->db->get_where('bpu',['waktu'=> $waktu, 'no'=>$no])->num_rows();

    $total = $this->input->post('total');
    $bpu = $total + $bpu['total'];
    $sisa = $this->input->post('sisa');
    $totalPengajuan = $this->input->post('totalpengajuan');

    $pengajuan = $this->db->get_where('pengajuan', ['waktu'=>$waktu])->row_array();

    if($bpu<$totalPengajuan){
      $data = [
        'no' => $no,
        'jumlah' => $total,
        'tglcair' => $this->input->post('tanggal'),
        'namabank' => $this->input->post('bank'),
        'norek' => $this->input->post('norek'),
        'namapenerima' => $this->input->post('nama'),
        // 'pengaju' => $this->session->userdata('ses_level'), //SALAH
        // 'divisi' => $this->session->userdata('ses_divisi'), //SALAH
        'pengaju' => $pengajuan['pengaju'],
        'divisi' => $pengajuan['divisi'],
        'waktu' => $waktu,
        'status' => 'Belum Di Bayar',
        'persetujuan' => 'Belum Disetujui',
        'jumlahbayar' => 0,
        'term' => $term + 1,
        'statusbpu' => $this->input->post('statusbpu'),
        'fileupload' => $file_name,
      ];

      $this->db->insert('bpu', $data);
      return 1;
    } else {
      return 0;
    }
  }

  public function simpanumbiaya($file_name)
  {
    // $bpu = $this->db->get_where('',[''=> $this->input->post('')])->result_array();
    $no = $this->input->post('noeksternal');
    $waktu = $this->input->post('waktu');

    $bpu = $this->db->query("SELECT SUM(jumlah) as total from bpu where no = '$no' and waktu = '$waktu'")->row_array();
    $term = $this->db->get_where('bpu',['waktu'=> $waktu, 'no'=>$no])->num_rows();

    $total = $this->input->post('total');
    $bpu = $total + $bpu['total'];
    $sisa = $this->input->post('sisa');
    $totalPengajuan = $this->input->post('totalpengajuan');

    $pengajuan = $this->db->get_where('pengajuan', ['waktu'=>$waktu])->row_array();

    if($bpu<$totalPengajuan){
      $data = [
        'no' => $no,
        'jumlah' => $total,
        'tglcair' => $this->input->post('tanggal'),
        'namabank' => $this->input->post('bank'),
        'norek' => $this->input->post('norek'),
        'namapenerima' => $this->input->post('nama'),
        // 'pengaju' => $this->session->userdata('ses_level'), //SALAH
        // 'divisi' => $this->session->userdata('ses_divisi'), //SALAH
        'pengaju' => $pengajuan['pengaju'],
        'divisi' => $pengajuan['divisi'],
        'waktu' => $waktu,
        'status' => 'Belum Di Bayar',
        'persetujuan' => 'Belum Disetujui',
        'jumlahbayar' => 0,
        'term' => $term + 1,
        'statusbpu' => $this->input->post('statusbpu'),
        'fileupload' => $file_name,
      ];

      $this->db->insert('bpu', $data);
      return 1;
    } else {
      return 0;
    }
  }

  public function simpanEdit()
  {
    $no = $this->input->post('noedit');
    $waktu = $this->input->post('waktu');

    $bpu = $this->db->query("SELECT SUM(jumlah) as total from bpu where no = '$no' and waktu = '$waktu'")->row_array();
    $harga = $this->input->post('harga');
    $pengajuan = $this->db->get_where('pengajuan', ['waktu'=>$waktu])->row_array();
    $total = $this->input->post('quantity') * $this->input->post('harga');

    if($total >= $bpu['total']){
      $data = [
        'rincian' => $this->input->post('rincian'),
        'kota' => $this->input->post('kota'),
        'kota' => $this->input->post('kota'),
        'status' => $this->input->post('status'),
        'harga' => $this->input->post('harga'),
        'quantity' => $this->input->post('quantity'),
        'total' => $total,
      ];

      $this->db->update('selesai', $data, ['no' => $no, 'waktu'=>$waktu]);
      return 1;
    } else {
      return 0;
    }
  }

  public function hapusBudgetSelesai($id, $waktu)
  {

    //  $waktu = str_replace("%20", " ", $waktu);
    //  var_dump($waktu); die;
     $this->db->delete('selesai', ['no'=>$no, 'waktu'=>urldecode($waktu)]);
     $this->db->delete('bpu', ['no'=>$no, 'waktu'=>$waktu]);
  }

  public function getalljumlahbpu($waktu){
    $query = $this->db->query("SELECT SUM(jumlah) AS jumbpu FROM bpu WHERE waktu='$waktu'")->row_array();
    return $query;
  }

  public function getallbpurtp($waktu){
    $query = $this->db->query("SELECT
                                SUM(jumlah) AS jumbpu
                               FROM bpu
                               WHERE waktu='$waktu'
                               AND persetujuan ='Disetujui (Direksi)'
                               AND status ='Belum Di Bayar'
                               OR waktu='$waktu'
                               AND persetujuan ='Disetujui (Sri Dewi Marpaung)'
                               AND status ='Belum Di Bayar'")->row_array();
    return $query;
  }


}
