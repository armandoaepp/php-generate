
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/configuracion/configuracion.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $configuracion_controller = new ConfiguracionController();

  $titulo   = $_POST["titulo"] ;
  $horario   = $_POST["horario"] ;
  $direccion   = $_POST["direccion"] ;
  $email   = $_POST["email"] ;
  $telefono   = $_POST["telefono"] ;
  $facebook   = $_POST["facebook"] ;
  $youtube   = $_POST["youtube"] ;
  $instagram   = $_POST["instagram"] ;
  $mapa   = $_POST["mapa"] ;
  $popup   = $_POST["popup"] ;
  $show_popup   = $_POST["show_popup"] ;
  $params = array(
    "titulo"   => $titulo,
    "horario"   => $horario,
    "direccion"   => $direccion,
    "email"   => $email,
    "telefono"   => $telefono,
    "facebook"   => $facebook,
    "youtube"   => $youtube,
    "instagram"   => $instagram,
    "mapa"   => $mapa,
    "popup"   => $popup,
    "show_popup"   => $show_popup,
  );


  $response = $configuracion_controller->save($params);

  if($response){
    header("Location: ./configuracion.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
