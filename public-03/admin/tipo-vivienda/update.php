
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/tipo-vivienda/tipo-vivienda.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $tipo_vivienda_controller = new TipoViviendaController();

  $tipo_vivienda_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $desc_vivienda   = $_POST["desc_vivienda"] ;
  $params = array(
    "tipo_vivienda_id"   => $tipo_vivienda_id,
    "desc_vivienda"   => $desc_vivienda,
  );


  $response = $tipo_vivienda_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./tipo-vivienda.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
