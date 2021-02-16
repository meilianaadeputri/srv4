<?php
use Restserver\Libraries\REST_Controller;

class jadwal extends REST_Controller{
  function __construct(){
    parent::__construct();

    $this->load->model('jadwal_model');
  }

  public function jadwalList_get(){
    $data=$this->jadwal_model->jadwalList();
    $this->response(['jadwal'=>$data], 200);
  }
}
?>
