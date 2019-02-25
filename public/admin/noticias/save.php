
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/noticias/noticias.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $noticias_controller = new NoticiasController();

  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $banner   = $_POST["banner"] ;
  $nombreseo   = $_POST["nombreseo"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $activo   = $_POST["activo"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "noticias") ;

  $params = array(
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "banner"   => $banner,
    "nombreseo"   => $nombreseo,
    "orden"   => $orden,
    "fecha"   => $fecha,
    "activo"   => $activo,
    "imagen"  => $imagen,
  );


  $response = $noticias_controller->save($params);

  if($response){
    header("Location: ./noticias.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
