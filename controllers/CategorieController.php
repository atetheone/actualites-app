<?php
require_once '../config/Database.php';
require_once '../models/Categorie.php';
require_once '../models/Article.php';

class CategorieController {
  private $db;
  private $category;
  private $article;

  public function __construct() {
    $database = new Database();
    $this->db = $database->getConnection();
    $this->category = new Categorie($this->db);
    $this->article = new Article($this->db);
  }


  public function getAllCategories() {
    $categories = $this->category->readAll();
    return $categories;
  }
}
