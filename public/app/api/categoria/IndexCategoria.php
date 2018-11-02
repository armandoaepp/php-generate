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
            $categoria_controller = new CategoriaController() ; 

            $data = $categoria_controller->getAll() ;

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
            $objConexion = new Conexion();
            $cnx = $objConexion->get_connection();
        
            $categoria_controller = new CategoriaController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $nombre = $inputs->nombre;
            $url = $inputs->url;
            $imagen = $inputs->imagen;
            $publicar = $inputs->publicar;
            $fecha = $inputs->fecha;
        
            $params = array(
               'id'=> $id,
               'nombre'=> $nombre,
               'url'=> $url,
               'imagen'=> $imagen,
               'publicar'=> $publicar,
               'fecha'=> $fecha,
            ) ; 
        
            $data = $categoria_controller->save($params) ;
        
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
            $objConexion = new Conexion();
            $cnx = $objConexion->get_connection();
        
            $categoria_controller = new CategoriaController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $nombre = $inputs->nombre;
            $url = $inputs->url;
            $imagen = $inputs->imagen;
            $publicar = $inputs->publicar;
            $fecha = $inputs->fecha;
        
            $params = array(
               'id'=> $id,
               'nombre'=> $nombre,
               'url'=> $url,
               'imagen'=> $imagen,
               'publicar'=> $publicar,
               'fecha'=> $fecha,
            ) ; 
        
            $data = $categoria_controller->update($params) ;
        
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

            $categoria_controller = new CategoriaController() ; 

            $data = $categoria_controller->updateEstado( $params ) ;

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
            $categoria_controller = new CategoriaController() ; 

            $data = $categoria_controller->find( $id) ;

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
            $estado = 0; 

            $params = array(
               'id'=> $id,
               'estado'=> $estado,
            ) ; 

            $categoria_controller = new CategoriaController() ; 


            $historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

            if( $historial == 0 )
            {

                $categoria = $categoria_controller->find($params);

                $data = $categoria_controller->deleteById($params);

                if( !empty($categoria) && $data )
                {
                    $imagen = $categoria["imagen"] ;
                    UploadFiles::removeFile($img_bd) ;
                }

            }
            else
            {
                $data = $categoria_controller->updateEstado($params);
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
