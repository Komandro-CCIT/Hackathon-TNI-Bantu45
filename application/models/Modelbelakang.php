<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelbelakang extends CI_Model {

  public function simpanberita($judul,$alamat,$langt,$longt,$deskripsi) {

		$address = str_replace(" ", "+", $alamat);
	$url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=Indonesia";
	$json = file_get_contents($url);
	$json = json_decode($json);

	$langt1 = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
	$longt1 = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};

  $q = "insert into bantuan values(null,'$judul','$alamat','$langt1','$longt1','$deskripsi',null)";
  return $this->db->query($q);
  }

  public function tambahberitakirim($data) {
    foreach ($data as $key) {
      $q = $this->db->insert('kirim_bantuan', $key);
      return $this->db->query($q);
    }
  }

  public function ceklogin1($email,$pass){
      //$cek = '1';
  		$q = "select * from tb_member where email = '$email' and password='$pass'";
  	    //return $this->db->query($q);
        $query = $this->db->query($q);
        return $query->num_rows();
    }

    public function ceklogin2($email,$pass){
        //$cek = '1';
        $q = "select * from tb_admin where email = '$email' and password='$pass'";
          //return $this->db->query($q);
          $query = $this->db->query($q);
          return $query->num_rows();
      }

      public function loadmember($email,$pswd) {
        $q = "select * from tb_member where email = '$email' and password='$pswd'";
        return $this->db->query($q);
      }

      public function loadadmin($email,$pswd) {
        $q = "select * from tb_admin where email = '$email' and password='$pswd'";
        return $this->db->query($q);
      }

  public function beritabantuan(){
    $q = "select distinct b.nama_bantuan, kb.id_bantuan, b.tgl from bantuan b, kirim_bantuan kb
    where b.id_bantuan = kb.id_bantuan";
    return $this->db->query($q);
  }

  public function beritakirimanbantuandetail($id){
    $q = "select * from kirim_bantuan where id_bantuan = '$id'";
    return $this->db->query($q);
  }
}
