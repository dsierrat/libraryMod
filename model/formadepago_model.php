<?php

require_once'model/database.php';

class formadepagoModel {

  private $pdo;

  function __construct()
  {
      $this->pdo = Database::StartUp();
  }

  public function guardaTarjeta($data){
    try
    {
    $sql = "INSERT INTO tarjeta( banco, tipo, numtarj, caducidad, codseg, ciudad, departamento  )
            VALUES (?,?,?,?,?,?,?)";

    $this->pdo->prepare($sql)
         ->execute(array(
                        $data->banco,
                        $data->tipo,
                        $data->numtarj,
                        $data->caducidad,
                        $data->codseg,
                        $data->ciudad,
                        $data->provincia));

    } catch (Exception $e){

      die($e->getMessage());

    }
  }
  public function guardaEfectivo($data){

    try
    {
    $sql = "INSERT INTO efectivo( nombre, direccion, telefono)
            VALUES (?,?,?)";

    $this->pdo->prepare($sql)
         ->execute(array(
                        $data->nombre,
                        $data->direccion,
                        $data->telefono));

    } catch (Exception $e){

      die($e->getMessage());

    }
    }
    public function guardaVentaxLib(){
      try
      {
      $libros=explode(";", $_COOKIE['carrito']);

      $query=$this->pdo->prepare ("INSERT INTO venta_x_libro (libro_fk) SELECT isbn  from libro WHERE  isbn in ('".implode("','",$libros)."') ");
       $query->execute();


      } catch (Exception $e){

        die($e->getMessage());

      }
  }
  public function guardaVentaxLib2(){
    try
    {
    $libros=explode(";", $_COOKIE['carrito']);

    $query=$this->pdo->prepare ("INSERT INTO venta_x_libro (venta_fk) SELECT id  from venta WHERE  id = venta_fk ");
     $query->execute();


    } catch (Exception $e){

      die($e->getMessage());

    }
}
}



 ?>
