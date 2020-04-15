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
    $new_id = $data['new']['id'];
    $data['categories'] = $this->category_model->get_categories($new_id);
    if (empty($data['new'])) {
      show_404();
    }

    $data['title'] = $data['new']['titulo'];
    $this->load->view('templates/header');
    $this->load->view('news/view', $data);
    $this->load->view('templates/footer');
  }

  public function news_crud()
  {
    $this->load->library('grocery_CRUD');

    $crud = new grocery_CRUD();
    $crud->set_table('noticias');
    $output = $this->grocery_crud->render();

    echo "<pre>";
    print_r($output);
    echo "</pre>";
    die();
  }
}
