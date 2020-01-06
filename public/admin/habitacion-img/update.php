
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/habitacion-img/habitacion-img.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $habitacion_img_controller = new HabitacionImgController();

  $habitacion_img_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $habitacion_id   = $_POST["habitacion_id"] ;
  $jerarquia   = $_POST["jerarquia"] ;
  $desc_img   = $_POST["desc_img"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "habitacion-img") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $params = array(
    "habitacion_img_id"   => $habitacion_img_id,
    "habitacion_id"   => $habitacion_id,
    "jerarquia"   => $jerarquia,
    "desc_img"   => $desc_img,
    "imagen"  => $imagen,
  );


  $response = $habitacion_img_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./habitacion-img.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
