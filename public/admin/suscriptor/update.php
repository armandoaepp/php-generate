
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/suscriptor/suscriptor.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $suscriptor_controller = new SuscriptorController();

  $suscritor_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $nombre   = $_POST["nombre"] ;
  $email   = $_POST["email"] ;
  $telefono   = $_POST["telefono"] ;
  $empresa   = $_POST["empresa"] ;
  $mensaje   = $_POST["mensaje"] ;
  $params = array(
    "suscritor_id"   => $suscritor_id,
    "nombre"   => $nombre,
    "email"   => $email,
    "telefono"   => $telefono,
    "empresa"   => $empresa,
    "mensaje"   => $mensaje,
  );


  $response = $suscriptor_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./suscriptor.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
