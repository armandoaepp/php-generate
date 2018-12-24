
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/traslados/traslados.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $traslados_controller = new TrasladosController();

  $titulo   = $_POST["titulo"] ;
  $presentacion   = $_POST["presentacion"] ;
  $item1   = $_POST["item1"] ;
  $item2   = $_POST["item2"] ;
  $item3   = $_POST["item3"] ;
  $item4   = $_POST["item4"] ;
  $descitem1   = $_POST["descitem1"] ;
  $descitem2   = $_POST["descitem2"] ;
  $descitem3   = $_POST["descitem3"] ;
  $descitem4   = $_POST["descitem4"] ;
  $promocion   = $_POST["promocion"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "traslados") ;

  $params = array(
    "titulo"   => $titulo,
    "presentacion"   => $presentacion,
    "item1"   => $item1,
    "item2"   => $item2,
    "item3"   => $item3,
    "item4"   => $item4,
    "descitem1"   => $descitem1,
    "descitem2"   => $descitem2,
    "descitem3"   => $descitem3,
    "descitem4"   => $descitem4,
    "promocion"   => $promocion,
    "imagen"  => $imagen,
  );


  $response = $traslados_controller->save($params);

  if($response){
    header("Location: ./traslados.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
