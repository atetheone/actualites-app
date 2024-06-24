<?php
require_once 'models/Article.php';
require_once 'config/Database.php';

class ArticleDAO {
  private $table_name = "article"; // "articles
  private $conn;

  public function __construct() {
    $this->db = new Database();
    $this->conn = $this->db->getConnection();
  }

  public function getAllArticles() {
    $query = "SELECT Article.titre, Article.contenu, Article.dateCreation, Categorie.libelle 
              FROM " . $this->table_name . " 
              JOIN Categorie ON Article.categorie = Categorie.id 
              ORDER BY Article.dateCreation DESC";

    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getArticlesByCategorie($categoryId) {
    $query = "SELECT titre, contenu, dateCreation, libelle FROM " . $this->table_name . ", Categorie 
              WHERE Categorie.id = Article.categorie AND categorie = :id ORDER BY dateCreation DESC";

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id', $categoryId);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
/*




  public function readByCategory($categoryId) {
    $query = "SELECT titre, contenu, dateCreation, libelle FROM " . $this->table_name . ", Categorie 
              WHERE Categorie.id = Article.categorie AND categorie = :id ORDER BY dateCreation DESC";

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id', $categoryId);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

*/