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
      $info_asociado_controller = new InfoAsociadoController() ; 

       $data = $info_asociado_controller->getAll() ;

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
        
      $info_asociado_controller = new InfoAsociadoController($cnx) ; 
      $connection->beginTransaction();
        
      $info_asociado_id = $inputs->info_asociado_id;
      $tipo_info_asociado_id = $inputs->tipo_info_asociado_id;
      $titulo = $inputs->titulo;
      $descripcion = $inputs->descripcion;
      $url_file = $inputs->url_file;
      $publicar = $inputs->publicar;
      $created_at = $inputs->created_at;
        
      $params = array(
                'info_asociado_id'=> $info_asociado_id,
                'tipo_info_asociado_id'=> $tipo_info_asociado_id,
                'titulo'=> $titulo,
                'descripcion'=> $descripcion,
                'url_file'=> $url_file,
                'publicar'=> $publicar,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $info_asociado_controller->save($params) ;
        
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
        
      $info_asociado_controller = new InfoAsociadoController($cnx) ; 
      $connection->beginTransaction();
        
      $info_asociado_id = $inputs->info_asociado_id;
      $tipo_info_asociado_id = $inputs->tipo_info_asociado_id;
      $titulo = $inputs->titulo;
      $descripcion = $inputs->descripcion;
      $url_file = $inputs->url_file;
      $publicar = $inputs->publicar;
      $created_at = $inputs->created_at;
        
      $params = array(
                'info_asociado_id'=> $info_asociado_id,
                'tipo_info_asociado_id'=> $tipo_info_asociado_id,
                'titulo'=> $titulo,
                'descripcion'=> $descripcion,
                'url_file'=> $url_file,
                'publicar'=> $publicar,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $info_asociado_controller->update($params) ;
        
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

      $info_asociado_id = $inputs->info_asociado_id;
      $estado = $inputs->estado;

      $params = array(
                'info_asociado_id'=> $info_asociado_id,
                'estado'=> $estado,
              ) ; 

      $info_asociado_controller = new InfoAsociadoController() ; 

      $data = $info_asociado_controller->updateEstado( $params ) ;

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
      $info_asociado_controller = new InfoAsociadoController() ; 

      $data = $info_asociado_controller->find( $id) ;

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

      $info_asociado_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'info_asociado_id'=> $info_asociado_id,
                'estado'=> $estado,
              ) ; 

      $info_asociado_controller = new InfoAsociadoController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $info_asociado = $info_asociado_controller->find( $info_asociado_id );

        $data = $info_asociado_controller->deleteById( $info_asociado_id );

			}
			else
			{
				$data = $info_asociado_controller->updateEstado($params);
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

      $info_asociado_id = $inputs->id;
      $publicar = $inputs->publicar;

      if($publicar == "N"){
                $publicar = "S" ;
      }else{
                $publicar = "N" ;
      }

      $params = array(
                'info_asociado_id'=> $info_asociado_id,
                'publicar'=> $publicar,
              ) ; 

      $info_asociado_controller = new InfoAsociadoController() ; 

      $data = $info_asociado_controller->updatePublish( $params ) ;

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

      $info_asociado_controller = new InfoAsociadoController() ; 

      $data = $info_asociado_controller->getPublished( $params ) ;

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
