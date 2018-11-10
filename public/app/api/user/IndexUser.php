<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
  header('content-type: application/json; charset=utf-8');
  require_once '../../autoload.php';

if(isset($_GET["accion"]))
{
    $evento = $_GET["accion"];
}
elseif (isset($_POST))
{
  $inputs = json_decode(file_get_contents("php://input"));
  $evento = $inputs->accion;
}

switch($evento)
{
  case "list":
    try
    {
      $user_controller = new UserController() ;

       $data = $user_controller->getAll() ;

      $data = array('msg' => 'Listado correcto', 'error' => false, 'data' => $data);
    }
    catch (Exception $e)
    {
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }

    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "set":

    try
    {
      $connection = new Connection();
      $cnx = $connection->getConnection();

      $user_controller = new UserController($cnx) ;
      $connection->beginTransaction();

      $user_id = $inputs->user_id;
      $nombre = $inputs->nombre;
      $apellidos = $inputs->apellidos;
      $email = $inputs->email;
      $password = $inputs->password;
      $created_up = $inputs->created_up;

      $params = array(
                'user_id'=> $user_id,
                'nombre'=> $nombre,
                'apellidos'=> $apellidos,
                'email'=> $email,
                'password'=> $password,
                'created_up'=> $created_up,
              ) ;

      $data = $user_controller->save($params) ;

      $connection->commit();

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);
    }
    catch (Exception $e)
    {
      $connection->rollback();
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }

    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "upd":
    try
    {
      $connection = new Connection();
      $cnx = $connection->getConnection();

      $user_controller = new UserController($cnx) ;
      $connection->beginTransaction();

      $user_id = $inputs->user_id;
      $nombre = $inputs->nombre;
      $apellidos = $inputs->apellidos;
      $email = $inputs->email;
      $password = $inputs->password;
      $created_up = $inputs->created_up;

      $params = array(
                'user_id'=> $user_id,
                'nombre'=> $nombre,
                'apellidos'=> $apellidos,
                'email'=> $email,
                'password'=> $password,
                'created_up'=> $created_up,
              ) ;

      $data = $user_controller->update($params) ;

      $connection->commit();

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

    }
    catch (Exception $e)
    {
      $connection->rollback();
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }

    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "updestado":
    try
    {

      $user_id = $inputs->user_id;
      $estado = $inputs->estado;

      $params = array(
                'user_id'=> $user_id,
                'estado'=> $estado,
              ) ;

      $user_controller = new UserController() ;

      $data = $user_controller->updateEstado( $params ) ;

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

    }
    catch (Exception $e)
    {
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }

    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "find":
    try
    {

      $id = $_GET["id"] ;
      $user_controller = new UserController() ;

      $data = $user_controller->find( $id) ;

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

    }
    catch (Exception $e)
    {
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }

    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "delete":
  try
  {

      $user_id = $inputs->id;
      $estado = 0;

      $params = array(
                'user_id'=> $user_id,
                'estado'=> $estado,
              ) ;

      $user_controller = new UserController() ;


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

				$user = $user_controller->find($params);

				$data = $user_controller->deleteById($params);

				if( !empty($user) && $data )
				{
					$imagen = $user["imagen"] ;
					UploadFiles::removeFile($img_bd) ;
				}

			}
			else
			{
				$data = $user_controller->updateEstado($params);
			}

        $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

    }
    catch (Exception $e)
    {
            $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }

        $jsn  = json_encode($data);
        print_r($jsn) ;
  break;

  case "login":

    try
    {


      $user_controller = new UserController() ;

      // $email = $inputs->email;
      // $password = $inputs->password;
      // $created_up = $inputs->created_up;

      $email = "armandoaepp@gmail.com";
      $password = "armando";

      $params = array(
                'email'=> $email,
                'password'=> $password,
                // 'created_up'=> $created_up,
              ) ;
              // var_dump($params);

      $data = $user_controller->login($params) ;

      $connection->commit();

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);
    }
    catch (Exception $e)
    {
      $connection->rollback();
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }

    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

}
