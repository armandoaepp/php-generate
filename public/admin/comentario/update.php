
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/comentario/comentario.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $comentario_controller = new ComentarioController();

  $comentario_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $email   = $_POST["email"] ;
  $mensaje   = $_POST["mensaje"] ;
  $calificacion   = $_POST["calificacion"] ;
  $params = array(
    "comentario_id"   => $comentario_id,
    "email"   => $email,
    "mensaje"   => $mensaje,
    "calificacion"   => $calificacion,
  );


  $response = $comentario_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./comentario.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
