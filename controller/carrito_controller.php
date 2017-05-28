<?php
require_once 'model/carrito_model.php';

class carrito{

  private $model;
  public $flag;

  function __construct(){
    $this->model = new carritoModel();
    $this->flag =false;
  }


  public function index(){

    require_once 'view/header.php';
    require_once 'view/carrito/carrito.php';
    require_once 'view/footer.html';

  }

  public function inicio(){

    $carrito = new carritoModel();

    if(isset( $_COOKIE['carrito'])){
    return $carrito->mostrarInfo();
  }
  }

  public function agregar(){

      $isbn=$_GET['id'];

      if (isset( $_COOKIE['carrito'])) {

        $cookies = explode(";", $_COOKIE['carrito']);
        $yaEnCarrito=in_array($isbn, $cookies);

        if($yaEnCarrito==false){
            setcookie('carrito', $_COOKIE['carrito'] . ';'.$isbn);
        }

      }else{
          setcookie('carrito',$isbn);
      }

      header('Location: index.php');
  }

  public function ver(){

    $cookies = explode(";", $_COOKIE['carrito']);
    print_r($cookies);
    echo count(explode(";", $_COOKIE['carrito']));
  }
  public function versum(){

    $carrito = new carritoModel();
    return $carrito->mostrarSum();
  }


}
