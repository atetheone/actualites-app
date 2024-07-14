<?php
class Database {
  private static $host = "localhost";
  private static $db_name = "mglsi_news";
  private static $username = "root";
  private static $password = "";

  public static function getConnection() {
    $conn = null;

    try {
      $conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $exception) {
      echo "Database connection error: " . $exception->getMessage();
    }

    return $conn;
  }
}