<?php

/**
 * undocumented class
 */
class Pages extends CI_Controller
{
  public function view($page = 'home')
  {
    if (!file_exists(APPPATH . 'views/pages/' . $page . 'php')) {
      # code...
    }
  }
}
