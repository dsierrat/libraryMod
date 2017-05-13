<?php
//require_once 'model/formadepago_model.php';

class formadepago{

  private $model;
  public $flag;

  function __construct(){
   $this->model = new formadepagoModel();
    $this->flag =false;
  }

  public function index(){

    require_once 'view/header.html';
    require_once 'view/login.php';
    require_once 'view/footer.html';

  }

  public function home(){
    // if(admin){
    require_once 'view/header.html';
    require_once 'view/Usuario/formadepago.php';
    require_once 'view/footer.html';

  }

  public function registrar(){
    // if(admin){
    require_once 'view/header.html';
    require_once 'view/Usuario/formadepago.php';
    require_once 'view/footer.html';

  }
?>
