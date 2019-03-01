
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/admision/admision.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $admision_controller = new AdmisionController();

  $titulo   = $_POST["titulo"] ;
  $requisitos   = $_POST["requisitos"] ;
  $horarios   = $_POST["horarios"] ;
  $inversion   = $_POST["inversion"] ;
  $email   = $_POST["email"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "admision") ;

  $params = array(
    "titulo"   => $titulo,
    "requisitos"   => $requisitos,
    "horarios"   => $horarios,
    "inversion"   => $inversion,
    "email"   => $email,
    "imagen"  => $imagen,
  );


  $response = $admision_controller->save($params);

  if($response){
    header("Location: ./admision.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
