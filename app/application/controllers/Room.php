<?php
/**
 *
 */
class Room extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->model('room_model');
  }

  public function roomlist($lantai = '' )
  {
    if ($lantai=='') {
      $where='';
    } else {
      $where = "room LIKE '". $lantai ."__%'";
    }

    date_default_timezone_set('Asia/Makassar');
    $date = date('m/d/Y h:i:s a', time());

    $data['judul'] = "Room List";
    $data['tanggal'] = $date;
    $data['rooms'] = $this->room_model->roomlist($where);

    $this->load->view("layout/header");
    $this->load->view("roomlist", $data);
    $this->load->view("layout/footer");
  }
}

 ?>
