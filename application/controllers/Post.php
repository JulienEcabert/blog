<?php

/**
 *
 */
class Post extends CI_Controller
{
  public function __construct() {
    parent::__construct();
    $this->load->database();
    $this->load->model('Post_model');
  }

  public function index()
  {
  }

  public function add()
  {
    $title = $this->input->post('title');
    $content = $this->input->post('content');

    $this->form_validation->set_rules('title', 'Titre', 'trim|required');
    $this->form_validation->set_rules('content', 'Contenu', 'trim|required|min_length[15]');

    if ($this->form_validation->run()) {
      $this->Post_model->add($title, $content);
      return;
    }
    $this->load->view('Post_add', ['title' => $title, 'content' => $content]);
  }
}


 ?>
