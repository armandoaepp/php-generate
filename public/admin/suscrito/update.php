
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/suscrito/suscrito.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $suscrito_controller = new SuscritoController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $nombre   = $_POST["nombre"] ;
  $asunto   = $_POST["asunto"] ;
  $email   = $_POST["email"] ;
  $telefono   = $_POST["telefono"] ;
  $empresa   = $_POST["empresa"] ;
  $mensaje   = $_POST["mensaje"] ;
  $params = array(
    "id"   => $id,
    "nombre"   => $nombre,
    "asunto"   => $asunto,
    "email"   => $email,
    "telefono"   => $telefono,
    "empresa"   => $empresa,
    "mensaje"   => $mensaje,
  );


  $response = $suscrito_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./suscrito.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
