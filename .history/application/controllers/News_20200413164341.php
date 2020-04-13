<?php
class News extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Noticias';

    $this->load->view('templates/header');
    $this->load->view('pages/news',  $data);
    $this->load->view('templates/footer');
  }
}
