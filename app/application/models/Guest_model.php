<?php
/**
 *
 */
class Guest_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function daftartamu(){
    $this->db->select('m.nama, g.room, g.date_in');
    $this->db->from('guests g');
    $this->db->join('members m', 'g.member_ID=m.member_ID');

    $query=$this->db->get();
    return $query->result();
  }

  public function daftartamunginap(){
    $this->db->select('*');
    $this->db->from('members m');
    $this->db->join('guests g', 'm.member_ID=g.member_ID');
    $this->db->where('g.date_out=',null);

    $query=$this->db->get();
    return $query->result();
  }

  public function guestlist($where = '')
  {
    $this->db->select('g.room, m.nama, rt.rtype, g.date_in, g.date_out');
    $this->db->join('rooms rm', 'room');
    $this->db->join('members m', 'member_ID');
    $this->db->join('roomtype rt', 'rm.rtype=rt.kode');

    if($where != '') $this->db->where($where);

    $query = $this->db->get('guests g');
    return $query->result_array();
  }
}
 ?>
