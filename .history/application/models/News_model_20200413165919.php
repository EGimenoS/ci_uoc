<?php
class NewsModel extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function get_news($slug = FALSE)
  {
    if ($slug === FALSE) {
      $query = $this->db->get('news');
      return $query->result_array()

    }
  }
}
