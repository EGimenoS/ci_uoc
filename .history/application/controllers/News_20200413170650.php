<?php
class News extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Noticias';
    $data['news'] = $this->news_model->get_news();
    print_r($data['news']);

    $this->load->view('templates/header');
    $this->load->view('news/news', $data);
    $this->load->view('templates/footer');
  }
}
