<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modeldepan extends CI_Model {

  public function loadberitabaru(){
    $q = "select * from bantuan order by id_bantuan desc LIMIT 4";
    return $this->db->query($q);
  }

  public function loadberita(){
    $q = "select * from bantuan order by id_bantuan desc";
    return $this->db->query($q);
  }

  public function beritadetail($id){
    $q = "select * from bantuan where id_bantuan = '$id'";
    return $this->db->query($q);
  }
}
