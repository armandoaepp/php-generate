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
      $habitacion_controller = new HabitacionController() ; 

       $data = $habitacion_controller->getAll() ;

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
        
      $habitacion_controller = new HabitacionController($cnx) ; 
      $connection->beginTransaction();
        
      $habitacion_id = $inputs->habitacion_id;
      $nombre = $inputs->nombre;
      $descripcion = $inputs->descripcion;
      $caracteristicas = $inputs->caracteristicas;
      $precio = $inputs->precio;
      $num_visitas = $inputs->num_visitas;
      $publicar = $inputs->publicar;
      $created_at = $inputs->created_at;
        
      $params = array(
                'habitacion_id'=> $habitacion_id,
                'nombre'=> $nombre,
                'descripcion'=> $descripcion,
                'caracteristicas'=> $caracteristicas,
                'precio'=> $precio,
                'num_visitas'=> $num_visitas,
                'publicar'=> $publicar,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $habitacion_controller->save($params) ;
        
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
        
      $habitacion_controller = new HabitacionController($cnx) ; 
      $connection->beginTransaction();
        
      $habitacion_id = $inputs->habitacion_id;
      $nombre = $inputs->nombre;
      $descripcion = $inputs->descripcion;
      $caracteristicas = $inputs->caracteristicas;
      $precio = $inputs->precio;
      $num_visitas = $inputs->num_visitas;
      $publicar = $inputs->publicar;
      $created_at = $inputs->created_at;
        
      $params = array(
                'habitacion_id'=> $habitacion_id,
                'nombre'=> $nombre,
                'descripcion'=> $descripcion,
                'caracteristicas'=> $caracteristicas,
                'precio'=> $precio,
                'num_visitas'=> $num_visitas,
                'publicar'=> $publicar,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $habitacion_controller->update($params) ;
        
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

      $habitacion_id = $inputs->habitacion_id;
      $estado = $inputs->estado;

      $params = array(
                'habitacion_id'=> $habitacion_id,
                'estado'=> $estado,
              ) ; 

      $habitacion_controller = new HabitacionController() ; 

      $data = $habitacion_controller->updateEstado( $params ) ;

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
      $habitacion_controller = new HabitacionController() ; 

      $data = $habitacion_controller->find( $id) ;

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

      $habitacion_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'habitacion_id'=> $habitacion_id,
                'estado'=> $estado,
              ) ; 

      $habitacion_controller = new HabitacionController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $habitacion = $habitacion_controller->find( $habitacion_id );

        $data = $habitacion_controller->deleteById( $habitacion_id );

			}
			else
			{
				$data = $habitacion_controller->updateEstado($params);
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

      $habitacion_id = $inputs->id;
      $publicar = $inputs->publicar;

      if($publicar == "N"){
                $publicar = "S" ;
      }else{
                $publicar = "N" ;
      }

      $params = array(
                'habitacion_id'=> $habitacion_id,
                'publicar'=> $publicar,
              ) ; 

      $habitacion_controller = new HabitacionController() ; 

      $data = $habitacion_controller->updatePublish( $params ) ;

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

      $habitacion_controller = new HabitacionController() ; 

      $data = $habitacion_controller->getPublished( $params ) ;

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
