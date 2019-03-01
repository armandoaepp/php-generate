<?php 

/**
 * [Api Index Auth  Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

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
      $users_controller = new UsersController() ; 

       $data = $users_controller->getAll() ;

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
        
      $users_controller = new UsersController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $ip_address = $inputs->ip_address;
      $username = $inputs->username;
      $password = $inputs->password;
      $salt = $inputs->salt;
      $email = $inputs->email;
      $activation_code = $inputs->activation_code;
      $forgotten_password_code = $inputs->forgotten_password_code;
      $forgotten_password_time = $inputs->forgotten_password_time;
      $remember_code = $inputs->remember_code;
      $created_on = $inputs->created_on;
      $last_login = $inputs->last_login;
      $active = $inputs->active;
      $first_name = $inputs->first_name;
      $last_name = $inputs->last_name;
      $company = $inputs->company;
      $phone = $inputs->phone;
      $imagen = $inputs->imagen;
        
      $params = array(
                'id'=> $id,
                'ip_address'=> $ip_address,
                'username'=> $username,
                'password'=> $password,
                'salt'=> $salt,
                'email'=> $email,
                'activation_code'=> $activation_code,
                'forgotten_password_code'=> $forgotten_password_code,
                'forgotten_password_time'=> $forgotten_password_time,
                'remember_code'=> $remember_code,
                'created_on'=> $created_on,
                'last_login'=> $last_login,
                'active'=> $active,
                'first_name'=> $first_name,
                'last_name'=> $last_name,
                'company'=> $company,
                'phone'=> $phone,
                'imagen'=> $imagen,
              ) ; 
        
      $data = $users_controller->save($params) ;
        
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
        
      $users_controller = new UsersController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $ip_address = $inputs->ip_address;
      $username = $inputs->username;
      $password = $inputs->password;
      $salt = $inputs->salt;
      $email = $inputs->email;
      $activation_code = $inputs->activation_code;
      $forgotten_password_code = $inputs->forgotten_password_code;
      $forgotten_password_time = $inputs->forgotten_password_time;
      $remember_code = $inputs->remember_code;
      $created_on = $inputs->created_on;
      $last_login = $inputs->last_login;
      $active = $inputs->active;
      $first_name = $inputs->first_name;
      $last_name = $inputs->last_name;
      $company = $inputs->company;
      $phone = $inputs->phone;
      $imagen = $inputs->imagen;
        
      $params = array(
                'id'=> $id,
                'ip_address'=> $ip_address,
                'username'=> $username,
                'password'=> $password,
                'salt'=> $salt,
                'email'=> $email,
                'activation_code'=> $activation_code,
                'forgotten_password_code'=> $forgotten_password_code,
                'forgotten_password_time'=> $forgotten_password_time,
                'remember_code'=> $remember_code,
                'created_on'=> $created_on,
                'last_login'=> $last_login,
                'active'=> $active,
                'first_name'=> $first_name,
                'last_name'=> $last_name,
                'company'=> $company,
                'phone'=> $phone,
                'imagen'=> $imagen,
              ) ; 
        
      $data = $users_controller->update($params) ;
        
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

      $id = $inputs->id;
      $estado = $inputs->estado;

      $params = array(
                'id'=> $id,
                'estado'=> $estado,
              ) ; 

      $users_controller = new UsersController() ; 

      $data = $users_controller->updateEstado( $params ) ;

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
      $users_controller = new UsersController() ; 

      $data = $users_controller->find( $id) ;

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

      $id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'id'=> $id,
                'estado'=> $estado,
              ) ; 

      $users_controller = new UsersController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

				$users = $users_controller->find($params);

				$data = $users_controller->deleteById($params);

				if( !empty($users) && $data )
				{
					$imagen = $users["imagen"] ;
					UploadFiles::removeFile($img_bd) ;
				}

			}
			else
			{
				$data = $users_controller->updateEstado($params);
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

}
