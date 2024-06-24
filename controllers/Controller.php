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

  public function getArticleByCategorieId($categorie) {
    $categories = $this->categories;

    $articles =  $this->articleDAO->getArticlesByCategorie($categorie);
    include 'views/articles.php';
  }

  public function notFoundResource() {
    $categories = $this->categories;
    include 'views/404.php';
  }
}
