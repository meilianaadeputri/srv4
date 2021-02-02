<?php
/**
 *
 */
class Member_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function daftarmember(){
    $this->db->select('*');
    $this->db->from('members');

    $query=$this->db->get();
    return $query->result();
  }

  public function daftarmembernginap(){
    $this->db->select('m.member_ID, m.nama, m.kota, g.room, g.date_in');
    $this->db->from('members m');
    $this->db->join('guests g', 'm.member_ID=g.member_ID');
    $this->db->where('g.date_out=',null);

    $query=$this->db->get();
    return $query->result();
  }

  public function memberlist($where = '')
  {
    $this->db->select('member_ID, nama, m.kota, c.Country, m.telepon');
    $this->db->join('country c', 'c.CC=m.negara');

    if($where != '') $this->db->where($where);

    $query = $this->db->get('members m');
    return $query->result_array();
  }
}
 ?>
