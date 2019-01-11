
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/taller/taller.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $taller_controller = new TallerController();

  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $slide   = $_POST["slide"] ;
  $certificacion   = $_POST["certificacion"] ;
  $titulos   = $_POST["titulos"] ;
  $inversion   = $_POST["inversion"] ;
  $titulacion   = $_POST["titulacion"] ;
  $detalleduracion   = $_POST["detalleduracion"] ;
  $detalledia   = $_POST["detalledia"] ;
  $detallehorario   = $_POST["detallehorario"] ;
  $detallelugar   = $_POST["detallelugar"] ;
  $detalleprecio   = $_POST["detalleprecio"] ;
  $detalleequipos   = $_POST["detalleequipos"] ;
  $detalleconsultas   = $_POST["detalleconsultas"] ;
  $detalledirigido   = $_POST["detalledirigido"] ;
  $aquien   = $_POST["aquien"] ;
  $temas   = $_POST["temas"] ;
  $nombreseo   = $_POST["nombreseo"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "taller") ;

  $params = array(
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "slide"   => $slide,
    "certificacion"   => $certificacion,
    "titulos"   => $titulos,
    "inversion"   => $inversion,
    "titulacion"   => $titulacion,
    "detalleduracion"   => $detalleduracion,
    "detalledia"   => $detalledia,
    "detallehorario"   => $detallehorario,
    "detallelugar"   => $detallelugar,
    "detalleprecio"   => $detalleprecio,
    "detalleequipos"   => $detalleequipos,
    "detalleconsultas"   => $detalleconsultas,
    "detalledirigido"   => $detalledirigido,
    "aquien"   => $aquien,
    "temas"   => $temas,
    "nombreseo"   => $nombreseo,
    "orden"   => $orden,
    "fecha"   => $fecha,
    "imagen"  => $imagen,
  );


  $response = $taller_controller->save($params);

  if($response){
    header("Location: ./taller.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
