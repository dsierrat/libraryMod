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

  function busqueda($data){

    try
    {
      $query = $this->pdo
      ->prepare("SELECT isbn, nombre,editorial,descripcion, autor,foto,precio FROM libro WHERE nombre LIKE ? or autor LIKE ?");
      $query->execute(array('%'.$data->nombre.'%','%'.$data->nombre.'%'));

      return $query->fetchAll(PDO::FETCH_OBJ);

    } catch (Exception $e){

      die($e->getMessage());

    }

  }


}
