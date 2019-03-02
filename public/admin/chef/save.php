
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/chef/chef.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $chef_controller = new ChefController();

  $titulo   = $_POST["titulo"] ;
  $subtitulo   = $_POST["subtitulo"] ;
  $resumen   = $_POST["resumen"] ;
  $descripcion   = $_POST["descripcion"] ;
  $item   = $_POST["item"] ;
  $publicar   = $_POST["publicar"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "chef") ;

  $params = array(
    "titulo"   => $titulo,
    "subtitulo"   => $subtitulo,
    "resumen"   => $resumen,
    "descripcion"   => $descripcion,
    "item"   => $item,
    "publicar"   => $publicar,
    "imagen"  => $imagen,
  );


  $response = $chef_controller->save($params);

  if($response){
    header("Location: ./chef.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
