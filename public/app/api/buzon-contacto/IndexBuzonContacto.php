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
            $buzon_contacto_controller = new BuzonContactoController() ; 
            $data = $buzon_contacto_controller->getAll() ;
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
        
            $buzon_contacto_controller = new BuzonContactoController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $nombre = $inputs->nombre;
            $dni = $inputs->dni;
            $email = $inputs->email;
            $telefono = $inputs->telefono;
            $fecha = $inputs->fecha;
        
            $params = array(
               'id'=> $id,
               'nombre'=> $nombre,
               'dni'=> $dni,
               'email'=> $email,
               'telefono'=> $telefono,
               'fecha'=> $fecha,
            ) ; 
        
            $data = $buzon_contacto_controller->setBuzonContacto($params) ;
        
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
        
            $buzon_contacto_controller = new BuzonContactoController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $nombre = $inputs->nombre;
            $dni = $inputs->dni;
            $email = $inputs->email;
            $telefono = $inputs->telefono;
            $fecha = $inputs->fecha;
        
            $params = array(
               'id'=> $id,
               'nombre'=> $nombre,
               'dni'=> $dni,
               'email'=> $email,
               'telefono'=> $telefono,
               'fecha'=> $fecha,
            ) ; 
        
            $data = $buzon_contacto_controller->updateBuzonContacto($params) ;
        
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

            $buzon_contacto_controller = new BuzonContactoController() ; 

            $data = $buzon_contacto_controller->updateEstado( $params ) ;

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
            $buzon_contacto_controller = new BuzonContactoController() ; 

            $data = $buzon_contacto_controller->getById( $id) ;

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
            $buzon_contacto_controller = new BuzonContactoController() ; 

            $data = $buzon_contacto_controller->deleteById( $id) ;

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
