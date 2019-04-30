
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/cuenta-host/cuenta-host.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $cuenta_host_controller = new CuentaHostController();

  $propietario_id   = $_POST["propietario_id"] ;
  $plan_id   = $_POST["plan_id"] ;
  $dominio   = $_POST["dominio"] ;
  $descripcion   = $_POST["descripcion"] ;
  $solo_host   = $_POST["solo_host"] ;
  $tiempo_alq   = $_POST["tiempo_alq"] ;
  $facturado   = $_POST["facturado"] ;
  $created_at   = $_POST["created_at"] ;
  $updated_at   = $_POST["updated_at"] ;

  $params = array(
    "propietario_id"   => $propietario_id,
    "plan_id"   => $plan_id,
    "dominio"   => $dominio,
    "descripcion"   => $descripcion,
    "solo_host"   => $solo_host,
    "tiempo_alq"   => $tiempo_alq,
    "facturado"   => $facturado,
    "created_at"   => $created_at,
    "updated_at"   => $updated_at,
  );


  $response = $cuenta_host_controller->save($params);

  if($response){
    header("Location: ./cuenta-host.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
