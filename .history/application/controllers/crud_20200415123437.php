<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    /* Standard Libraries of codeigniter are required */
    $this->load->database();
    $this->load->helper('url');
    /* ------------------ */

    $this->load->library('grocery_CRUD');
  }

  public function index()
  {
    echo "<h1>Welcome to the world of Codeigniter</h1>"; //Just an example to ensure that we get into the function
    die();
  }

  public function noticias()
  {
    $crud = new grocery_CRUD();
    $crud->set_table('noticias');
    $output = $this->grocery_crud->render();

    $this->_noticias_output($output);
  }

  function _noticias_output($output = null)

  {
    $this->load->view('crud_noticias.php', $output);
  }
}
