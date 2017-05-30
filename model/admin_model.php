<?php

require_once'model/database.php';

class adminModel {

  private $pdo;

  function __construct()
  {
      $this->pdo = Database::StartUp();
  }

  public function esAdmin($user){

    try
    {
      $query = $this->pdo
      ->prepare("SELECT email, password, es_admin FROM usuario WHERE email= ? and password=?");

      $query->execute(array($user->user,
                            $user->pass));

        return $query->fetch(PDO::FETCH_OBJ);

    } catch (Exception $e){

      die($e->getMessage());

    }

  }

  public function registro($data){

    try
    {
    $sql = "INSERT INTO libro (isbn,nombre,autor,editorial,estado,descripcion,cantidad,precio,esBachillerato)
            VALUES (?,?,?,?,true,?,?,?,?)";

    $this->pdo->prepare($sql)
         ->execute(array($data->isbn, $data->nombre,
                        $data->autor, $data->editorial,
                        $data->descripcion,
                        $data->cantidad, $data->precio,
                        $data->esBachillerato));

  /*  $sql2= "INSERT INTO clasificacion (id_usuario) VALUES (?)";
    $this->pdo->prepare($sql2)
         ->execute(array($data->clasificacion_fk,
                        $data2->id
                      ));
*/
    } catch (Exception $e){

      die($e->getMessage());

    }


  }

  public function consultas(){

    try
    {
      $query = $this->pdo
      ->prepare("SELECT COUNT(vxl.libro_fk) as cant, lib.nombre,lib.autor,lib.precio,  (lib.precio * COUNT(vxl.libro_fk)) as total   FROM venta_x_libro vxl
                  INNER JOIN libro lib on vxl.libro_fk=lib.isbn
                  group by libro_fk order by cant DESC LIMIT 20");

      $query->execute();
      return  $query->fetchAll(PDO::FETCH_OBJ);

    } catch (Exception $e){

      die($e->getMessage());

    }

  }

}



 ?>
