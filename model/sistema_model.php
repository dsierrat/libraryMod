<?php

require_once'model/database.php';

class sistemaModel {

  private $pdo;

  function __construct()
  {
      $this->pdo = Database::StartUp();
  }

  function mostrarlibros(){

    try
    {
      $query = $this->pdo
      ->prepare("SELECT isbn, nombre, autor,foto,precio FROM libro ORDER BY RAND() LIMIT 9");

      $query->execute();
      return $query->fetchAll(PDO::FETCH_OBJ);

    } catch (Exception $e){

      die($e->getMessage());

    }

  }

}
