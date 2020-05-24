
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/padron/padron.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $padron_controller = new PadronController();

  $codigo   = $_POST["codigo"] ;
  $dni   = $_POST["dni"] ;
  $apellido_paterno   = $_POST["apellido_paterno"] ;
  $apellido_materno   = $_POST["apellido_materno"] ;
  $nombres   = $_POST["nombres"] ;
  $fecha_nac   = $_POST["fecha_nac"] ;
  $distrito_id   = $_POST["distrito_id"] ;
  $caserio_id   = $_POST["caserio_id"] ;
  $sector_id   = $_POST["sector_id"] ;
  $telefono   = $_POST["telefono"] ;
  $email   = $_POST["email"] ;
  $direccion   = $_POST["direccion"] ;
  $referencia   = $_POST["referencia"] ;
  $tipo_vivienda_id   = $_POST["tipo_vivienda_id"] ;
  $num_personas   = $_POST["num_personas"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  if($file_imagen){
    $imagen = UploadFiles::uploadFile($file_imagen, "padron") ;
  }


  $params = array(
    "codigo"   => $codigo,
    "dni"   => $dni,
    "apellido_paterno"   => $apellido_paterno,
    "apellido_materno"   => $apellido_materno,
    "nombres"   => $nombres,
    "fecha_nac"   => $fecha_nac,
    "distrito_id"   => $distrito_id,
    "caserio_id"   => $caserio_id,
    "sector_id"   => $sector_id,
    "telefono"   => $telefono,
    "email"   => $email,
    "direccion"   => $direccion,
    "referencia"   => $referencia,
    "tipo_vivienda_id"   => $tipo_vivienda_id,
    "num_personas"   => $num_personas,
    "imagen"  => $imagen,
  );


  $response = $padron_controller->save($params);

  if($response){
    header("Location: ./padron.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
