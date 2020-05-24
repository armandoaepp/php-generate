
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/ubigeo/ubigeo.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $ubigeo_controller = new UbigeoController();

  $codigo          = !empty($_POST["codigo"]) ? $_POST["codigo"] : '0000000000' ;
  $nombre          = $_POST["nombre"] ;
  $descripcion     = !empty($_POST["descripcion"]) ? $_POST["descripcion"] : $nombre;
  $ubigeo_id_padre = !empty($_POST["caserio_id"]) ? $_POST["caserio_id"]: 0 ;
  $pais_id         = !empty($_POST["pais_id"]) ? $_POST["pais_id"] : 1 ;
  $region_id       = 0 ; # la provincia ya pertenecea a una region de acuerdo al departamento
  $tipo            = 5 ; # caserio

  $ubigeo_padre     = $ubigeo_controller->find($ubigeo_id_padre);
  $ubigeo_descripcion = $ubigeo_padre->descripcion ;

  $descripcion  = $nombre . ", " . $ubigeo_descripcion ;

  $params = array(
    "codigo"          => $codigo,
    "nombre"          => $nombre,
    "descripcion"     => $descripcion,
    "ubigeo_id_padre" => $ubigeo_id_padre,
    "pais_id"         => $pais_id,
    "region_id"       => $region_id,
    "tipo"            => $tipo,
  );


  $response = $ubigeo_controller->save($params);

  if($response){
    header("Location: ./sectores.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
