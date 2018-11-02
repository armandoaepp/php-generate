
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/categoria/categoria.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $categoria_controller = new CategoriaController();

  $params = array(
  );


  $response = $categoria_controller->save($params);

  if($response){
    header("Location: ./categoria.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
