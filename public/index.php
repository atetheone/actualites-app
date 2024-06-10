<?php
require_once '../controllers/ArticleController.php';

$articleController = new ArticleController();


if (isset($_GET['categorie'])) {
  $categorieId = htmlspecialchars($_GET['categorie']);
  $articleController->getArticleByCategorieId($categorieId);
} else {
  $articleController->getAllArticles();
}

