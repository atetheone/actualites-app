<?php

class Article {
  private $conn;

  public function __construct($conn) {
    $this->conn = $conn;
  }



  public function getAllArticles() {
    $query = $this->conn->query("SELECT Article.titre, Article.contenu, Categorie.libelle 
                                 FROM Article 
                                 JOIN Categorie ON Article.categorie = Categorie.id 
                                 ORDER BY Article.dateCreation DESC");

    return $query->fetchAll(PDO::FETCH_ASSOC);
  }
}