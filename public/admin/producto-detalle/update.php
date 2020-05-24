
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/producto-detalle/producto-detalle.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $producto_detalle_controller = new ProductoDetalleController();

  $producto_detalle_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $producto_id   = $_POST["producto_id"] ;
  $pd_descripcion   = $_POST["pd_descripcion"] ;
  $pd_caracteristica   = $_POST["pd_caracteristica"] ;

  $params = array(
    "producto_detalle_id"   => $producto_detalle_id,
    "producto_id"   => $producto_id,
    "pd_descripcion"   => $pd_descripcion,
    "pd_caracteristica"   => $pd_caracteristica,
  );


  $response = $producto_detalle_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./producto-detalle.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
