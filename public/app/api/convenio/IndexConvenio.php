<?php 

/**
 * [Api Index Auth  Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

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
      $convenio_controller = new ConvenioController() ; 

       $data = $convenio_controller->getAll() ;

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
      $connection = new Connection();
      $cnx = $connection->getConnection();
        
      $convenio_controller = new ConvenioController($cnx) ; 
      $connection->beginTransaction();
        
      $convenio_id = $inputs->convenio_id;
      $tipo_convenio_id = $inputs->tipo_convenio_id;
      $nombre = $inputs->nombre;
      $caracteristica = $inputs->caracteristica;
      $precio = $inputs->precio;
      $glosa = $inputs->glosa;
      $publicar = $inputs->publicar;
        
      $params = array(
                'convenio_id'=> $convenio_id,
                'tipo_convenio_id'=> $tipo_convenio_id,
                'nombre'=> $nombre,
                'caracteristica'=> $caracteristica,
                'precio'=> $precio,
                'glosa'=> $glosa,
                'publicar'=> $publicar,
              ) ; 
        
      $data = $convenio_controller->save($params) ;
        
      $connection->commit();

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);
    }
    catch (Exception $e)
    {
      $connection->rollback();
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "upd":
    try
    {
      $connection = new Connection();
      $cnx = $connection->getConnection();
        
      $convenio_controller = new ConvenioController($cnx) ; 
      $connection->beginTransaction();
        
      $convenio_id = $inputs->convenio_id;
      $tipo_convenio_id = $inputs->tipo_convenio_id;
      $nombre = $inputs->nombre;
      $caracteristica = $inputs->caracteristica;
      $precio = $inputs->precio;
      $glosa = $inputs->glosa;
      $publicar = $inputs->publicar;
        
      $params = array(
                'convenio_id'=> $convenio_id,
                'tipo_convenio_id'=> $tipo_convenio_id,
                'nombre'=> $nombre,
                'caracteristica'=> $caracteristica,
                'precio'=> $precio,
                'glosa'=> $glosa,
                'publicar'=> $publicar,
              ) ; 
        
      $data = $convenio_controller->update($params) ;
        
      $connection->commit();

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

    }
    catch (Exception $e)
    {
      $connection->rollback();
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "updestado":
    try
    {

      $convenio_id = $inputs->convenio_id;
      $estado = $inputs->estado;

      $params = array(
                'convenio_id'=> $convenio_id,
                'estado'=> $estado,
              ) ; 

      $convenio_controller = new ConvenioController() ; 

      $data = $convenio_controller->updateEstado( $params ) ;

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
      $convenio_controller = new ConvenioController() ; 

      $data = $convenio_controller->find( $id) ;

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

      $convenio_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'convenio_id'=> $convenio_id,
                'estado'=> $estado,
              ) ; 

      $convenio_controller = new ConvenioController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $convenio = $convenio_controller->find( $convenio_id );

        $data = $convenio_controller->deleteById( $convenio_id );

			}
			else
			{
				$data = $convenio_controller->updateEstado($params);
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

  case "publish":
    try
    {

      $convenio_id = $inputs->id;
      $publicar = $inputs->publicar;

      if($publicar == "N"){
                $publicar = "S" ;
      }else{
                $publicar = "N" ;
      }

      $params = array(
                'convenio_id'=> $convenio_id,
                'publicar'=> $publicar,
              ) ; 

      $convenio_controller = new ConvenioController() ; 

      $data = $convenio_controller->updatePublish( $params ) ;

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

    }
    catch (Exception $e)
    {
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "published":
    try
    {

      $publicar = $inputs->publicar;

      $params = array(
                'publicar'=> $publicar,
              ) ; 

      $convenio_controller = new ConvenioController() ; 

      $data = $convenio_controller->getPublished( $params ) ;

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
