<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{

  function __construct()
  {
    // Construct the parent class
    parent::__construct();
  }

  public function news_get()
  {

    $id = $this->get('id');


    if ($id === null) {
      $news = $this->news_model->get_news_for_api();
      // Check if the news data store contains users
      if ($news) {
        // Set the response and exit
        $this->response($news, 200);
      } else {
        // Set the response and exit
        $this->response([
          'status' => false,
          'message' => 'No  se encontraron noticias'
        ], 404);
      }
    } else {
      $new = $this->news_model->get_news_for_api($id);
      if ($new) {
        $this->response($new, 200);
      } else {
        $this->response([
          'status' => false,
          'message' => 'No se encuentra la noticia con el id solicitado'
        ], 404);
      }
    }
  }

  public function categories_get {
    
  }
}
