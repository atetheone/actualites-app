<?php
require_once '../config/Database.php';
require_once '../models/Article.php';

class ArticleController {
  private $db;
  private $article;

  public function __construct() {
    $database = new Database();
    $this->db = $database->getConnection();
    $this->article = new Article($this->db);
  }

  public function getAllArticles() {
    $articles = $this->article->getAllArticles();
    include '../views/articles.php';
  }

  public function getArticleByCategorieId($id) {
    $articles =  $this->article->readByCategory($id);
    include '../views/articles.php';
  }
}
