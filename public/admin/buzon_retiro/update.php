
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/buzon_retiro/buzon_retiro.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $buzon_retiro_controller = new BuzonRetiroController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $nombres   = $_POST["nombres"] ;
  $titulo_retiro   = $_POST["titulo_retiro"] ;
  $email   = $_POST["email"] ;
  $mensaje   = $_POST["mensaje"] ;
  $fecha   = $_POST["fecha"] ;
  $params = array(
    "id"   => $id,
    "nombres"   => $nombres,
    "titulo_retiro"   => $titulo_retiro,
    "email"   => $email,
    "mensaje"   => $mensaje,
    "fecha"   => $fecha,
  );


  $response = $buzon_retiro_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./buzon_retiro.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
