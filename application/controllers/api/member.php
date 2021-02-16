<?php
use Restserver\Libraries\REST_Controller;

class member extends REST_Controller{
  function __construct(){
    parent::__construct();

    $this->load->model('member_model');
  }

  public function memberList_get(){
    $data=$this->member_model->memberList();
    $this->response(['members'=>$data], 200);
  }

  public function strukturorganisasi_get(){
    $data=$this->member_model->strukturorganisasi();
    $this->response(['members'=>$data], 200);
  }
}
?>
