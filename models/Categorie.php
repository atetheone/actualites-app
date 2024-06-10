<?php
class Categorie {
  private $id;
  private $libelle;

  public function __construct($id, $libelle) {
    $this->id = $id;
    $this->libelle = $libelle;
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
