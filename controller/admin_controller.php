<?php
require_once 'model/admin_model.php';

class admin{

  private $model;

  function __construct(){
    $this->model = new adminModel();
  }


  public function index(){

    require_once 'view/header.html';
    require_once 'view/mainPage.php';
    require_once 'view/footer.html';

  }

  public function registrar(){
    // if(admin){
    require_once 'view/header.html';
    require_once 'view/admin/adminMenu.php';
    require_once 'view/admin/registro.php';
    require_once 'view/footer.html';

  }

  public function guardar(){

    $dataAdmin = new adminModel();

    $dataAdmin->isbn = $_POST['isbn'];
    $dataAdmin->nombre = $_POST['nombre'];
    $dataAdmin->autor = $_POST['autor'];
    $dataAdmin->editorial = $_POST['editor'];
    $dataAdmin->descripcion = $_POST['descripcion'];
    $dataAdmin->cantidad = $_POST['cantidad'];
    $dataAdmin->precio = $_POST['precio'];
    $dataAdmin->esBachillerato = $_POST['clasificacion'];
  //  $dataAdmin->foto = $_POST['foto'];

    $this->model->registro($dataAdmin);

  }
}


?>
