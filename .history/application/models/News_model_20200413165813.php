<?php
class NewsModel extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function get_news($slug = FALSE)
  {
  }
}
