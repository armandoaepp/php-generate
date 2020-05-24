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
      $etiqueta_controller = new EtiquetaController() ; 

       $data = $etiqueta_controller->getAll() ;

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
        
      $etiqueta_controller = new EtiquetaController($cnx) ; 
      $connection->beginTransaction();
        
      $etiqueta_id = $inputs->etiqueta_id;
      $eti_descripcion = $inputs->eti_descripcion;
      $eti_publicar = $inputs->eti_publicar;
        
      $params = array(
                'etiqueta_id'=> $etiqueta_id,
                'eti_descripcion'=> $eti_descripcion,
                'eti_publicar'=> $eti_publicar,
              ) ; 
        
      $data = $etiqueta_controller->save($params) ;
        
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
        
      $etiqueta_controller = new EtiquetaController($cnx) ; 
      $connection->beginTransaction();
        
      $etiqueta_id = $inputs->etiqueta_id;
      $eti_descripcion = $inputs->eti_descripcion;
      $eti_publicar = $inputs->eti_publicar;
        
      $params = array(
                'etiqueta_id'=> $etiqueta_id,
                'eti_descripcion'=> $eti_descripcion,
                'eti_publicar'=> $eti_publicar,
              ) ; 
        
      $data = $etiqueta_controller->update($params) ;
        
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

      $etiqueta_id = $inputs->etiqueta_id;
      $estado = $inputs->eti_estado;

      $params = array(
                'etiqueta_id'=> $etiqueta_id,
                'estado'=> $estado,
              ) ; 

      $etiqueta_controller = new EtiquetaController() ; 

      $data = $etiqueta_controller->updateEstado( $params ) ;

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
      $etiqueta_controller = new EtiquetaController() ; 

      $data = $etiqueta_controller->find( $id) ;

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

      $etiqueta_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'etiqueta_id'=> $etiqueta_id,
                'estado'=> $estado,
              ) ; 

      $etiqueta_controller = new EtiquetaController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $etiqueta = $etiqueta_controller->find( $etiqueta_id );

        $data = $etiqueta_controller->deleteById( $etiqueta_id );

			}
			else
			{
				$data = $etiqueta_controller->updateEstado($params);
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

      $etiqueta_id = $inputs->id;
      $publicar = $inputs->publicar;

      if($publicar == "N"){
                $publicar = "S" ;
      }else{
                $publicar = "N" ;
      }

      $params = array(
                'etiqueta_id'=> $etiqueta_id,
                'publicar'=> $publicar,
              ) ; 

      $etiqueta_controller = new EtiquetaController() ; 

      $data = $etiqueta_controller->updatePublish( $params ) ;

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

      $etiqueta_controller = new EtiquetaController() ; 

      $data = $etiqueta_controller->getPublished( $params ) ;

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