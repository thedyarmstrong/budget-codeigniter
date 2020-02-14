<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budget_model extends CI_Model{

  function getprojectb1(){
    $db3 = $this->load->database('database_ketiga', TRUE);
    $getprob1 = $db3->query("SELECT kode,nama FROM project WHERE visible='y' ORDER BY nama ASC")->result_array();
    return $getprob1;
  }

  function getkatnon(){
    $querynya = $this->db->query("SELECT * FROM kategori_nonrutin ORDER BY kode ASC")->result_array();
    return $querynya;
  }

  function getallnama(){
    $querynama = $this->db->query("SELECT * FROM tb_user WHERE resign IS NULL ORDER BY nama_user ASC")->result_array();
    return $querynama;
  }

  function insertkepengajuan(){
    $namapengaju = $this->input->post('idpengaju');
    $caridivisi = $this->db->query("SELECT divisi FROM tb_user WHERE nama_user='$namapengaju'")->row_array();
    $divisi = $caridivisi['divisi'];

      $data = [
          "jenis"       => $this->input->post('jenis', true),
          "nama"        => $this->input->post('nama', true),
          "tahun"       => $this->input->post('tahun', true),
          "pengaju"     => $namapengaju,
          "divisi"      => $divisi,
          "status"      => $this->input->post('status', true),
          "pembuat"     => $this->input->post('pembuat', true),
          "kodeproject" => $this->input->post('kodepro', true),
          "katnonrut"   => $this->input->post('katnonrut', true),
      ];
      $this->db->insert('pengajuan', $data);
  }

  function getbudgetb12020(){
    $listnya = $this->db->query("SELECT
                                  	a.*,
                                  	SUM(c.jumlah) AS totbpu
                                  FROM
                                  	pengajuan a
                                  LEFT JOIN bpu c ON a.waktu = c.waktu
                                  WHERE
                                  	a.STATUS = 'Disetujui'
                                  AND a.tahun = '2020'
                                  AND a.jenis = 'B1'
                                  GROUP BY a.waktu")->result_array();
    return $listnya;
  }

  function getbudgetb22020(){
    $listnya = $this->db->query("SELECT
                                  	a.*,
                                  	SUM(c.jumlah) AS totbpu
                                  FROM
                                  	pengajuan a
                                  LEFT JOIN bpu c ON a.waktu = c.waktu
                                  WHERE
                                  	a.STATUS = 'Disetujui'
                                  AND a.tahun = '2020'
                                  AND a.jenis = 'B2'
                                  GROUP BY a.waktu")->result_array();
    return $listnya;
  }

  function getbudgetrutin2020(){
    $listnya = $this->db->query("SELECT
                                  	a.*,
                                  	SUM(c.jumlah) AS totbpu
                                  FROM
                                  	pengajuan a
                                  LEFT JOIN bpu c ON a.waktu = c.waktu
                                  WHERE
                                  	a.STATUS = 'Disetujui'
                                  AND a.tahun = '2020'
                                  AND a.jenis = 'Rutin'
                                  GROUP BY a.waktu")->result_array();
    return $listnya;
  }

  function getbudgetnonrutin2020(){
    $divisi = $this->session->userdata('ses_divisi');
    if ($this->session->userdata('ses_divisi') == 'Direksi' OR $this->session->userdata('ses_divisi') == 'FINANCE'){
      $listnya = $this->db->query("SELECT
                                    	a.*,
                                    	SUM(c.jumlah) AS totbpu
                                    FROM
                                    	pengajuan a
                                    LEFT JOIN bpu c ON a.waktu = c.waktu
                                    WHERE
                                    	a.STATUS = 'Disetujui'
                                    AND a.tahun = '2020'
                                    AND a.jenis = 'Non Rutin'
                                    GROUP BY a.waktu")->result_array();
    }
    else{
      $listnya = $this->db->query("SELECT
                                    	a.*,
                                    	SUM(c.jumlah) AS totbpu
                                    FROM
                                    	pengajuan a
                                    LEFT JOIN bpu c ON a.waktu = c.waktu
                                    WHERE
                                    	a.STATUS = 'Disetujui'
                                    AND a.tahun = '2020'
                                    AND a.jenis = 'Non Rutin'
                                    AND a.divisi = '$divisi'
                                    GROUP BY a.waktu")->result_array();
    }
    return $listnya;
  }

  function getbudgetemergency2020(){
    $listnya = $this->db->query("SELECT
                                  	a.*,
                                  	SUM(c.jumlah) AS totbpu
                                  FROM
                                  	pengajuan a
                                  LEFT JOIN bpu c ON a.waktu = c.waktu
                                  WHERE
                                  	a.STATUS = 'Disetujui'
                                  AND a.tahun = '2020'
                                  AND a.jenis = 'Emergency'
                                  GROUP BY a.waktu")->result_array();
    return $listnya;
  }

  function getbudgetb12019(){
    $listnya = $this->db->query("SELECT
                                    a.*,
                                    SUM(c.jumlah) AS totbpu
                                  FROM
                                    pengajuan a
                                  LEFT JOIN bpu c ON a.waktu = c.waktu
                                  WHERE
                                    a.STATUS = 'Disetujui'
                                  AND a.tahun = '2019'
                                  AND a.jenis = 'B1'
                                  GROUP BY a.waktu")->result_array();
    return $listnya;
  }

  function getbudgetb22019(){
    $listnya = $this->db->query("SELECT
                                  	a.*,
                                  	SUM(c.jumlah) AS totbpu
                                  FROM
                                  	pengajuan a
                                  LEFT JOIN bpu c ON a.waktu = c.waktu
                                  WHERE
                                  	a.STATUS = 'Disetujui'
                                  AND a.tahun = '2019'
                                  AND a.jenis = 'B2'
                                  GROUP BY a.waktu")->result_array();
    return $listnya;
  }

  function getbudgetrutin2019(){
    $listnya = $this->db->query("SELECT
                                  	a.*,
                                  	SUM(c.jumlah) AS totbpu
                                  FROM
                                  	pengajuan a
                                  LEFT JOIN bpu c ON a.waktu = c.waktu
                                  WHERE
                                  	a.STATUS = 'Disetujui'
                                  AND a.tahun = '2019'
                                  AND a.jenis = 'Rutin'
                                  GROUP BY a.waktu")->result_array();
    return $listnya;
  }

  function getbudgetnonrutin2019(){
    $divisi = $this->session->userdata('ses_divisi');
    if ($this->session->userdata('ses_divisi') == 'Direksi' OR $this->session->userdata('ses_divisi') == 'FINANCE'){
      $listnya = $this->db->query("SELECT
                                    	a.*,
                                    	SUM(c.jumlah) AS totbpu
                                    FROM
                                    	pengajuan a
                                    LEFT JOIN bpu c ON a.waktu = c.waktu
                                    WHERE
                                    	a.STATUS = 'Disetujui'
                                    AND a.tahun = '2019'
                                    AND a.jenis = 'Non Rutin'
                                    GROUP BY a.waktu")->result_array();
    }
    else{
      $listnya = $this->db->query("SELECT
                                    	a.*,
                                    	SUM(c.jumlah) AS totbpu
                                    FROM
                                    	pengajuan a
                                    LEFT JOIN bpu c ON a.waktu = c.waktu
                                    WHERE
                                    	a.STATUS = 'Disetujui'
                                    AND a.tahun = '2019'
                                    AND a.jenis = 'Non Rutin'
                                    AND a.divisi = '$divisi'
                                    GROUP BY a.waktu")->result_array();
    }
    return $listnya;
  }

  function getbudgetemergency2019(){
    $listnya = $this->db->query("SELECT
                                    a.*,
                                    SUM(c.jumlah) AS totbpu
                                  FROM
                                    pengajuan a
                                  LEFT JOIN bpu c ON a.waktu = c.waktu
                                  WHERE
                                    a.STATUS = 'Disetujui'
                                  AND a.tahun = '2019'
                                  AND a.jenis = 'Emergency'
                                  GROUP BY a.waktu")->result_array();
    return $listnya;
  }

  function getbudgetb12018(){
    $listnya = $this->db->query("SELECT
                                    a.*,
                                    SUM(c.jumlah) AS totbpu
                                  FROM
                                    pengajuan a
                                  LEFT JOIN bpu c ON a.waktu = c.waktu
                                  WHERE
                                    a.STATUS = 'Disetujui'
                                  AND a.tahun = '2018'
                                  AND a.jenis = 'B1'
                                  OR
                                  a.STATUS = 'Finish'
                                  AND a.tahun = '2018'
                                  AND a.jenis = 'B1'
                                  GROUP BY a.waktu")->result_array();
    return $listnya;
  }

  function getbudgetb22018(){
    $listnya = $this->db->query("SELECT
                                  	a.*,
                                  	SUM(c.jumlah) AS totbpu
                                  FROM
                                  	pengajuan a
                                  LEFT JOIN bpu c ON a.waktu = c.waktu
                                  WHERE
                                  	a.STATUS = 'Disetujui'
                                  AND a.tahun = '2018'
                                  AND a.jenis = 'B2'
                                  OR
                                  a.STATUS = 'Finish'
                                  AND a.tahun = '2018'
                                  AND a.jenis = 'B2'
                                  GROUP BY a.waktu")->result_array();
    return $listnya;
  }

  function getbudgetrutin2018(){
    $listnya = $this->db->query("SELECT
                                  	a.*,
                                  	SUM(c.jumlah) AS totbpu
                                  FROM
                                  	pengajuan a
                                  LEFT JOIN bpu c ON a.waktu = c.waktu
                                  WHERE
                                  	a.STATUS = 'Disetujui'
                                  AND a.tahun = '2018'
                                  AND a.jenis = 'Rutin'
                                  OR
                                  a.STATUS = 'Finish'
                                  AND a.tahun = '2018'
                                  AND a.jenis = 'Rutin'
                                  GROUP BY a.waktu")->result_array();
    return $listnya;
  }

  function getbudgetnonrutin2018(){
    $listnya = $this->db->query("SELECT
                                  	a.*,
                                  	SUM(c.jumlah) AS totbpu
                                  FROM
                                  	pengajuan a
                                  LEFT JOIN bpu c ON a.waktu = c.waktu
                                  WHERE
                                  	a.STATUS = 'Disetujui'
                                  AND a.tahun = '2018'
                                  AND a.jenis = 'Non Rutin'
                                  OR
                                  a.STATUS = 'Finish'
                                  AND a.tahun = '2018'
                                  AND a.jenis = 'Non Rutin'
                                  GROUP BY a.waktu")->result_array();
    return $listnya;
  }

  function getbudgetemergency2018(){
    $listnya = $this->db->query("SELECT
                                    a.*,
                                    SUM(c.jumlah) AS totbpu
                                  FROM
                                    pengajuan a
                                  LEFT JOIN bpu c ON a.waktu = c.waktu
                                  WHERE
                                    a.STATUS = 'Disetujui'
                                  AND a.tahun = '2018'
                                  AND a.jenis = 'Emergency'
                                  OR
                                  a.STATUS = 'Finish'
                                  AND a.tahun = '2018'
                                  AND a.jenis = 'Emergency'
                                  GROUP BY a.waktu")->result_array();
    return $listnya;
  }

}
