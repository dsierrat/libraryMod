
 <?php

 $controller = "sistema";

 // Todo esta lógica hara el papel de un FrontController
 if(!isset($_REQUEST['c'])){

     require_once "controller/$controller"."_controller.php";
     $controller = new $controller;
     $controller->index();
 }else{

     // Obtenemos el controlador que queremos cargar
     $controller = strtolower($_REQUEST['c']);
     $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
     // Instanciamos el controlador
     require_once "controller/$controller"."_controller.php";
     //$controller = ucwords($controller) . 'Controller';
     $controller = new $controller;

     // Llama la accion
     call_user_func( array( $controller, $accion ) );
 }
 ?>
