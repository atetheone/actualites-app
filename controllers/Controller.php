<?php
require_once 'daos/ArticleDAO.php';
require_once 'daos/CategorieDAO.php';

class Controller {
  private $articleDAO;
  private $categorieDAO;

  public function __construct() {
    $this->articleDAO = new ArticleDAO();
    $this->categorieDAO = new CategorieDAO();
  }

  public function getAllArticles() {
    $categories = $this->categorieDAO->getAllCategories();
    $articles = $this->articleDAO->getAllArticles();
    include 'views/articles.php';
  }

  public function getArticleByCategorieId($categorie) {
    $categories = $this->categorieDAO->getAllCategories();
    $articles =  $this->articleDAO->getArticlesByCategorie($categorie);
    include 'views/articles.php';
  }
}
