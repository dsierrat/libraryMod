<?php
require_once 'model/usuario_model.php';

class usuario{

  private $model;
  public $flag;

  function __construct(){
   $this->model = new usuarioModel();
    $this->flag =false;
  }

  public function index(){

<<<<<<< HEAD
    require_once 'view/header.html';
    require_once 'view/login.php';//para que despues del registro ingrese a logearse
=======
    require_once 'view/header.php';
    require_once 'view/login.php';
>>>>>>> 879b59c7ba955715e47c6fdaceeb5a32267c1a3f
    require_once 'view/footer.html';

  }

  public function home(){
    // if(admin){
    require_once 'view/header.php';
    require_once 'view/Usuario/usuario.php';
    require_once 'view/footer.html';

  }

  public function registrar(){
    // if(admin){
    require_once 'view/header.php';
    require_once 'view/Usuario/usuario.php';
    require_once 'view/footer.html';

  }

  public function guardar(){
    $dataUsuario = new usuarioModel();

    $dataUsuario->tipo_documento = $_POST['Tipo'];
    $dataUsuario->id = $_POST['numerDoc'];
    $dataUsuario->nombre = $_POST['nombre'];
    $dataUsuario->password = $_POST['password'];
    $dataUsuario->email = $_POST['username'];
    $dataUsuario->direccion = $_POST['direccion'];
    $dataUsuario->telefono = $_POST['telefono'];
    //  $dataAdmin->foto = $_POST['foto'];

    $this->model->registro($dataUsuario);
    $this->flag=true;
    $this->index();


  }
}
