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
      $home_controller = new HomeController() ; 

       $data = $home_controller->getAll() ;

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
        
      $home_controller = new HomeController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $titulo = $inputs->titulo;
      $url = $inputs->url;
      $imagen = $inputs->imagen;
      $titulo_2 = $inputs->titulo_2;
      $url_2 = $inputs->url_2;
      $imagen_2 = $inputs->imagen_2;
      $titulo_3 = $inputs->titulo_3;
      $url_3 = $inputs->url_3;
      $imagen_3 = $inputs->imagen_3;
      $convenios = $inputs->convenios;
      $orden = $inputs->orden;
      $fecha = $inputs->fecha;
        
      $params = array(
                'id'=> $id,
                'titulo'=> $titulo,
                'url'=> $url,
                'imagen'=> $imagen,
                'titulo_2'=> $titulo_2,
                'url_2'=> $url_2,
                'imagen_2'=> $imagen_2,
                'titulo_3'=> $titulo_3,
                'url_3'=> $url_3,
                'imagen_3'=> $imagen_3,
                'convenios'=> $convenios,
                'orden'=> $orden,
                'fecha'=> $fecha,
              ) ; 
        
      $data = $home_controller->save($params) ;
        
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
        
      $home_controller = new HomeController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $titulo = $inputs->titulo;
      $url = $inputs->url;
      $imagen = $inputs->imagen;
      $titulo_2 = $inputs->titulo_2;
      $url_2 = $inputs->url_2;
      $imagen_2 = $inputs->imagen_2;
      $titulo_3 = $inputs->titulo_3;
      $url_3 = $inputs->url_3;
      $imagen_3 = $inputs->imagen_3;
      $convenios = $inputs->convenios;
      $orden = $inputs->orden;
      $fecha = $inputs->fecha;
        
      $params = array(
                'id'=> $id,
                'titulo'=> $titulo,
                'url'=> $url,
                'imagen'=> $imagen,
                'titulo_2'=> $titulo_2,
                'url_2'=> $url_2,
                'imagen_2'=> $imagen_2,
                'titulo_3'=> $titulo_3,
                'url_3'=> $url_3,
                'imagen_3'=> $imagen_3,
                'convenios'=> $convenios,
                'orden'=> $orden,
                'fecha'=> $fecha,
              ) ; 
        
      $data = $home_controller->update($params) ;
        
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

      $id = $inputs->id;
      $estado = $inputs->estado;

      $params = array(
                'id'=> $id,
                'estado'=> $estado,
              ) ; 

      $home_controller = new HomeController() ; 

      $data = $home_controller->updateEstado( $params ) ;

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
      $home_controller = new HomeController() ; 

      $data = $home_controller->find( $id) ;

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
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'id'=> $id,
                'estado'=> $estado,
              ) ; 

      $home_controller = new HomeController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

				$home = $home_controller->find($params);

				$data = $home_controller->deleteById($params);

				if( !empty($home) && $data )
				{
					$imagen = $home["imagen"] ;
					UploadFiles::removeFile($img_bd) ;
				}

			}
			else
			{
				$data = $home_controller->updateEstado($params);
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
