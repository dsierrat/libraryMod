<?php

require_once 'model/admin_model.php';

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

        require_once 'view/header.php';
        require_once 'view/admin/adminMenu.php';
        require_once 'view/admin/admin.php';
        require_once 'view/footer.html';

    }else if(!empty($admin) && $admin->es_admin==false){

        header('Location: index.php');
    }else{

        $this->home();
    }
  }
}

?>
