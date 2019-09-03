
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/asociado/asociado.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $asociado_controller = new AsociadoController();

  $user_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $nombre   = $_POST["nombre"] ;
  $apellidos   = $_POST["apellidos"] ;
  $email   = $_POST["email"] ;
  $password   = $_POST["password"] ;
  $empresa   = $_POST["empresa"] ;
  $telefono   = $_POST["telefono"] ;
  $params = array(
    "user_id"   => $user_id,
    "nombre"   => $nombre,
    "apellidos"   => $apellidos,
    "email"   => $email,
    "password"   => $password,
    "empresa"   => $empresa,
    "telefono"   => $telefono,
  );


  $response = $asociado_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./asociado.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
