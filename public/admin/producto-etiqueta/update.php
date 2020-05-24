
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/producto-etiqueta/producto-etiqueta.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $producto_etiqueta_controller = new ProductoEtiquetaController();

  $producto_etiqueta_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $producto_id   = $_POST["producto_id"] ;
  $etiqueta_id   = $_POST["etiqueta_id"] ;

  $params = array(
    "producto_etiqueta_id"   => $producto_etiqueta_id,
    "producto_id"   => $producto_id,
    "etiqueta_id"   => $etiqueta_id,
  );


  $response = $producto_etiqueta_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./producto-etiqueta.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
