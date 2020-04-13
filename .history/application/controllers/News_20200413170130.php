<?php
class News extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Noticias';
    $data['news'] = $this->News_model->get_posts();

    $this->load->view('templates/header');
    $this->load->view('news/news', $data);
    $this->load->view('templates/footer');
  }
}
