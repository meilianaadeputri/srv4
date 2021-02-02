<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 *
 */
class resep extends CI_Controller
{

  public function index()
  {
    $this->load->view('resep/list');
  }

  public function palbas()
  {
    $this->load->view('resep/pallubasa');
  }
}
?>
