
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/evento/evento.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $evento_controller = new EventoController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $nombreseo   = $_POST["nombreseo"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "evento") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $params = array(
    "id"   => $id,
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "nombreseo"   => $nombreseo,
    "orden"   => $orden,
    "fecha"   => $fecha,
    "imagen"  => $imagen,
  );


  $response = $evento_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./evento.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
