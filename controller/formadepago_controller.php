<?php
require_once 'model/formadepago_model.php';
class formadepago{
  private $model;
  public $flag;
  function __construct(){
   $this->model = new formadepagoModel();
    $this->flag =false;
  }
  public function index(){
    require_once 'view/header.php';
    require_once 'view/login.php';
    require_once 'view/footer.html';
  }
  public function home(){
    require_once 'view/header.php';
    require_once 'view/Usuario/formadepago.php';
    require_once 'view/footer.html';
  }
  public function registrar(){
    require_once 'view/header.php';
    require_once 'view/Usuario/formadepago.php';
    require_once 'view/footer.html';
  }
  //para tarjeta
  public function guardar(){
    $dataFormaPt = new formadepagoModel();
    $dataFormaPt->banco = $_POST['banco'];
    $dataFormaPt->tipo = $_POST['tipo'];
    $dataFormaPt->numtarj = $_POST['numerTarj'];
    $dataFormaPt->caducidad = $_POST['caducidad'];
    $dataFormaPt->codseg = $_POST['codPost'];
    $dataFormaPt->ciudad = $_POST['ciudad'];
    $dataFormaPt->provincia = $_POST['provincia'];

    $id_tarj= $this->model->guardaTarjeta($dataFormaPt);
    $id_venta=$this->model->guardaVenta($id_tarj);

    //Como ya guardo los registros de ventas se borran las cookies del carrito
    setcookie("carrito", "", time()-3600);
    $this->model->mostrarPdf($id_venta);
  //  $this->index();
  }
  //para efectivo
  public function guardar1(){
    $dataFormaPe = new formadepagoModel();
    $dataFormaPe->nombre = $_POST['nombre'];
    $dataFormaPe->direccion = $_POST['direccion'];
    $dataFormaPe->telefono = $_POST['telefono'];
    $this->model->guardaEfectivo($dataFormaPe);
      $this->index();
  }
}
?>
