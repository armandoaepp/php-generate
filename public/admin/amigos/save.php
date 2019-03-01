
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/amigos/amigos.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $amigos_controller = new AmigosController();

  $titulo   = $_POST["titulo"] ;
  $imagen_2   = $_POST["imagen_2"] ;
  $email   = $_POST["email"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "amigos") ;

  $params = array(
    "titulo"   => $titulo,
    "imagen_2"   => $imagen_2,
    "email"   => $email,
    "orden"   => $orden,
    "fecha"   => $fecha,
    "imagen"  => $imagen,
  );


  $response = $amigos_controller->save($params);

  if($response){
    header("Location: ./amigos.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
