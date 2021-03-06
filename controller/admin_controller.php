<?php
require_once 'model/admin_model.php';

class admin{

  private $model;
  public $flag;

  function __construct(){
    $this->model = new adminModel();
    $this->flag =false;
  }


  public function index(){

    require_once 'view/header.php';
    require_once 'view/mainPage.php';
    require_once 'view/footer.html';

  }

  public function home(){
    // if(admin){
    require_once 'view/header.php';
    require_once 'view/admin/adminMenu.php';
    require_once 'view/admin/admin.php';
    require_once 'view/footer.html';

  }

  public function registrar(){
    // if(admin){
    require_once 'view/header.php';
    require_once 'view/admin/adminMenu.php';
    if($this->flag==true){
      require_once'view/success.html';
    }
    require_once 'view/admin/registro.php';
    require_once 'view/footer.html';

  }

  public function consultasPrincipal(){

      return $this->model->consultas();


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
    $this->flag=true;
    $this->registrar();

  }
}


?>
