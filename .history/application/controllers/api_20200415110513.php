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
    // Users from a data store e.g. database
    $news = $this->news_model->get_news_forr_api();

    if ($news) {
      $this->response($news, 200);
    } else {
      $this->response(NULL, 404);
    }
  }

  function new_get()
  {
    if (!$this->get('id')) {
      $this->response(NULL, 400);
    }

    $new = $this->news_model->get_news_forr_api($this->get('id'));

    if ($new) {
      $this->response($new, 200); // 200 being the HTTP response code
    } else {
      $this->response(NULL, 404);
    }
  }
}
