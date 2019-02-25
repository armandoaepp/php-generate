
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/noticias/noticias.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $noticias_controller = new NoticiasController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $banner   = $_POST["banner"] ;
  $nombreseo   = $_POST["nombreseo"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $activo   = $_POST["activo"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "noticias") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $params = array(
    "id"   => $id,
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "banner"   => $banner,
    "nombreseo"   => $nombreseo,
    "orden"   => $orden,
    "fecha"   => $fecha,
    "activo"   => $activo,
    "imagen"  => $imagen,
  );


  $response = $noticias_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./noticias.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
