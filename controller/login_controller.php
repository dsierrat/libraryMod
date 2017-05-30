<?php

require_once 'model/admin_model.php';
require_once 'controller/admin_controller.php';

class login{

  private $model;

  function __construct(){
    $this->model = new adminModel();
  }

  public function home() {

    require_once 'view/header.php';
    require_once 'view/login.php';
    require_once 'view/footer.html';

  }

  public function verificar(){

    $dataUser = new adminModel();

    $dataUser->user = $_POST['username'];
    $dataUser->pass = $_POST['password'];

    $admin=$this->model->esAdmin($dataUser);

    if(!empty($admin) && $admin->es_admin==true){

      $dataAdmin = new admin();
      $dataAdmin->home();

    }else if(!empty($admin) && $admin->es_admin==false){

        header('Location: index.php');
    }else{

        $this->home();
    }
  }
}

?>
