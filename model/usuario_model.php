<?php

require_once'model/database.php';

class usuarioModel {

  private $pdo;

  function __construct()
  {
      $this->pdo = Database::StartUp();
  }

  public function registro($data){

    try
    {
    $sql = "INSERT INTO usuario (id, tipo_documento, nombre, password, email, direccion, telefono, es_admin)
            VALUES (?,?,?,?,?,?,?,false)";

    $this->pdo->prepare($sql)
         ->execute(array(
                        $data->id,
                        $data->tipo_documento,
                        $data->nombre,
                        $data->password,
                        $data->email,
                        $data->direccion,
                        $data->telefono));

    } catch (Exception $e){

      die($e->getMessage());

    }


  }

}



 ?>
