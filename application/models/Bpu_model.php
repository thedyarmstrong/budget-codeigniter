<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpu_model extends CI_Model{

  public function getbpuuncekb1(){

    $query = $this->db->query("SELECT
                                a.noid AS noid,
                              	a.jenis AS jenis,
                              	a.nama AS nampeng,
                                a.pengaju AS namapic,
                              	a.waktu AS waktupeng,
                                b.no AS nosel,
                              	b.rincian AS rincian,
                              	b.status AS status,
                              	b.total AS totalsel,
                              	c.jumlah AS jmlbpu,
                              	c.tglcair AS tglcair,
                              	c.namabank AS namabank,
                              	c.norek AS norek,
                              	c.namapenerima AS nampen,
                              	c.pengaju AS pengajubpu,
                              	c.divisi AS divisi,
                              	c.status AS statbpu,
                              	c.persetujuan AS setujubpu,
                              	c.term AS termbpu,
                              	c.fileupload AS fileupload
                              FROM
                              	pengajuan a
                              JOIN selesai b ON a.waktu = b.waktu
                              JOIN bpu c ON b.waktu = c.waktu AND b.no = c.no
                              WHERE
                              	c.persetujuan = 'Belum Disetujui'
                                AND c.checkby IS NULL
                                AND a.status='Disetujui'
                                AND a.jenis='B1'
                                ORDER BY c.tglcair ASC")->result_array();
    return $query;
  }

  public function getbpuuncekb2(){
    $query = $this->db->query("SELECT
                                a.noid AS noid,
                              	a.jenis AS jenis,
                              	a.nama AS nampeng,
                                a.pengaju AS namapic,
                              	a.waktu AS waktupeng,
                                b.no AS nosel,
                              	b.rincian AS rincian,
                              	b.status AS status,
                              	b.total AS totalsel,
                              	c.jumlah AS jmlbpu,
                              	c.tglcair AS tglcair,
                              	c.namabank AS namabank,
                              	c.norek AS norek,
                              	c.namapenerima AS nampen,
                              	c.pengaju AS pengajubpu,
                              	c.divisi AS divisi,
                              	c.status AS statbpu,
                              	c.persetujuan AS setujubpu,
                              	c.term AS termbpu,
                              	c.fileupload AS fileupload
                              FROM
                              	pengajuan a
                              JOIN selesai b ON a.waktu = b.waktu
                              JOIN bpu c ON b.waktu = c.waktu AND b.no = c.no
                              WHERE
                              	c.persetujuan = 'Belum Disetujui'
                                AND c.checkby IS NULL
                                AND a.status='Disetujui'
                                AND a.jenis='B2'
                                ORDER BY c.tglcair ASC")->result_array();
    return $query;
  }

  public function getbpuuncekrutin(){
    $query = $this->db->query("SELECT
                                a.noid AS noid,
                              	a.jenis AS jenis,
                              	a.nama AS nampeng,
                                a.pengaju AS namapic,
                              	a.waktu AS waktupeng,
                                b.no AS nosel,
                              	b.rincian AS rincian,
                              	b.status AS status,
                              	b.total AS totalsel,
                              	c.jumlah AS jmlbpu,
                              	c.tglcair AS tglcair,
                              	c.namabank AS namabank,
                              	c.norek AS norek,
                              	c.namapenerima AS nampen,
                              	c.pengaju AS pengajubpu,
                              	c.divisi AS divisi,
                              	c.status AS statbpu,
                              	c.persetujuan AS setujubpu,
                              	c.term AS termbpu,
                              	c.fileupload AS fileupload
                              FROM
                              	pengajuan a
                              JOIN selesai b ON a.waktu = b.waktu
                              JOIN bpu c ON b.waktu = c.waktu AND b.no = c.no
                              WHERE
                              	c.persetujuan = 'Belum Disetujui'
                                AND c.checkby IS NULL
                                AND a.status='Disetujui'
                                AND a.jenis='Rutin'
                                ORDER BY c.tglcair ASC")->result_array();
    return $query;
  }

  public function getbpuunceknonrutin(){
    $query = $this->db->query("SELECT
                                a.noid AS noid,
                              	a.jenis AS jenis,
                              	a.nama AS nampeng,
                                a.pengaju AS namapic,
                              	a.waktu AS waktupeng,
                                b.no AS nosel,
                              	b.rincian AS rincian,
                              	b.status AS status,
                              	b.total AS totalsel,
                              	c.jumlah AS jmlbpu,
                              	c.tglcair AS tglcair,
                              	c.namabank AS namabank,
                              	c.norek AS norek,
                              	c.namapenerima AS nampen,
                              	c.pengaju AS pengajubpu,
                              	c.divisi AS divisi,
                              	c.status AS statbpu,
                              	c.persetujuan AS setujubpu,
                              	c.term AS termbpu,
                              	c.fileupload AS fileupload
                              FROM
                              	pengajuan a
                              JOIN selesai b ON a.waktu = b.waktu
                              JOIN bpu c ON b.waktu = c.waktu AND b.no = c.no
                              WHERE
                              	c.persetujuan = 'Belum Disetujui'
                                AND c.checkby IS NULL
                                AND a.status='Disetujui'
                                AND a.jenis='Non Rutin'
                                ORDER BY c.tglcair ASC")->result_array();
    return $query;
  }

  public function ubahcekbpu(){
    date_default_timezone_set('Asia/Bangkok');
    $waktu    = $this->input->post('waktu');
    $nosel    = $this->input->post('nosel');
    $termbpu  = $this->input->post('termbpu');
    $checkby  = $this->input->post('checkby');
    $datetime = date('Y-m-d H:i:s');

    $query = $this->db->query("UPDATE bpu SET checkby ='$checkby',
                                              tglcheck ='$datetime'
                                           WHERE
                                              waktu ='$waktu'
                                           AND no ='$nosel'
                                           AND term ='$termbpu'");
  }

  public function getbpub1app(){

    $query = $this->db->query("SELECT
                                a.noid AS noid,
                              	a.jenis AS jenis,
                              	a.nama AS nampeng,
                                a.pengaju AS namapic,
                              	a.waktu AS waktupeng,
                                b.no AS nosel,
                              	b.rincian AS rincian,
                              	b.status AS status,
                              	b.total AS totalsel,
                              	c.jumlah AS jmlbpu,
                              	c.tglcair AS tglcair,
                              	c.namabank AS namabank,
                              	c.norek AS norek,
                              	c.namapenerima AS nampen,
                              	c.pengaju AS pengajubpu,
                              	c.divisi AS divisi,
                              	c.status AS statbpu,
                              	c.persetujuan AS setujubpu,
                              	c.term AS termbpu,
                              	c.fileupload AS fileupload,
                                c.checkby AS checkby,
                                c.tglcheck AS tglcheck
                              FROM
                              	pengajuan a
                              JOIN selesai b ON a.waktu = b.waktu
                              JOIN bpu c ON b.waktu = c.waktu AND b.no = c.no
                              WHERE
                              	c.persetujuan = 'Belum Disetujui'
                                AND c.checkby IS NOT NULL
                                AND a.status='Disetujui'
                                AND a.jenis='B1'
                                ORDER BY c.tglcair ASC")->result_array();
    return $query;
  }

  public function getbpub2app(){
    $query = $this->db->query("SELECT
                                a.noid AS noid,
                              	a.jenis AS jenis,
                              	a.nama AS nampeng,
                                a.pengaju AS namapic,
                              	a.waktu AS waktupeng,
                                b.no AS nosel,
                              	b.rincian AS rincian,
                              	b.status AS status,
                              	b.total AS totalsel,
                              	c.jumlah AS jmlbpu,
                              	c.tglcair AS tglcair,
                              	c.namabank AS namabank,
                              	c.norek AS norek,
                              	c.namapenerima AS nampen,
                              	c.pengaju AS pengajubpu,
                              	c.divisi AS divisi,
                              	c.status AS statbpu,
                              	c.persetujuan AS setujubpu,
                              	c.term AS termbpu,
                              	c.fileupload AS fileupload,
                                c.checkby AS checkby,
                                c.tglcheck AS tglcheck
                              FROM
                              	pengajuan a
                              JOIN selesai b ON a.waktu = b.waktu
                              JOIN bpu c ON b.waktu = c.waktu AND b.no = c.no
                              WHERE
                              	c.persetujuan = 'Belum Disetujui'
                                AND c.checkby IS NOT NULL
                                AND a.status='Disetujui'
                                AND a.jenis='B2'
                                ORDER BY c.tglcair ASC")->result_array();
    return $query;
  }

  public function getbpurutinapp(){
    $query = $this->db->query("SELECT
                                a.noid AS noid,
                              	a.jenis AS jenis,
                              	a.nama AS nampeng,
                                a.pengaju AS namapic,
                              	a.waktu AS waktupeng,
                                b.no AS nosel,
                              	b.rincian AS rincian,
                              	b.status AS status,
                              	b.total AS totalsel,
                              	c.jumlah AS jmlbpu,
                              	c.tglcair AS tglcair,
                              	c.namabank AS namabank,
                              	c.norek AS norek,
                              	c.namapenerima AS nampen,
                              	c.pengaju AS pengajubpu,
                              	c.divisi AS divisi,
                              	c.status AS statbpu,
                              	c.persetujuan AS setujubpu,
                              	c.term AS termbpu,
                              	c.fileupload AS fileupload,
                                c.checkby AS checkby,
                                c.tglcheck AS tglcheck
                              FROM
                              	pengajuan a
                              JOIN selesai b ON a.waktu = b.waktu
                              JOIN bpu c ON b.waktu = c.waktu AND b.no = c.no
                              WHERE
                              	c.persetujuan = 'Belum Disetujui'
                                AND c.checkby IS NOT NULL
                                AND a.status='Disetujui'
                                AND a.jenis='Rutin'
                                ORDER BY c.tglcair ASC")->result_array();
    return $query;
  }

  public function getbpunonrutinapp(){
    $query = $this->db->query("SELECT
                                a.noid AS noid,
                              	a.jenis AS jenis,
                              	a.nama AS nampeng,
                                a.pengaju AS namapic,
                                a.pengaju AS namapic,
                              	a.waktu AS waktupeng,
                                b.no AS nosel,
                              	b.rincian AS rincian,
                              	b.status AS status,
                              	b.total AS totalsel,
                              	c.jumlah AS jmlbpu,
                              	c.tglcair AS tglcair,
                              	c.namabank AS namabank,
                              	c.norek AS norek,
                              	c.namapenerima AS nampen,
                              	c.pengaju AS pengajubpu,
                              	c.divisi AS divisi,
                              	c.status AS statbpu,
                              	c.persetujuan AS setujubpu,
                              	c.term AS termbpu,
                              	c.fileupload AS fileupload,
                                c.checkby AS checkby,
                                c.tglcheck AS tglcheck
                              FROM
                              	pengajuan a
                              JOIN selesai b ON a.waktu = b.waktu
                              JOIN bpu c ON b.waktu = c.waktu AND b.no = c.no
                              WHERE
                              	c.persetujuan = 'Belum Disetujui'
                                AND c.checkby IS NOT NULL
                                AND a.status='Disetujui'
                                AND a.jenis='Non Rutin'
                                ORDER BY c.tglcair ASC")->result_array();
    return $query;
  }

  public function setujuibpu($waktu,$nosel,$termbpu,$tglcair){

    $db2 = $this->load->database('database_kedua', TRUE);

    $bridge = $db2->query("SELECT MAX(transfer_req_id) AS maxtrans FROM data_transfer")->row_array();
    $maxtrans = $bridge['maxtrans'];
    $bulannya = substr($maxtrans,2,2);
    $bulansekarang = date('m');

    if($bulansekarang != $bulannya){
      $transidthn = date('y');
      $transidbln = date('m');
      $transferid = $transidthn.$transidbln."0001";
    }else{
      $transferid = $maxtrans + 1;
    }
    // echo "<br>";
    // echo $transferid;
    $datetime = date('Y-m-d H:i:s');
    $jam = "14:00:00";
    $tglcairnya = $tglcair." ".$jam;

    $caribpu = $this->db->query("SELECT a.*, b.nama AS namapeng, b.jenis AS jenisnya
                                  FROM bpu a
                                  JOIN pengajuan b ON a.waktu = b.waktu
                                  WHERE a.waktu='$waktu' AND no='$nosel' AND term='$termbpu'")->row_array();
    $transfertype   = "1";
    $statusbpu      = $caribpu['statusbpu'];
    $waktu_request  = $caribpu['waktustempel'];
    $norek          = $caribpu['norek'];
    $narek          = $caribpu['namapenerima'];
    $namabank       = $caribpu['namabank'];
    $kodebank       = "123";
    $berita_transfer= "MRI";
    $jumlah         = $caribpu['jumlah'];
    $terotorisasi   = "1";
    $namapembuat    = $caribpu['pengaju'];
    $namaprojek     = $caribpu['namapeng'];
    $jenisproject   = $caribpu['jenisnya'];

    $insertkebridge = $db2->query("INSERT INTO data_transfer (
                                                    transfer_req_id,
                                                    transfer_type,
                                                    jenis_pembayaran_id,
                                                    keterangan,
                                                    waktu_request,
                                                    jadwal_transfer,
                                                    norek,
                                                    pemilik_rekening,
                                                    bank,
                                                    kode_bank,
                                                    berita_transfer,
                                                    jumlah,
                                                    terotorisasi,
                                                    hasil_transfer,
                                                    ket_transfer,
                                                    nm_pembuat,
                                                    nm_validasi,
                                                    nm_otorisasi,
                                                    nm_manual,
                                                    jenis_project,
                                                    nm_project
                                                    )
                                                    VALUES
                                                    (
                                                      '$transferid',
                                                      '1',
                                                      '1',
                                                      '$statusbpu',
                                                      '$waktu_request',
                                                      '$tglcairnya',
                                                      '$norek',
                                                      '$narek',
                                                      '$namabank',
                                                      '$kodebank',
                                                      '$berita_transfer',
                                                      '$jumlah',
                                                      '$terotorisasi',
                                                      '1',
                                                      'Antri',
                                                      '$namapembuat',
                                                      '',
                                                      '',
                                                      '',
                                                      '$namaprojek',
                                                      '$jenisproject'
                                                    )");

    $query = $this->db->query("UPDATE bpu SET persetujuan='Disetujui (Direksi)', transfer_req_id='$transferid'
                                           WHERE
                                           waktu ='$waktu'
                                           AND no ='$nosel'
                                           AND term ='$termbpu'");

  }


}
