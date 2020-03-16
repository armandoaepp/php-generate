
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/tipo-publicacion/tipo-publicacion.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $tipo_publicacion_controller = new TipoPublicacionController();

  $descripcion   = $_POST["descripcion"] ;
  $publicar   = $_POST["publicar"] ;

  $params = array(
    "descripcion"   => $descripcion,
    "publicar"   => $publicar,
  );


  $response = $tipo_publicacion_controller->save($params);

  if($response){
    header("Location: ./tipo-publicacion.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
