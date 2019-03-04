
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/admision/admision.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $admision_controller = new AdmisionController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $titulo   = $_POST["titulo"] ;
  $requisitos   = $_POST["requisitos"] ;
  $horarios   = $_POST["horarios"] ;
  $inversion   = $_POST["inversion"] ;
  $email   = $_POST["email"] ;
  $publicar   = $_POST["publicar"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "admision") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $params = array(
    "id"   => $id,
    "titulo"   => $titulo,
    "requisitos"   => $requisitos,
    "horarios"   => $horarios,
    "inversion"   => $inversion,
    "email"   => $email,
    "publicar"   => $publicar,
    "imagen"  => $imagen,
  );


  $response = $admision_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./admision.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
