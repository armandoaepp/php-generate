
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/facultad/facultad.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $facultad_controller = new FacultadController();

  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $activo   = $_POST["activo"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "facultad") ;

  $params = array(
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "orden"   => $orden,
    "fecha"   => $fecha,
    "activo"   => $activo,
    "imagen"  => $imagen,
  );


  $response = $facultad_controller->save($params);

  if($response){
    header("Location: ./facultad.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
