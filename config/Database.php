<?php
class Database {
  private $host = "localhost";
  private $db_name = "mglsi_news";
  private $username = "root";
  private $password = "";
  public $conn;

  public function getConnection() {
    $this->conn = null;

    try {
      $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // echo "Connected successfully to the database";
    } catch(PDOException $exception) {
      echo "Database connection error: " . $exception->getMessage();
    }

    return $this->conn;
  }
}
