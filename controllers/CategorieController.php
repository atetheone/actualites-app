<?php
require_once 'config/Database.php';
require_once 'models/Categorie.php';
require_once 'models/Article.php';

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

  public function show($id) {
    $category = $this->category->readOne($id);
    $stmt = $this->article->readByCategory($id);
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    include 'views/categories.php';
  }

  public function getCategories() {
    $categories = $this->category->readAll();
    return $categories;
  }
}
