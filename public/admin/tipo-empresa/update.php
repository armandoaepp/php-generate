
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/tipo-empresa/tipo-empresa.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $tipo_empresa_controller = new TipoEmpresaController();

  $tipo_empresa_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $descripcion   = $_POST["descripcion"] ;
  $glosa   = $_POST["glosa"] ;
  $params = array(
    "tipo_empresa_id"   => $tipo_empresa_id,
    "descripcion"   => $descripcion,
    "glosa"   => $glosa,
  );


  $response = $tipo_empresa_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./tipo-empresa.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
