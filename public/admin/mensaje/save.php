
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/mensaje/mensaje.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $mensaje_controller = new MensajeController();

  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $descripcion_2   = $_POST["descripcion_2"] ;
  $slogan   = $_POST["slogan"] ;
  $mision   = $_POST["mision"] ;
  $vision   = $_POST["vision"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "mensaje") ;

  $params = array(
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "descripcion_2"   => $descripcion_2,
    "slogan"   => $slogan,
    "mision"   => $mision,
    "vision"   => $vision,
    "orden"   => $orden,
    "fecha"   => $fecha,
    "imagen"  => $imagen,
  );


  $response = $mensaje_controller->save($params);

  if($response){
    header("Location: ./mensaje.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
