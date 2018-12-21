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
            $traslados_controller = new TrasladosController() ; 

            $data = $traslados_controller->getAll() ;

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
        
            $traslados_controller = new TrasladosController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $titulo = $inputs->titulo;
            $imagen = $inputs->imagen;
            $presentacion = $inputs->presentacion;
            $item1 = $inputs->item1;
            $item2 = $inputs->item2;
            $item3 = $inputs->item3;
            $item4 = $inputs->item4;
            $descitem1 = $inputs->descitem1;
            $descitem2 = $inputs->descitem2;
            $descitem3 = $inputs->descitem3;
            $descitem4 = $inputs->descitem4;
            $promocion = $inputs->promocion;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'imagen'=> $imagen,
               'presentacion'=> $presentacion,
               'item1'=> $item1,
               'item2'=> $item2,
               'item3'=> $item3,
               'item4'=> $item4,
               'descitem1'=> $descitem1,
               'descitem2'=> $descitem2,
               'descitem3'=> $descitem3,
               'descitem4'=> $descitem4,
               'promocion'=> $promocion,
            ) ; 
        
            $data = $traslados_controller->setTraslados($params) ;
        
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
        
            $traslados_controller = new TrasladosController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $titulo = $inputs->titulo;
            $imagen = $inputs->imagen;
            $presentacion = $inputs->presentacion;
            $item1 = $inputs->item1;
            $item2 = $inputs->item2;
            $item3 = $inputs->item3;
            $item4 = $inputs->item4;
            $descitem1 = $inputs->descitem1;
            $descitem2 = $inputs->descitem2;
            $descitem3 = $inputs->descitem3;
            $descitem4 = $inputs->descitem4;
            $promocion = $inputs->promocion;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'imagen'=> $imagen,
               'presentacion'=> $presentacion,
               'item1'=> $item1,
               'item2'=> $item2,
               'item3'=> $item3,
               'item4'=> $item4,
               'descitem1'=> $descitem1,
               'descitem2'=> $descitem2,
               'descitem3'=> $descitem3,
               'descitem4'=> $descitem4,
               'promocion'=> $promocion,
            ) ; 
        
            $data = $traslados_controller->updateTraslados($params) ;
        
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

            $traslados_controller = new TrasladosController() ; 

            $data = $traslados_controller->updateEstado( $params ) ;

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
            $traslados_controller = new TrasladosController() ; 

            $data = $traslados_controller->getById( $id) ;

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
            $traslados_controller = new TrasladosController() ; 

            $data = $traslados_controller->deleteById( $id) ;

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
