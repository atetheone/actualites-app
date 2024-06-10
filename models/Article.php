<?php
class Article {
  private $id;
  private $titre;
  private $contenu;
  private $dateCreation;
  private $categorie;

  public function __construct($id, $titre, $contenu, $dateCreation, $categorie) {
    $this->id = $id;
    $this->titre = $titre;
    $this->contenu = $contenu;
    $this->dateCreation = $dateCreation;
    $this->categorie = $categorie;
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
