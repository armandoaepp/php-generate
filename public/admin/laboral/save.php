
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/laboral/laboral.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $laboral_controller = new LaboralController();

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


  $response = $laboral_controller->save($params);

  if($response){
    header("Location: ./laboral.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
