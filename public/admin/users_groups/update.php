
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/users_groups/users_groups.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $users_groups_controller = new UsersGroupsController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $user_id   = $_POST["user_id"] ;
  $group_id   = $_POST["group_id"] ;
  $params = array(
    "id"   => $id,
    "user_id"   => $user_id,
    "group_id"   => $group_id,
  );


  $response = $users_groups_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./users_groups.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
