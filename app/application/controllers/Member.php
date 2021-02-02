<?php
/**
 *
 */
class Member extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('member_model');
  }

  public function memberlist($inisial='')
  {
    if ($inisial=='') {
      $where='';
    } else {
      $where = "nama LIKE '". $inisial ."%'";
    }

    $data['judul'] = "Member List";
    $data['members'] = $this->member_model->memberlist($where);

    $this->load->view("layout/header");
    $this->load->view("memberlist", $data);
    $this->load->view("layout/footer");
  }
}

 ?>
