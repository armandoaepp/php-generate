
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/buzon_contacto/buzon_contacto.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $buzon_contacto_controller = new BuzonContactoController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $nombre   = $_POST["nombre"] ;
  $dni   = $_POST["dni"] ;
  $email   = $_POST["email"] ;
  $telefono   = $_POST["telefono"] ;
  $fecha   = $_POST["fecha"] ;
  $params = array(
    "id"   => $id,
    "nombre"   => $nombre,
    "dni"   => $dni,
    "email"   => $email,
    "telefono"   => $telefono,
    "fecha"   => $fecha,
  );


  $response = $buzon_contacto_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./buzon_contacto.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
