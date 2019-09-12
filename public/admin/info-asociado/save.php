
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/info-asociado/info-asociado.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $info_asociado_controller = new InfoAsociadoController();

  $tipo_info_asociado_id   = $_POST["tipo_info_asociado_id"] ;
  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $url_file   = $_POST["url_file"] ;
  $publicar   = $_POST["publicar"] ;

  $params = array(
    "tipo_info_asociado_id"   => $tipo_info_asociado_id,
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "url_file"   => $url_file,
    "publicar"   => $publicar,
  );


  $response = $info_asociado_controller->save($params);

  if($response){
    header("Location: ./info-asociado.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
