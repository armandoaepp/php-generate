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
            $users_controller = new UsersController() ; 

            $data = $users_controller->getAll() ;

            $data = Serialize::unSerializeArray($data);

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
            $objConexion = new ClsConexion();
            $cnx = $objConexion->get_connection();
        
            $users_controller = new UsersController($cnx) ; 
            $objConexion->beginTransaction();
        
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
        
            $data = $users_controller->setUsers($params) ;
        
            $objConexion->commit();

            $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);
        }
        catch (Exception $e)
        {
            $objConexion->rollback();
            $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "upd":
        try
        {
            $objConexion = new ClsConexion();
            $cnx = $objConexion->get_connection();
        
            $users_controller = new UsersController($cnx) ; 
            $objConexion->beginTransaction();
        
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
        
            $data = $users_controller->updateUsers($params) ;
        
            $objConexion->commit();

            $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

        }
        catch (Exception $e)
        {
            $objConexion->rollback();
            $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
        }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
    break;

    case "updestado":
        try
        {

            $id = $inputs->Id;
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

    case "getid":
        try
        {

            $id = $_GET["id"] ;
            $users_controller = new UsersController() ; 

            $data = $users_controller->getById( $id) ;

            $data = Serialize::unSerializeRow($data);

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

            $id = $_GET["id"] ;
            $users_controller = new UsersController() ; 

            $data = $users_controller->deleteById( $id) ;

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
