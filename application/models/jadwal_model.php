
<?php

class jadwal_model extends CI_Model {
  public function __construct(){
    parent::__construct();
  }

  public function jadwalList(){
    $this->db->select('nama, tanggal, detail, foto1, foto2, foto3, pj1, pj2');
    $this->db->from('jadwal_kegiatan');

    $query = $this->db->get();
    return $query->result();
  }
}
?>
