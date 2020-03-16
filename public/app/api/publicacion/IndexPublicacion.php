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
      $publicacion_controller = new PublicacionController() ; 

       $data = $publicacion_controller->getAll() ;

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
        
      $publicacion_controller = new PublicacionController($cnx) ; 
      $connection->beginTransaction();
        
      $publicacion_id = $inputs->publicacion_id;
      $tipo_publicacion_id = $inputs->tipo_publicacion_id;
      $titulo = $inputs->titulo;
      $descripcion = $inputs->descripcion;
      $url_file = $inputs->url_file;
      $publicar = $inputs->publicar;
      $created_at = $inputs->created_at;
        
      $params = array(
                'publicacion_id'=> $publicacion_id,
                'tipo_publicacion_id'=> $tipo_publicacion_id,
                'titulo'=> $titulo,
                'descripcion'=> $descripcion,
                'url_file'=> $url_file,
                'publicar'=> $publicar,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $publicacion_controller->save($params) ;
        
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
        
      $publicacion_controller = new PublicacionController($cnx) ; 
      $connection->beginTransaction();
        
      $publicacion_id = $inputs->publicacion_id;
      $tipo_publicacion_id = $inputs->tipo_publicacion_id;
      $titulo = $inputs->titulo;
      $descripcion = $inputs->descripcion;
      $url_file = $inputs->url_file;
      $publicar = $inputs->publicar;
      $created_at = $inputs->created_at;
        
      $params = array(
                'publicacion_id'=> $publicacion_id,
                'tipo_publicacion_id'=> $tipo_publicacion_id,
                'titulo'=> $titulo,
                'descripcion'=> $descripcion,
                'url_file'=> $url_file,
                'publicar'=> $publicar,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $publicacion_controller->update($params) ;
        
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

      $publicacion_id = $inputs->publicacion_id;
      $estado = $inputs->estado;

      $params = array(
                'publicacion_id'=> $publicacion_id,
                'estado'=> $estado,
              ) ; 

      $publicacion_controller = new PublicacionController() ; 

      $data = $publicacion_controller->updateEstado( $params ) ;

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
      $publicacion_controller = new PublicacionController() ; 

      $data = $publicacion_controller->find( $id) ;

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

      $publicacion_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'publicacion_id'=> $publicacion_id,
                'estado'=> $estado,
              ) ; 

      $publicacion_controller = new PublicacionController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $publicacion = $publicacion_controller->find( $publicacion_id );

        $data = $publicacion_controller->deleteById( $publicacion_id );

			}
			else
			{
				$data = $publicacion_controller->updateEstado($params);
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

      $publicacion_id = $inputs->id;
      $publicar = $inputs->publicar;

      if($publicar == "N"){
                $publicar = "S" ;
      }else{
                $publicar = "N" ;
      }

      $params = array(
                'publicacion_id'=> $publicacion_id,
                'publicar'=> $publicar,
              ) ; 

      $publicacion_controller = new PublicacionController() ; 

      $data = $publicacion_controller->updatePublish( $params ) ;

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

      $publicacion_controller = new PublicacionController() ; 

      $data = $publicacion_controller->getPublished( $params ) ;

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
