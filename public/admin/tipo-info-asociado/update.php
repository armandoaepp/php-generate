
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/tipo-info-asociado/tipo-info-asociado.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $tipo_info_asociado_controller = new TipoInfoAsociadoController();

  $tipo_info_asociado_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $descripcion   = $_POST["descripcion"] ;
  $publicar   = $_POST["publicar"] ;
  $params = array(
    "tipo_info_asociado_id"   => $tipo_info_asociado_id,
    "descripcion"   => $descripcion,
    "publicar"   => $publicar,
  );


  $response = $tipo_info_asociado_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./tipo-info-asociado.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
