
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/publicacion/publicacion.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $publicacion_controller = new PublicacionController();

  $tipo_publicacion_id   = $_POST["tipo_publicacion_id"] ;
  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $url_file   = $_POST["url_file"] ;
  $publicar   = $_POST["publicar"] ;

  $params = array(
    "tipo_publicacion_id"   => $tipo_publicacion_id,
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "url_file"   => $url_file,
    "publicar"   => $publicar,
  );


  $response = $publicacion_controller->save($params);

  if($response){
    header("Location: ./publicacion.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
