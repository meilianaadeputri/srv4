<?php
use Restserver\Libraries\REST_Controller;

class Guest extends REST_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('guest_model');
  }

  public function daftartamunginap_get(){
    $data=$this->guest_model->daftartamunginap();
    $this->response(['guests'=>$data], 200);
  }
}
 ?>
