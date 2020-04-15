<?php
class News_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function get_news($slug = FALSE)
  {
    if ($slug === FALSE) {
      $query = $this->db->get('noticias');
      return $query->result_array();
    }

    $query = $this->db->get_where('noticias', array('slug' => $slug));
    return $query->row_array();
  }

  public function get_news_for_api($id = FALSE)
  {
    if ($id === FALSE) {
      $query = $this->db->get('noticias');
      return $query->result_array();
    }

    $query = $this->db->get_where('noticias', array('id' => $id));
    return $query->row_array();
  }
}
