
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/ubigeo/ubigeo.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $ubigeo_controller = new UbigeoController();

  $ubigeo_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $codigo          = !empty($_POST["codigo"]) ? $_POST["codigo"] : '000000' ;
  $nombre          = $_POST["nombre"] ;
  $descripcion     = !empty($_POST["descripcion"]) ? $_POST["descripcion"] : $nombre;
  $ubigeo_id_padre = !empty($_POST["provincia_id"]) ? $_POST["provincia_id"]: 0 ;
  $pais_id         = !empty($_POST["pais_id"]) ? $_POST["pais_id"] : 1 ;
  $region_id       = 0 ; # la provincia ya pertenecea a una region de acuerdo al departamento
  $tipo            = 2 ; # provincia

  $provincia     = $ubigeo_controller->find($ubigeo_id_padre);
  $prov_descripcion = $provincia->descripcion ;

  $descripcion  = $nombre . ", " . $prov_descripcion ;


  $params = array(
    "ubigeo_id"       => $ubigeo_id,
    "codigo"          => $codigo,
    "nombre"          => $nombre,
    "descripcion"     => $descripcion,
    "ubigeo_id_padre" => $ubigeo_id_padre,
    "pais_id"         => $pais_id,
    "region_id"       => $region_id,
    "tipo"            => $tipo,
  );


  $response = $ubigeo_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./distritos.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
