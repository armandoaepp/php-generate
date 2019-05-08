
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/adicional/adicional.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $adicional_controller = new AdicionalController();

  $adicional_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $descripcion   = $_POST["descripcion"] ;
  $precio   = $_POST["precio"] ;
  $params = array(
    "adicional_id"   => $adicional_id,
    "descripcion"   => $descripcion,
    "precio"   => $precio,
  );


  $response = $adicional_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./adicional.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
