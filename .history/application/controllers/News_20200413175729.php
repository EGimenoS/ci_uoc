<?php
class News extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Noticias';
    $data['news'] = $this->news_model->get_news();

    $this->load->view('templates/header');
    $this->load->view('news/news', $data);
    $this->load->view('templates/footer');
  }

  public function view($slug = NULL)
  {
    $data['new'] = $this->news_model->get_news($slug);
    if (empty($data['new'])) {
      show_404();
    }

    $data['title'] = $data['new']['titulo']
  }
}
