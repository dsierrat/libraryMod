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

    $this->inicio();

    require_once 'view/header.html';
    require_once 'view/mainPage.php';
    require_once 'view/footer.html';

  }


  public function inicio(){

    $sistema = new sistemaModel();
    $sistema->mostrarlibros();

  }
}


?>
