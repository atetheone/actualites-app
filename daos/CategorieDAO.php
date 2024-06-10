<?php
require_once '../config/Database.php';
require_once '../models/Categorie.php';

class CategorieDAO {
  private $conn;
  private $table_name = "categorie";

  public function __construct() {
    $db = new Database();
    $this->conn = $db->getConnection();
  }

  public function readAll() {
    $query = "SELECT id, libelle FROM " . $this->table_name;

    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function readOne($id) {
    $query = "SELECT libelle FROM " . $this->table_name . " WHERE id = :id";

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
/*

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
*/