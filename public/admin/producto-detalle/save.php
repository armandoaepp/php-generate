
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/producto-detalle/producto-detalle.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $producto_detalle_controller = new ProductoDetalleController();

  $producto_id   = $_POST["producto_id"] ;
  $pd_descripcion   = $_POST["pd_descripcion"] ;
  $pd_caracteristica   = $_POST["pd_caracteristica"] ;

  $params = array(
    "producto_id"   => $producto_id,
    "pd_descripcion"   => $pd_descripcion,
    "pd_caracteristica"   => $pd_caracteristica,
  );


  $response = $producto_detalle_controller->save($params);

  if($response){
    header("Location: ./producto-detalle.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
