
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/comentario/comentario.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $comentario_controller = new ComentarioController();

  $email   = $_POST["email"] ;
  $mensaje   = $_POST["mensaje"] ;
  $calificacion   = $_POST["calificacion"] ;

  $params = array(
    "email"   => $email,
    "mensaje"   => $mensaje,
    "calificacion"   => $calificacion,
  );


  $response = $comentario_controller->save($params);

  if($response){
    header("Location: ./comentario.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
