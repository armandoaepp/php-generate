
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/habitacion-img/habitacion-img.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $habitacion_img_controller = new HabitacionImgController();

  $habitacion_id   = $_POST["habitacion_id"] ;
  $jerarquia   = $_POST["jerarquia"] ;
  $desc_imagen   = $_POST["desc_imagen"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  if($file_imagen){
    $imagen = UploadFiles::uploadFile($file_imagen, "habitacion-img") ;
  }


  $params = array(
    "habitacion_id"   => $habitacion_id,
    "jerarquia"   => $jerarquia,
    "desc_imagen"   => $desc_imagen,
    "imagen"  => $imagen,
  );


  $response = $habitacion_img_controller->save($params);

  if($response){
    header("Location: ./habitacion-img.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
