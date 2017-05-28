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



  public function mostrarPdf(){

    $fichero = 'assets/libreria/countries.txt';
    // Abre el fichero para obtener el contenido existente
    $actual = file_get_contents($fichero);
    // Añade una nueva persona al fichero
    $actual .= "John Smith\n";
    // Escribe el contenido al fichero
    file_put_contents($fichero, $actual);

    $sistema = new sistemaModel();
   return $sistema->mostrarpdf();



  }

}
?>
