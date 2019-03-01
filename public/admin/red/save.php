
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/red/red.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $red_controller = new RedController();

  $titulo   = $_POST["titulo"] ;
  $subtitulo   = $_POST["subtitulo"] ;
  $tipo   = $_POST["tipo"] ;
  $vacantes   = $_POST["vacantes"] ;
  $requisitos   = $_POST["requisitos"] ;
  $conocimientos   = $_POST["conocimientos"] ;
  $salario   = $_POST["salario"] ;
  $nombrecontacto   = $_POST["nombrecontacto"] ;
  $telefonocontacto   = $_POST["telefonocontacto"] ;
  $emailcontacto   = $_POST["emailcontacto"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $params = array(
    "titulo"   => $titulo,
    "subtitulo"   => $subtitulo,
    "tipo"   => $tipo,
    "vacantes"   => $vacantes,
    "requisitos"   => $requisitos,
    "conocimientos"   => $conocimientos,
    "salario"   => $salario,
    "nombrecontacto"   => $nombrecontacto,
    "telefonocontacto"   => $telefonocontacto,
    "emailcontacto"   => $emailcontacto,
    "orden"   => $orden,
    "fecha"   => $fecha,
  );


  $response = $red_controller->save($params);

  if($response){
    header("Location: ./red.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
