<?php
class Categorie {
  private $conn;
  private $table_name = "Categorie";

  private $id;
  private $libelle;

  public function __construct($db) {
    $this->conn = $db;
  }

  public function readOne($id) {
      $query = "SELECT libelle FROM " . $this->table_name . " WHERE id = :id";

      $stmt = $this->conn->prepare($query);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function readAll() {
    $query = "SELECT id, libelle FROM " . $this->table_name;

    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getId() {
    return $this->id;
  }

  public function getLibelle() {
    return $this->libelle;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setLibelle($libelle) {
    $this->libelle = $libelle;
  }
}
