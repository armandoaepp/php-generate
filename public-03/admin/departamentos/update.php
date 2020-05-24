
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/ubigeo/ubigeo.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $ubigeo_controller = new UbigeoController();

  $ubigeo_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $codigo   = $_POST["codigo"] ;
  $nombre   = $_POST["nombre"] ;
  $descripcion   = $_POST["descripcion"] ;
  $ubigeo_id_padre   = $_POST["ubigeo_id_padre"] ;
  $pais_id   = $_POST["pais_id"] ;
  $region_id   = $_POST["region_id"] ;
  $tipo   = $_POST["tipo"] ;

  $codigo          = !empty($_POST["codigo"]) ? $_POST["codigo"]                  : '00' ;
  $nombre          = $_POST["nombre"] ;
  $descripcion     = !empty($_POST["descripcion"]) ? $_POST["descripcion"]        : $nombre;
  $ubigeo_id_padre = !empty($_POST["ubigeo_id_padre"]) ? $_POST["ubigeo_id_padre"]: 0 ;
  $pais_id         = !empty($_POST["pais_id"]) ? $_POST["pais_id"]                : 1 ;
  $region_id       = $_POST["region_id"] ;
  $tipo            = !empty($_POST["tipo"]) ? $_POST["tipo"]                      : 1 ;

  $params = array(
    "ubigeo_id"   => $ubigeo_id,
    "codigo"   => $codigo,
    "nombre"   => $nombre,
    "descripcion"   => $descripcion,
    "ubigeo_id_padre"   => $ubigeo_id_padre,
    "pais_id"   => $pais_id,
    "region_id"   => $region_id,
    "tipo"   => $tipo,
  );


  $response = $ubigeo_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./departamentos.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
