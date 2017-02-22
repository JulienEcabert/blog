<?php

/**
 *
 */
class Post_model extends CI_Model
{
  private $table = 'post';

  private $title;
  private $content;

  public function __contruct() {
    parent::__construct();
  }

  public function add($title, $content) {
    $data = [
      'title' => $title,
      'content' => $content
    ];
    return $this->db->insert($this->table, $data);
  }

  public function findAll(){
    return $this->db->get($this->table)->result_object();
  }
}


 ?>
