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
            $diplomado_controller = new DiplomadoController() ; 

            $data = $diplomado_controller->getAll() ;

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
        
            $diplomado_controller = new DiplomadoController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $titulo = $inputs->titulo;
            $descripcion = $inputs->descripcion;
            $slide = $inputs->slide;
            $imagen = $inputs->imagen;
            $certificacion = $inputs->certificacion;
            $titulos = $inputs->titulos;
            $inversion = $inputs->inversion;
            $titulacion = $inputs->titulacion;
            $detalleduracion = $inputs->detalleduracion;
            $detalledia = $inputs->detalledia;
            $detallehorario = $inputs->detallehorario;
            $detallelugar = $inputs->detallelugar;
            $detalleprecio = $inputs->detalleprecio;
            $detalleequipos = $inputs->detalleequipos;
            $detalleconsultas = $inputs->detalleconsultas;
            $detalledirigido = $inputs->detalledirigido;
            $aquien = $inputs->aquien;
            $temas = $inputs->temas;
            $nombreseo = $inputs->nombreseo;
            $orden = $inputs->orden;
            $fecha = $inputs->fecha;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'descripcion'=> $descripcion,
               'slide'=> $slide,
               'imagen'=> $imagen,
               'certificacion'=> $certificacion,
               'titulos'=> $titulos,
               'inversion'=> $inversion,
               'titulacion'=> $titulacion,
               'detalleduracion'=> $detalleduracion,
               'detalledia'=> $detalledia,
               'detallehorario'=> $detallehorario,
               'detallelugar'=> $detallelugar,
               'detalleprecio'=> $detalleprecio,
               'detalleequipos'=> $detalleequipos,
               'detalleconsultas'=> $detalleconsultas,
               'detalledirigido'=> $detalledirigido,
               'aquien'=> $aquien,
               'temas'=> $temas,
               'nombreseo'=> $nombreseo,
               'orden'=> $orden,
               'fecha'=> $fecha,
            ) ; 
        
            $data = $diplomado_controller->setDiplomado($params) ;
        
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
        
            $diplomado_controller = new DiplomadoController($cnx) ; 
            $objConexion->beginTransaction();
        
            $id = $inputs->id;
            $titulo = $inputs->titulo;
            $descripcion = $inputs->descripcion;
            $slide = $inputs->slide;
            $imagen = $inputs->imagen;
            $certificacion = $inputs->certificacion;
            $titulos = $inputs->titulos;
            $inversion = $inputs->inversion;
            $titulacion = $inputs->titulacion;
            $detalleduracion = $inputs->detalleduracion;
            $detalledia = $inputs->detalledia;
            $detallehorario = $inputs->detallehorario;
            $detallelugar = $inputs->detallelugar;
            $detalleprecio = $inputs->detalleprecio;
            $detalleequipos = $inputs->detalleequipos;
            $detalleconsultas = $inputs->detalleconsultas;
            $detalledirigido = $inputs->detalledirigido;
            $aquien = $inputs->aquien;
            $temas = $inputs->temas;
            $nombreseo = $inputs->nombreseo;
            $orden = $inputs->orden;
            $fecha = $inputs->fecha;
        
            $params = array(
               'id'=> $id,
               'titulo'=> $titulo,
               'descripcion'=> $descripcion,
               'slide'=> $slide,
               'imagen'=> $imagen,
               'certificacion'=> $certificacion,
               'titulos'=> $titulos,
               'inversion'=> $inversion,
               'titulacion'=> $titulacion,
               'detalleduracion'=> $detalleduracion,
               'detalledia'=> $detalledia,
               'detallehorario'=> $detallehorario,
               'detallelugar'=> $detallelugar,
               'detalleprecio'=> $detalleprecio,
               'detalleequipos'=> $detalleequipos,
               'detalleconsultas'=> $detalleconsultas,
               'detalledirigido'=> $detalledirigido,
               'aquien'=> $aquien,
               'temas'=> $temas,
               'nombreseo'=> $nombreseo,
               'orden'=> $orden,
               'fecha'=> $fecha,
            ) ; 
        
            $data = $diplomado_controller->updateDiplomado($params) ;
        
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

            $diplomado_controller = new DiplomadoController() ; 

            $data = $diplomado_controller->updateEstado( $params ) ;

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
            $diplomado_controller = new DiplomadoController() ; 

            $data = $diplomado_controller->getById( $id) ;

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
            $diplomado_controller = new DiplomadoController() ; 

            $data = $diplomado_controller->deleteById( $id) ;

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
