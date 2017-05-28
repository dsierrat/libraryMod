<?php

require_once'model/database.php';

class carritoModel {

  private $pdo;

  function __construct()
  {
      $this->pdo = Database::StartUp();
  }


  function mostrarInfo(){

    try
    {

      $libros=explode(";", $_COOKIE['carrito']);

      $query = $this->pdo->prepare("SELECT isbn, nombre, autor,foto,precio, descripcion, editorial
       FROM libro WHERE  isbn in ('".implode("','",$libros)."') ");


      $query->execute();

      $total=$this->mostrarSum();

      return $query->fetchAll(PDO::FETCH_OBJ);

    } catch (Exception $e){

      die($e->getMessage());

    }

  }
function mostrarSum(){

  try
  {

    $libros=explode(";", $_COOKIE['carrito']);

  $query=$this->pdo->prepare ("SELECT sum(precio) AS suma
          FROM libro WHERE  isbn in ('".implode("','",$libros)."') ");

    $query->execute();

      return $query->fetchAll(PDO::FETCH_OBJ);;

  } catch (Exception $e){

    die($e->getMessage());

  }
}

}
