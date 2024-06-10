<?php
require_once 'daos/CategorieDAO.php';

class CategorieController {
  private $categorieDAO;

  public function __construct() {
    $this->categorieDAO = new CategorieDAO();
  }


  public function getAllCategories() {
    return $this->categorieDAO->readAll();;
  }
}
