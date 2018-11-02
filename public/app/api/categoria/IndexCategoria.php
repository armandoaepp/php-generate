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

            $idcategoria = $inputs->idcategoria;
            $nombre = $inputs->nombre;
            $url = $inputs->url;
            $imagen = $inputs->imagen;
            $publicar = $inputs->publicar;
            $created_up = $inputs->created_up;

            $params = array(
               'idcategoria'=> $idcategoria,
               'nombre'=> $nombre,
               'url'=> $url,
               'imagen'=> $imagen,
               'publicar'=> $publicar,
               'created_up'=> $created_up,
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

            $idcategoria = $inputs->idcategoria;
            $nombre = $inputs->nombre;
            $url = $inputs->url;
            $imagen = $inputs->imagen;
            $publicar = $inputs->publicar;
            $created_up = $inputs->created_up;

            $params = array(
               'idcategoria'=> $idcategoria,
               'nombre'=> $nombre,
               'url'=> $url,
               'imagen'=> $imagen,
               'publicar'=> $publicar,
               'created_up'=> $created_up,
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

            $idcategoria = $inputs->Idcategoria;
            $estado = $inputs->estado;

            $params = array(
               'idcategoria'=> $idcategoria,
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

            $idcategoria = $inputs->id;
            $estado = 0;

            var_dump($_POST);

            return ;

            $params = array(
               'idcategoria'=> $idcategoria,
               'estado'=> $estado,
            ) ;

            $categoria_controller = new CategoriaController() ;

            $data = $categoria_controller->deleteById( $params ) ;

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
