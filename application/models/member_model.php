<?php

class member_model extends CI_Model {
  public function __construct(){
    parent::__construct();
  }

  public function memberList(){
    $this->db->select('nama, prodi, angkatan, telepon');
    $this->db->from('member');

    if(isset($_GET['tahun'])) {
      $tahun=$_GET['tahun'];
      $this->db->where('angkatan',$tahun);
    }

    $query = $this->db->get();
    return $query->result();
  }

  public function strukturorganisasi(){
    $this->db->select('s.foto, s.nama, m.prodi, m.angkatan, s.status, m.telepon');
    $this->db->from('struktur s');
    $this->db->join('member m', 's.nama=m.nama');
    $this->db->order_by('no');

    $query = $this->db->get();
    return $query->result();
  }
}
?>
