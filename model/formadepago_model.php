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

      $id_tarj=$this->pdo->lastInsertId();

      return  $id_tarj;


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
    public function guardaVenta($id_tarj){
      try{

        date_default_timezone_set('America/Bogota');

          $libros=explode(";", $_COOKIE['carrito']);
          //Guarda en la tabla venta
          $query=$this->pdo->prepare ("INSERT INTO venta (total, fecha_crea, tarjeta_fk) VALUES (
             (SELECT sum(precio) AS suma  FROM libro WHERE  isbn in ('".implode("','",$libros)."'))
                   , '".date("Y-m-d H:i:s")."' ,  '". $id_tarj ."'   ) ");
          $query->execute();
          //obtiene el id de la venta para ponerla en venta_x_libro
          $id=$this->pdo->lastInsertId();
          //Guarda en la tabla venta_x_libro
          $query=$this->pdo->prepare ("INSERT INTO venta_x_libro (fecha_crea, libro_fk, venta_fk)
           SELECT '".date("Y-m-d H:i:s")."' , isbn, ".$id."  from libro WHERE  isbn in ('".implode("','",$libros)."') ");
          $query->execute();

          return $id;  //retorna el id de la venta para la vista en el pdf

      } catch (Exception $e){

        die($e->getMessage());

      }
  }


public function mostrarPdf($id_venta){

  $query = $this->pdo->
  prepare("SELECT v.total, lib.isbn, lib.nombre, lib.precio
          FROM venta v
          INNER JOIN venta_x_libro vxl on vxl.venta_fk = v.id
          INNER JOIN libro lib on lib.isbn = vxl.libro_fk WHERE v.id= ". $id_venta ."  ");
  $query->execute();
  $resultado=$query->fetchAll(PDO::FETCH_OBJ);

  $fichero = 'assets/libreria/countries.txt';

  $texto="";
  foreach($resultado as $r):

      $texto .= $r->isbn.";". $r->nombre .";". "1;" . $r->precio ."; \n";
      $total=$r->total;


  endforeach;

  // Escribe el contenido al fichero
  file_put_contents($fichero, $texto);

  header('Location: model/pdf.php?id='.$total.'');

}

}



 ?>
