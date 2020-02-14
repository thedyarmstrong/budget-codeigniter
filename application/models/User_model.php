<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

  public function getalluseraktif(){
    $query = $this->db->query("SELECT * FROM tb_user WHERE aktif='Y' OR resign IS NULL ORDER BY nama_user ASC")->result_array();
    return $query;
  }

  public function getallusernonaktif(){
    $query = $this->db->query("SELECT * FROM tb_user WHERE aktif='N' OR resign='Resign' ORDER BY nama_user ASC")->result_array();
    return $query;
  }


}
