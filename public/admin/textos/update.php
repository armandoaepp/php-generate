
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/textos/textos.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $textos_controller = new TextosController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $identificador   = $_POST["identificador"] ;
  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $params = array(
    "id"   => $id,
    "identificador"   => $identificador,
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "orden"   => $orden,
    "fecha"   => $fecha,
  );


  $response = $textos_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./textos.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
