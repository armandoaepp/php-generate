
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/evento/evento.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $evento_controller = new EventoController();

  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $url   = $_POST["url"] ;
  $item   = $_POST["item"] ;
  $publicar   = $_POST["publicar"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "evento") ;

  $params = array(
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "url"   => $url,
    "item"   => $item,
    "publicar"   => $publicar,
    "imagen"  => $imagen,
  );


  $response = $evento_controller->save($params);

  if($response){
    header("Location: ./evento.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
