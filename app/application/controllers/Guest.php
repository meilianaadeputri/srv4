<?php
/**
 *
 */
class Guest extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('guest_model');
  }

  public function guestlist($bulan='')
  {
    if ($bulan=='') {
      $where='';
    } else {
      $where = "MONTH(g.date_in)=".$bulan;
    }

    $data['judul'] = "Guest List";
    $data['guests'] = $this->guest_model->guestlist($where);

    $this->load->view("layout/header");
    $this->load->view("guestlist", $data);
    $this->load->view("layout/footer");
  }
}

 ?>
