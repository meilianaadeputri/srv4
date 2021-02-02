<?php
use Restserver\Libraries\REST_Controller;

class Member extends REST_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('member_model');
  }

  public function daftarmembernginap_get(){
    $data=$this->member_model->daftarmembernginap();
    $this->response(['members'=>$data], 200);
  }
}
 ?>
