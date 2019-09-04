
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/empresa/empresa.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $empresa_controller = new EmpresaController();

  $empresa_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $ruc   = $_POST["ruc"] ;
  $nombre   = $_POST["nombre"] ;
  $params = array(
    "empresa_id"   => $empresa_id,
    "ruc"   => $ruc,
    "nombre"   => $nombre,
  );


  $response = $empresa_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./empresa.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
