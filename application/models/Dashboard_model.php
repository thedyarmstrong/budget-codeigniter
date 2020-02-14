<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model{

  public function getallrtp(){
    // date_default_timezone_get('Asia/Jakarta');
    $tanggalnow = date('Y-m-d');
    $query = $this->db->query("SELECT
                                	a.*, b.jenis,
                                	b.nama AS nampeng,
                                	c. NO AS nosel,
                                	c.rincian AS rincian
                                FROM
                                selesai c RIGHT JOIN
                                	(bpu a
                                JOIN pengajuan b ON a.waktu = b.waktu)
                                ON a.waktu = c.waktu AND a.no = c.no
                                WHERE
                                	a.tglcair = '$tanggalnow'
                                AND a.persetujuan = 'Disetujui (Direksi)'")->result_array();
    return $query;
  }

}
