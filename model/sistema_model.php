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
      ->prepare("SELECT  FROM libro ORDER BY RAND() LIMIT 1");

      $query->execute();
      return $query->fetch(PDO::FETCH_OBJ);

    } catch (Exception $e){

      die($e->getMessage());

    }

  }

}
