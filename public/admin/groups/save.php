
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/groups/groups.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $groups_controller = new GroupsController();

  $name   = $_POST["name"] ;
  $description   = $_POST["description"] ;
  $params = array(
    "name"   => $name,
    "description"   => $description,
  );


  $response = $groups_controller->save($params);

  if($response){
    header("Location: ./groups.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
