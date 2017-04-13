<?php

class login{

  function __construct(){
    # code...
  }


  public function index(){

    require_once 'view/header.html';
    require_once 'view/mainPage.php';
    require_once 'view/footer.html';

  }

  public function home() {

    require_once 'view/header.html';
    require_once 'view/login.php';
    require_once 'view/footer.html';

  }

  public function verificar()
  {
    // if(admin){
    require_once 'view/header.html';
    require_once 'view/admin/admin.php';
    require_once 'view/footer.html';

  }
}


?>
