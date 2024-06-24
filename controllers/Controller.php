<?php
require_once 'daos/ArticleDAO.php';
require_once 'daos/CategorieDAO.php';

class Controller {
  private $articleDAO;
  private $categorieDAO;
  private $categories;

  public function __construct() {
    $this->articleDAO = new ArticleDAO();
    $this->categorieDAO = new CategorieDAO();
    $this->categories = $this->categorieDAO->getAllCategories();
  }

  public function getAllArticles() {
    $categories = $this->categories;
    $articles = $this->articleDAO->getAllArticles();
    include 'views/home.php';
  }

  public function getArticleByCategorieId($categorieId) {
    $categories = $this->categories;
    $categorieLibelle = $this->categorieDAO->getCategorieById($categorieId);
    $articles =  $this->articleDAO->getArticlesByCategorie($categorieId);
    include 'views/articles.php';
  }

  public function notFoundResource() {
    $categories = $this->categories;
    include 'views/404.php';
  }
}
