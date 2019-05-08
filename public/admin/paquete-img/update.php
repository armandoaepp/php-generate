
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/paquete-img/paquete-img.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $paquete_img_controller = new PaqueteImgController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $paquete_id   = $_POST["paquete_id"] ;
  $item   = $_POST["item"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "paquete-img") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $params = array(
    "id"   => $id,
    "paquete_id"   => $paquete_id,
    "item"   => $item,
    "imagen"  => $imagen,
  );


  $response = $paquete_img_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./paquete-img.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
