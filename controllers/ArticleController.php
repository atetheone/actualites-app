<?php
require_once '../daos/ArticleDAO.php';

class ArticleController {
  private $articleDAO;

  public function __construct() {
    $this->articleDAO = new ArticleDAO();
  }

  public function getAllArticles() {
    $articles = $this->articleDAO->getAllArticles();
    include '../views/articles.php';
  }

  public function getArticleByCategorieId($id) {
    $articles =  $this->articleDAO->readByCategory($id);
    include '../views/articles.php';
  }
}
