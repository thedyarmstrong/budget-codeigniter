<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{

  public function cekusernya($username,$password){
    $query = $this->db->query("SELECT * FROM tb_user WHERE id_user='$username' AND password=MD5('$password') AND aktif='Y' LIMIT 1");
    return $query;
  }

  public function getalldivisi(){
    $query = $this->db->query("SELECT divisi FROM tb_user WHERE divisi !='Direksi' GROUP BY divisi ORDER BY divisi ASC")->result_array();
    return $query;
  }

}
