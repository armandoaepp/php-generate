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
      $textos_controller = new TextosController() ; 

       $data = $textos_controller->getAll() ;

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
        
      $textos_controller = new TextosController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $identificador = $inputs->identificador;
      $titulo = $inputs->titulo;
      $descripcion = $inputs->descripcion;
      $orden = $inputs->orden;
      $fecha = $inputs->fecha;
        
      $params = array(
                'id'=> $id,
                'identificador'=> $identificador,
                'titulo'=> $titulo,
                'descripcion'=> $descripcion,
                'orden'=> $orden,
                'fecha'=> $fecha,
              ) ; 
        
      $data = $textos_controller->save($params) ;

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
        
      $textos_controller = new TextosController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $identificador = $inputs->identificador;
      $titulo = $inputs->titulo;
      $descripcion = $inputs->descripcion;
      $orden = $inputs->orden;
      $fecha = $inputs->fecha;
        
      $params = array(
                'id'=> $id,
                'identificador'=> $identificador,
                'titulo'=> $titulo,
                'descripcion'=> $descripcion,
                'orden'=> $orden,
                'fecha'=> $fecha,
              ) ; 
        
      $data = $textos_controller->update($params) ;

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

      $textos_controller = new TextosController() ; 

      $data = $textos_controller->updateEstado( $params ) ;

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
      $textos_controller = new TextosController() ; 

      $data = $textos_controller->find( $id) ;

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

      $textos_controller = new TextosController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

				$textos = $textos_controller->find($params);

				$data = $textos_controller->deleteById($params);

				if( !empty($textos) && $data )
				{
					$imagen = $textos["imagen"] ;
					UploadFiles::removeFile($img_bd) ;
				}

			}
			else
			{
				$data = $textos_controller->updateEstado($params);
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
