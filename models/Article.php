<?php
class Article {
  private $conn;
  private $table_name = "Article";

  private $id;
  private $titre;
  private $contenu;
  private $dateCreation;
  private $categorie;

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

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getTitre() {
    return $this->titre;
  }

  public function setTitre($titre) {
    $this->titre = $titre;
  }

  public function getContenu() {
    return $this->contenu;
  }

  public function setContenu($contenu) {
    $this->contenu = $contenu;
  }

  public function getDateCreation() {
    return $this->dateCreation;
  }

  public function setDateCreation($dateCreation) {
    $this->dateCreation = $dateCreation;
  }

  public function getCategorie() {
    return $this->categorie;
  }

  public function setCategorie($categorie) {
    $this->categorie = $categorie;
  }
}
