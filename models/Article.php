<?php
class Article {
  private $conn;
  private $table_name = "Article";

  public $id;
  public $titre;
  public $contenu;
  public $dateCreation;
  public $categorie;

  public function __construct($db) {
    $this->conn = $db;
  }

  public function read() {
    $query = "SELECT Article.titre, Article.contenu, Categorie.libelle 
              FROM " . $this->table_name . " 
              JOIN Categorie ON Article.categorie = Categorie.id 
              ORDER BY Article.dateCreation DESC";

    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }

  public function readByCategory($categoryId) {
    $query = "SELECT titre, contenu FROM " . $this->table_name . " 
              WHERE categorie = :id ORDER BY dateCreation DESC";

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id', $categoryId);
    $stmt->execute();
    return $stmt;
  }
}
