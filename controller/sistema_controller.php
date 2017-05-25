<?php
require_once 'model/sistema_model.php';

class Sistema{

  private $model;
  public $flag;

  function __construct(){
    $this->model = new sistemaModel();
    $this->flag =false;
  }

  public function index(){


    require_once 'view/header.php';
    require_once 'view/mainPage.php';
    require_once 'view/footer.html';

  }

  public function mostrar(){


    require_once 'view/header.php';
    require_once 'view/Usuario/busqueda.php';
    require_once 'view/footer.html';

  }


  public function inicio(){

    $sistema = new sistemaModel();
   return $sistema->mostrarlibros();
  }

  public function buscar(){

    $sistema = new sistemaModel();

      $sistema->nombre = $_POST['search'];
      return  $sistema->busqueda($sistema);

  }

}


?>
