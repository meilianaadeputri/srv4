<?php
class Room_model extends CI_Model {


  public function _construct() {
    parent::_construct();
  }

  public function roomrate(){
    $query = $this->db->get('roomtype');
    return $query->result();
  }

  public function roomcount(){
    $this->db->select('t.rtype, t.rate, COUNT(*) jumlah_kamar');
    $this->db->from('rooms r');
    $this->db->join('roomtype t', 'ON(r.rtype=t.kode)');
    $this->db->group_by('r.rtype');

    $query=$this->db->get();
    return $query->result();
  }

  public function daftarkamar(){
    $this->db->select('r.room, t.rtype, rv.dview, t.rate, (t.rate*rv.addv)+t.rate AS vrate');
    $this->db->from('rooms r');
    $this->db->join('roomtype t', 'ON(r.rtype=t.kode)');
    $this->db->join('views rv', 'ON(r.dview=rv.vcode)');

    $query=$this->db->get();
    return $query->result();
  }

  public function roomList($where = '') {
    // semua daftar kamar
    $this->db->select('rm.room, rt.rtype, rv.dview, (rt.rate*rv.addv)+rt.rate AS frate, g.date_in, g.date_out');
    $this->db->join('roomtype rt', 'ON(rm.rtype=rt.kode)');
    $this->db->join('views rv', 'ON(rm.dview=rv.vcode)');
    $this->db->join('guests g', 'room');

    if($where != '') $this->db->where($where);

    $query = $this->db->get('rooms rm');
    return $query->result_array();
  }
}
 ?>
