
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/plan/plan.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $plan_controller = new PlanController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $nombre   = $_POST["nombre"] ;
  $espacio   = $_POST["espacio"] ;
  $num_databases   = $_POST["num_databases"] ;
  $num_mails   = $_POST["num_mails"] ;
  $created_at   = $_POST["created_at"] ;
  $updated_at   = $_POST["updated_at"] ;
  $params = array(
    "id"   => $id,
    "nombre"   => $nombre,
    "espacio"   => $espacio,
    "num_databases"   => $num_databases,
    "num_mails"   => $num_mails,
    "created_at"   => $created_at,
    "updated_at"   => $updated_at,
  );


  $response = $plan_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./plan.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
