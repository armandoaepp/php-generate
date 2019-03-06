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
      $tipo_noticia_controller = new TipoNoticiaController() ; 

       $data = $tipo_noticia_controller->getAll() ;

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
        
      $tipo_noticia_controller = new TipoNoticiaController($cnx) ; 
      $connection->beginTransaction();
        
      $tipo_noticia_id = $inputs->tipo_noticia_id;
      $nombre = $inputs->nombre;
      $url = $inputs->url;
      $imagen = $inputs->imagen;
      $publicar = $inputs->publicar;
      $created_up = $inputs->created_up;
        
      $params = array(
                'tipo_noticia_id'=> $tipo_noticia_id,
                'nombre'=> $nombre,
                'url'=> $url,
                'imagen'=> $imagen,
                'publicar'=> $publicar,
                'created_up'=> $created_up,
              ) ; 
        
      $data = $tipo_noticia_controller->save($params) ;
        
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
        
      $tipo_noticia_controller = new TipoNoticiaController($cnx) ; 
      $connection->beginTransaction();
        
      $tipo_noticia_id = $inputs->tipo_noticia_id;
      $nombre = $inputs->nombre;
      $url = $inputs->url;
      $imagen = $inputs->imagen;
      $publicar = $inputs->publicar;
      $created_up = $inputs->created_up;
        
      $params = array(
                'tipo_noticia_id'=> $tipo_noticia_id,
                'nombre'=> $nombre,
                'url'=> $url,
                'imagen'=> $imagen,
                'publicar'=> $publicar,
                'created_up'=> $created_up,
              ) ; 
        
      $data = $tipo_noticia_controller->update($params) ;
        
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

      $tipo_noticia_id = $inputs->tipo_noticia_id;
      $estado = $inputs->estado;

      $params = array(
                'tipo_noticia_id'=> $tipo_noticia_id,
                'estado'=> $estado,
              ) ; 

      $tipo_noticia_controller = new TipoNoticiaController() ; 

      $data = $tipo_noticia_controller->updateEstado( $params ) ;

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
      $tipo_noticia_controller = new TipoNoticiaController() ; 

      $data = $tipo_noticia_controller->find( $id) ;

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

      $tipo_noticia_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'tipo_noticia_id'=> $tipo_noticia_id,
                'estado'=> $estado,
              ) ; 

      $tipo_noticia_controller = new TipoNoticiaController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

				$tipo_noticia = $tipo_noticia_controller->find( $tipo_noticia_id );

				$data = $tipo_noticia_controller->deleteById( $tipo_noticia_id );

				if( !empty($tipo_noticia) && $data )
				{
					$imagen = $tipo_noticia["imagen"] ; 
					UploadFiles::removeFile($imagen) ;
				}

			}
			else
			{
				$data = $tipo_noticia_controller->updateEstado($params);
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

      $tipo_noticia_id = $inputs->id;
      $publicar = $inputs->publicar;

      if($publicar == "N"){
                $publicar = "S" ;
      }else{
                $publicar = "N" ;
      }

      $params = array(
                'tipo_noticia_id'=> $tipo_noticia_id,
                'publicar'=> $publicar,
              ) ; 

      $tipo_noticia_controller = new TipoNoticiaController() ; 

      $data = $tipo_noticia_controller->updatePublish( $params ) ;

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

      $tipo_noticia_controller = new TipoNoticiaController() ; 

      $data = $tipo_noticia_controller->getPublished( $params ) ;

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
