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
            $noticias_controller = new NoticiasController() ; 

            $data = $noticias_controller->getAll() ;

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
        
            $noticias_controller = new NoticiasController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $titulo = $inputs->titulo;
            $descripcion = $inputs->descripcion;
            $imagen = $inputs->imagen;
            $banner = $inputs->banner;
            $nombreseo = $inputs->nombreseo;
            $orden = $inputs->orden;
            $fecha = $inputs->fecha;
            $activo = $inputs->activo;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'descripcion'=> $descripcion,
               'imagen'=> $imagen,
               'banner'=> $banner,
               'nombreseo'=> $nombreseo,
               'orden'=> $orden,
               'fecha'=> $fecha,
               'activo'=> $activo,
            ) ; 
        
            $data = $noticias_controller->setNoticias($params) ;
        
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
        
            $noticias_controller = new NoticiasController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $titulo = $inputs->titulo;
            $descripcion = $inputs->descripcion;
            $imagen = $inputs->imagen;
            $banner = $inputs->banner;
            $nombreseo = $inputs->nombreseo;
            $orden = $inputs->orden;
            $fecha = $inputs->fecha;
            $activo = $inputs->activo;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'descripcion'=> $descripcion,
               'imagen'=> $imagen,
               'banner'=> $banner,
               'nombreseo'=> $nombreseo,
               'orden'=> $orden,
               'fecha'=> $fecha,
               'activo'=> $activo,
            ) ; 
        
            $data = $noticias_controller->updateNoticias($params) ;
        
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

            $noticias_controller = new NoticiasController() ; 

            $data = $noticias_controller->updateEstado( $params ) ;

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
            $noticias_controller = new NoticiasController() ; 

            $data = $noticias_controller->getById( $id) ;

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
            $noticias_controller = new NoticiasController() ; 

            $data = $noticias_controller->deleteById( $id) ;

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
