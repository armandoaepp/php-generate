<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
    header('content-type: application/json; charset=utf-8');

    date_default_timezone_set('America/Lima');

    // require_once "../models/ClsConexion.php" ;
    // require_once "./Auth.php" ;
    // require_once "./AuthController.php" ;
    require_once "../autoload.php";


if(isset($_GET["accion"]))
{
    $evento = $_GET["accion"];
}
elseif (isset($_POST))
{
    $inputs = json_decode(file_get_contents("php://input"));
    $jsn  = json_encode($inputs);
    $evento = $inputs->accion;
}

// echo $evento ;
// return ;
// $email = 'armandoaepp@gmail.com' ;
// $password = 'armando' ;

switch($evento)
{

    case "login":
        try{
            session_start();
            $mensaje = "Ya haz iniciado sesión";

            if (empty($_SESSION['login'])  && empty($_SESSION['USER']) ){

              $auth_controller = new AuthController();

            //   $params = array(
            //       'email'    => $email,
            //       'password' => $password,
            //   );

               $params = array(
                      'email'    => $inputs->email,
                      'password' => $inputs->password,
                  );

              $user = $auth_controller->login($params);

              if(count($user) > 0 )
              {
                $_SESSION['LOGIN'] = true;
                $_SESSION['USER']  = $user;
                $mensaje = "Incio de sesión correcto" ;

              }else
              {
                $_SESSION['LOGIN'] = false;
                $_SESSION['USER']  = array();
                $mensaje = "Error al iniciar sesión";
              }

            }


            $response = array('msg' => $mensaje, 'error' => false, 'data' => array("login" => $_SESSION['LOGIN']));


        }catch (Exception $e)
        {
            $response = array('msg' => $e->getMessage(), 'error' => true, 'data' => array("login" => false));
        }

        $jsn  = json_encode($response);
        print_r($jsn) ;
    break;

    case "logout":

        try{
            session_start();
            // Finalmente, destruir la sesión.
            session_destroy();

            $mensaje = "Sesión cerrada correctamente";

            $response = array('msg' => $mensaje, 'error' => false, 'data' => array("login" => $_SESSION['LOGIN']));

        }catch (Exception $e)
        {
            $response = array('msg' => $e->getMessage(), 'error' => true, 'data' => array("login" => false));
        }

        $jsn  = json_encode($response);
        print_r($jsn) ;
    break;

}
