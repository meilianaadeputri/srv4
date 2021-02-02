<?php
use Restserver\Libraries\REST_Controller;

class Rooms extends REST_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('room_model');
  }

  public function daftarkamar_get(){
    $data=$this->room_model->daftarkamar();
    $this->response(['rooms'=>$data], 200);
  }
}
 ?>
