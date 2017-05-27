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

}



 ?>
