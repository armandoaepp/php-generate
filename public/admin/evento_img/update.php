
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/evento_img/evento_img.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $evento_img_controller = new EventoImgController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $id_padre   = $_POST["id_padre"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "evento_img") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $params = array(
    "id"   => $id,
    "id_padre"   => $id_padre,
    "orden"   => $orden,
    "fecha"   => $fecha,
    "imagen"  => $imagen,
  );


  $response = $evento_img_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./evento_img.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
