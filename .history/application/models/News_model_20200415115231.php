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

  public function get_news_for_api($id = FALSE, $page = FALSE)
  {
    $limit = 10;
    $offset = $page * $limit;
    if ($id === FALSE) {
      $this->db->select('titulo, id, fecha');
      $query = $this->db->get('noticias', $limit, $offset);
      return $query->result_array();
    }

    $query = $this->db->get_where('noticias', array('id' => $id));
    return $query->row_array();
  }

  public function get_news_by_category($category = FALSE)
  {
    $this->db->select('titulo, id, fecha');
    $this->db->from('noticias');
    $this->db->join('categorias', 'noticias.id = categorias.noticia_id');
    $query = $this->db->get();
    return $query->result_array();
  }
}
