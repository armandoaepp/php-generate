
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/evento_img/evento_img.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $evento_img_controller = new EventoImgController();

  $id_padre   = $_POST["id_padre"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "evento_img") ;

  $params = array(
    "id_padre"   => $id_padre,
    "orden"   => $orden,
    "fecha"   => $fecha,
    "imagen"  => $imagen,
  );


  $response = $evento_img_controller->save($params);

  if($response){
    header("Location: ./evento_img.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
