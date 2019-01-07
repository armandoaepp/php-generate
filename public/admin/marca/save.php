
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/marca/marca.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $marca_controller = new MarcaController();

  $nombre   = $_POST["nombre"] ;
  $publicar   = $_POST["publicar"] ;
  $params = array(
    "nombre"   => $nombre,
    "publicar"   => $publicar,
  );


  $response = $marca_controller->save($params);

  if($response){
    header("Location: ./marca.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
