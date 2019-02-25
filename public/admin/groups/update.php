
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/groups/groups.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $groups_controller = new GroupsController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $name   = $_POST["name"] ;
  $description   = $_POST["description"] ;
  $params = array(
    "id"   => $id,
    "name"   => $name,
    "description"   => $description,
  );


  $response = $groups_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./groups.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
