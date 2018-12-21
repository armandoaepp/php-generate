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
            $campus_controller = new CampusController() ; 

            $data = $campus_controller->getAll() ;

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
        
            $campus_controller = new CampusController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $titulo = $inputs->titulo;
            $subtitulo = $inputs->subtitulo;
            $descripcion = $inputs->descripcion;
            $imagen = $inputs->imagen;
            $url = $inputs->url;
            $orden = $inputs->orden;
            $fecha = $inputs->fecha;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'subtitulo'=> $subtitulo,
               'descripcion'=> $descripcion,
               'imagen'=> $imagen,
               'url'=> $url,
               'orden'=> $orden,
               'fecha'=> $fecha,
            ) ; 
        
            $data = $campus_controller->setCampus($params) ;
        
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
        
            $campus_controller = new CampusController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $titulo = $inputs->titulo;
            $subtitulo = $inputs->subtitulo;
            $descripcion = $inputs->descripcion;
            $imagen = $inputs->imagen;
            $url = $inputs->url;
            $orden = $inputs->orden;
            $fecha = $inputs->fecha;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'subtitulo'=> $subtitulo,
               'descripcion'=> $descripcion,
               'imagen'=> $imagen,
               'url'=> $url,
               'orden'=> $orden,
               'fecha'=> $fecha,
            ) ; 
        
            $data = $campus_controller->updateCampus($params) ;
        
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

            $campus_controller = new CampusController() ; 

            $data = $campus_controller->updateEstado( $params ) ;

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
            $campus_controller = new CampusController() ; 

            $data = $campus_controller->getById( $id) ;

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
            $campus_controller = new CampusController() ; 

            $data = $campus_controller->deleteById( $id) ;

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
