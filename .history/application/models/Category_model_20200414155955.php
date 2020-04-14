<?php
class Category_model extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function get_categories($id)
  {
    $query = $this->db->get_where('categorias', array('noticia_id' => $id));
    return $query->result_array();
  }
}
