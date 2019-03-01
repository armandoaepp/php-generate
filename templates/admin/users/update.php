
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/users/users.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $users_controller = new UsersController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $ip_address   = $_POST["ip_address"] ;
  $username   = $_POST["username"] ;
  $password   = $_POST["password"] ;
  $salt   = $_POST["salt"] ;
  $email   = $_POST["email"] ;
  $activation_code   = $_POST["activation_code"] ;
  $forgotten_password_code   = $_POST["forgotten_password_code"] ;
  $forgotten_password_time   = $_POST["forgotten_password_time"] ;
  $remember_code   = $_POST["remember_code"] ;
  $created_on   = $_POST["created_on"] ;
  $last_login   = $_POST["last_login"] ;
  $active   = $_POST["active"] ;
  $first_name   = $_POST["first_name"] ;
  $last_name   = $_POST["last_name"] ;
  $company   = $_POST["company"] ;
  $phone   = $_POST["phone"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "users") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $params = array(
    "id"   => $id,
    "ip_address"   => $ip_address,
    "username"   => $username,
    "password"   => $password,
    "salt"   => $salt,
    "email"   => $email,
    "activation_code"   => $activation_code,
    "forgotten_password_code"   => $forgotten_password_code,
    "forgotten_password_time"   => $forgotten_password_time,
    "remember_code"   => $remember_code,
    "created_on"   => $created_on,
    "last_login"   => $last_login,
    "active"   => $active,
    "first_name"   => $first_name,
    "last_name"   => $last_name,
    "company"   => $company,
    "phone"   => $phone,
    "imagen"  => $imagen,
  );


  $response = $users_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./users.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
