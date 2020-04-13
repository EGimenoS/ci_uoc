<?php
class News extends CI_Controller
{
  public function index()
  {


    $data['title'] = ucfirst($page);

    $this->load->view('templates/header');
    $this->load->view('pages/' . $page, $data);
    $this->load->view('templates/footer');
  }
}
