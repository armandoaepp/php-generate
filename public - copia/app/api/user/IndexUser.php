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
        
            $user_controller = new UserController($cnx) ; 
            $objConexion->beginTransaction();
        
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
        
            $data = $user_controller->setUser($params) ;
        
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
        
            $user_controller = new UserController($cnx) ; 
            $objConexion->beginTransaction();
        
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
        
            $data = $user_controller->updateUser($params) ;
        
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

            $user_id = $inputs->User_id;
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

    case "getid":
        try
        {

            $id = $_GET["id"] ;
            $user_controller = new UserController() ; 

            $data = $user_controller->getById( $id) ;

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
            $user_controller = new UserController() ; 

            $data = $user_controller->deleteById( $id) ;

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
