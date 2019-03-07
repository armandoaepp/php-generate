
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/oportunidad-laboral/oportunidad-laboral.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $oportunidad_laboral_controller = new OportunidadLaboralController();

  $empresa_id       = $_POST["empresa_id"] ;
  $titulo           = $_POST["titulo"] ;
  $tipo             = !empty($_POST["tipo"])? $_POST["tipo"]: "" ;
  $vacantes         = !empty($_POST["vacantes"])? $_POST["vacantes"]: "" ;
  $requisitos       = !empty($_POST["requisitos"])? $_POST["requisitos"]: "" ;
  $conocimientos    = !empty($_POST["conocimientos"])? $_POST["conocimientos"]: "" ;
  $salario          = !empty($_POST["salario"])? $_POST["salario"]: "" ;
  $nombrecontacto   = !empty($_POST["nombrecontacto"])? $_POST["nombrecontacto"]: "" ;
  $telefonocontacto = !empty($_POST["telefonocontacto"])? $_POST["telefonocontacto"]: "" ;
  $emailcontacto    = !empty($_POST["emailcontacto"])? $_POST["emailcontacto"]: "" ;
  // $item             = $_POST["item"] ;
  $publicar         = $_POST["publicar"] ;

  $params = array(
    "empresa_id"       => $empresa_id,
    "titulo"           => $titulo,
    "tipo"             => $tipo,
    "vacantes"         => $vacantes,
    "requisitos"       => $requisitos,
    "conocimientos"    => $conocimientos,
    "salario"          => $salario,
    "nombrecontacto"   => $nombrecontacto,
    "telefonocontacto" => $telefonocontacto,
    "emailcontacto"    => $emailcontacto,
    // "item"             => $item,
    "publicar"         => $publicar,
  );


  $response = $oportunidad_laboral_controller->save($params);

  if($response){
    header("Location: ./oportunidad-laboral.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
