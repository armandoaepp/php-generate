
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/laboral/laboral.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $laboral_controller = new LaboralController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $empresa_id   = $_POST["empresa_id"] ;
  $titulo   = $_POST["titulo"] ;
  $tipo   = $_POST["tipo"] ;
  $vacantes   = $_POST["vacantes"] ;
  $requisitos   = $_POST["requisitos"] ;
  $conocimientos   = $_POST["conocimientos"] ;
  $salario   = $_POST["salario"] ;
  $nombrecontacto   = $_POST["nombrecontacto"] ;
  $telefonocontacto   = $_POST["telefonocontacto"] ;
  $emailcontacto   = $_POST["emailcontacto"] ;
  $item   = $_POST["item"] ;
  $publicar   = $_POST["publicar"] ;
  $params = array(
    "id"   => $id,
    "empresa_id"   => $empresa_id,
    "titulo"   => $titulo,
    "tipo"   => $tipo,
    "vacantes"   => $vacantes,
    "requisitos"   => $requisitos,
    "conocimientos"   => $conocimientos,
    "salario"   => $salario,
    "nombrecontacto"   => $nombrecontacto,
    "telefonocontacto"   => $telefonocontacto,
    "emailcontacto"   => $emailcontacto,
    "item"   => $item,
    "publicar"   => $publicar,
  );


  $response = $laboral_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./laboral.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
