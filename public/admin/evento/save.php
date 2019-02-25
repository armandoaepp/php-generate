
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
  $nombreseo   = $_POST["nombreseo"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "evento") ;

  $params = array(
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "nombreseo"   => $nombreseo,
    "orden"   => $orden,
    "fecha"   => $fecha,
    "imagen"  => $imagen,
  );


  $response = $evento_controller->save($params);

  if($response){
    header("Location: ./evento.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
