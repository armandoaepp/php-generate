
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/paquete-adicional/paquete-adicional.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $paquete_adicional_controller = new PaqueteAdicionalController();

  $paquete_adicional_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $paquete_id   = $_POST["paquete_id"] ;
  $adicional_id   = $_POST["adicional_id"] ;
  $params = array(
    "paquete_adicional_id"   => $paquete_adicional_id,
    "paquete_id"   => $paquete_id,
    "adicional_id"   => $adicional_id,
  );


  $response = $paquete_adicional_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./paquete-adicional.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
