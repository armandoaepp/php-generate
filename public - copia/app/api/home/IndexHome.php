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
            $home_controller = new HomeController() ; 

            $data = $home_controller->getAll() ;

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
        
            $home_controller = new HomeController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $titulo = $inputs->titulo;
            $url = $inputs->url;
            $imagen = $inputs->imagen;
            $titulo_2 = $inputs->titulo_2;
            $url_2 = $inputs->url_2;
            $imagen_2 = $inputs->imagen_2;
            $titulo_3 = $inputs->titulo_3;
            $url_3 = $inputs->url_3;
            $imagen_3 = $inputs->imagen_3;
            $convenios = $inputs->convenios;
            $orden = $inputs->orden;
            $fecha = $inputs->fecha;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'url'=> $url,
               'imagen'=> $imagen,
               'titulo_2'=> $titulo_2,
               'url_2'=> $url_2,
               'imagen_2'=> $imagen_2,
               'titulo_3'=> $titulo_3,
               'url_3'=> $url_3,
               'imagen_3'=> $imagen_3,
               'convenios'=> $convenios,
               'orden'=> $orden,
               'fecha'=> $fecha,
            ) ; 
        
            $data = $home_controller->setHome($params) ;
        
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
        
            $home_controller = new HomeController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $titulo = $inputs->titulo;
            $url = $inputs->url;
            $imagen = $inputs->imagen;
            $titulo_2 = $inputs->titulo_2;
            $url_2 = $inputs->url_2;
            $imagen_2 = $inputs->imagen_2;
            $titulo_3 = $inputs->titulo_3;
            $url_3 = $inputs->url_3;
            $imagen_3 = $inputs->imagen_3;
            $convenios = $inputs->convenios;
            $orden = $inputs->orden;
            $fecha = $inputs->fecha;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'url'=> $url,
               'imagen'=> $imagen,
               'titulo_2'=> $titulo_2,
               'url_2'=> $url_2,
               'imagen_2'=> $imagen_2,
               'titulo_3'=> $titulo_3,
               'url_3'=> $url_3,
               'imagen_3'=> $imagen_3,
               'convenios'=> $convenios,
               'orden'=> $orden,
               'fecha'=> $fecha,
            ) ; 
        
            $data = $home_controller->updateHome($params) ;
        
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

            $home_controller = new HomeController() ; 

            $data = $home_controller->updateEstado( $params ) ;

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
            $home_controller = new HomeController() ; 

            $data = $home_controller->getById( $id) ;

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
            $home_controller = new HomeController() ; 

            $data = $home_controller->deleteById( $id) ;

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
