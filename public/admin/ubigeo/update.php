
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/ubigeo/ubigeo.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $ubigeo_controller = new UbigeoController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $codigo   = $_POST["codigo"] ;
  $ubigeo   = $_POST["ubigeo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $ubigeo_id_padre   = $_POST["ubigeo_id_padre"] ;
  $pais_id   = $_POST["pais_id"] ;
  $tipo_ubigeo_id   = $_POST["tipo_ubigeo_id"] ;
  $region_id   = $_POST["region_id"] ;
  $params = array(
    "id"   => $id,
    "codigo"   => $codigo,
    "ubigeo"   => $ubigeo,
    "descripcion"   => $descripcion,
    "ubigeo_id_padre"   => $ubigeo_id_padre,
    "pais_id"   => $pais_id,
    "tipo_ubigeo_id"   => $tipo_ubigeo_id,
    "region_id"   => $region_id,
  );


  $response = $ubigeo_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./ubigeo.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
