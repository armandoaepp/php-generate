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
      $mensaje_controller = new MensajeController() ; 

       $data = $mensaje_controller->getAll() ;

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
        
      $mensaje_controller = new MensajeController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $titulo = $inputs->titulo;
      $imagen = $inputs->imagen;
      $descripcion = $inputs->descripcion;
      $descripcion_2 = $inputs->descripcion_2;
      $slogan = $inputs->slogan;
      $mision = $inputs->mision;
      $vision = $inputs->vision;
      $orden = $inputs->orden;
      $fecha = $inputs->fecha;
        
      $params = array(
                'id'=> $id,
                'titulo'=> $titulo,
                'imagen'=> $imagen,
                'descripcion'=> $descripcion,
                'descripcion_2'=> $descripcion_2,
                'slogan'=> $slogan,
                'mision'=> $mision,
                'vision'=> $vision,
                'orden'=> $orden,
                'fecha'=> $fecha,
              ) ; 
        
      $data = $mensaje_controller->save($params) ;

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
        
      $mensaje_controller = new MensajeController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $titulo = $inputs->titulo;
      $imagen = $inputs->imagen;
      $descripcion = $inputs->descripcion;
      $descripcion_2 = $inputs->descripcion_2;
      $slogan = $inputs->slogan;
      $mision = $inputs->mision;
      $vision = $inputs->vision;
      $orden = $inputs->orden;
      $fecha = $inputs->fecha;
        
      $params = array(
                'id'=> $id,
                'titulo'=> $titulo,
                'imagen'=> $imagen,
                'descripcion'=> $descripcion,
                'descripcion_2'=> $descripcion_2,
                'slogan'=> $slogan,
                'mision'=> $mision,
                'vision'=> $vision,
                'orden'=> $orden,
                'fecha'=> $fecha,
              ) ; 
        
      $data = $mensaje_controller->update($params) ;

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

      $mensaje_controller = new MensajeController() ; 

      $data = $mensaje_controller->updateEstado( $params ) ;

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
      $mensaje_controller = new MensajeController() ; 

      $data = $mensaje_controller->find( $id) ;

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

      $mensaje_controller = new MensajeController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

				$mensaje = $mensaje_controller->find($params);

				$data = $mensaje_controller->deleteById($params);

				if( !empty($mensaje) && $data )
				{
					$imagen = $mensaje["imagen"] ;
					UploadFiles::removeFile($img_bd) ;
				}

			}
			else
			{
				$data = $mensaje_controller->updateEstado($params);
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
