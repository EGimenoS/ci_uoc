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
    $news = $this->news_model->get_news();

    if ($users) {
      $this->response($users, 200);
    } else {
      $this->response(NULL, 404);
    }
  }
  }
}
