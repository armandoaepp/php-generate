
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/configuracion/configuracion.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $configuracion_controller = new ConfiguracionController();

  $configuracion_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

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
    "configuracion_id"   => $configuracion_id,
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


  $response = $configuracion_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./configuracion.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
