<?php
require_once 'config/Database.php';
require_once 'models/Article.php';

class ArticleController {
  private $db;
  private $article;

  public function __construct() {
    $database = new Database();
    $this->db = $database->getConnection();
    $this->article = new Article($this->db);
  }

  public function index() {
    $stmt = $this->article->read();
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    include 'views/articles/index.php';
  }
}
