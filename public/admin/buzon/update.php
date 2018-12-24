
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/buzon/buzon.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $buzon_controller = new BuzonController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $nombres   = $_POST["nombres"] ;
  $telefono   = $_POST["telefono"] ;
  $email   = $_POST["email"] ;
  $mensaje   = $_POST["mensaje"] ;
  $fecha   = $_POST["fecha"] ;
  $params = array(
    "id"   => $id,
    "nombres"   => $nombres,
    "telefono"   => $telefono,
    "email"   => $email,
    "mensaje"   => $mensaje,
    "fecha"   => $fecha,
  );


  $response = $buzon_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./buzon.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
