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
      $paquete_controller = new PaqueteController() ; 

       $data = $paquete_controller->getAll() ;

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
        
      $paquete_controller = new PaqueteController($cnx) ; 
      $connection->beginTransaction();
        
      $paquete_id = $inputs->paquete_id;
      $ubigeo_id = $inputs->ubigeo_id;
      $nombre = $inputs->nombre;
      $descripcion = $inputs->descripcion;
      $recomendacion = $inputs->recomendacion;
      $num_dias = $inputs->num_dias;
      $num_noches = $inputs->num_noches;
      $precio = $inputs->precio;
      $descuento = $inputs->descuento;
      $precio_descuento = $inputs->precio_descuento;
      $fecha_ini_promo = $inputs->fecha_ini_promo;
      $fecha_fin_promo = $inputs->fecha_fin_promo;
      $url = $inputs->url;
      $num_visitas = $inputs->num_visitas;
      $publicar = $inputs->publicar;
      $created_at = $inputs->created_at;
        
      $params = array(
                'paquete_id'=> $paquete_id,
                'ubigeo_id'=> $ubigeo_id,
                'nombre'=> $nombre,
                'descripcion'=> $descripcion,
                'recomendacion'=> $recomendacion,
                'num_dias'=> $num_dias,
                'num_noches'=> $num_noches,
                'precio'=> $precio,
                'descuento'=> $descuento,
                'precio_descuento'=> $precio_descuento,
                'fecha_ini_promo'=> $fecha_ini_promo,
                'fecha_fin_promo'=> $fecha_fin_promo,
                'url'=> $url,
                'num_visitas'=> $num_visitas,
                'publicar'=> $publicar,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $paquete_controller->save($params) ;
        
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
        
      $paquete_controller = new PaqueteController($cnx) ; 
      $connection->beginTransaction();
        
      $paquete_id = $inputs->paquete_id;
      $ubigeo_id = $inputs->ubigeo_id;
      $nombre = $inputs->nombre;
      $descripcion = $inputs->descripcion;
      $recomendacion = $inputs->recomendacion;
      $num_dias = $inputs->num_dias;
      $num_noches = $inputs->num_noches;
      $precio = $inputs->precio;
      $descuento = $inputs->descuento;
      $precio_descuento = $inputs->precio_descuento;
      $fecha_ini_promo = $inputs->fecha_ini_promo;
      $fecha_fin_promo = $inputs->fecha_fin_promo;
      $url = $inputs->url;
      $num_visitas = $inputs->num_visitas;
      $publicar = $inputs->publicar;
      $created_at = $inputs->created_at;
        
      $params = array(
                'paquete_id'=> $paquete_id,
                'ubigeo_id'=> $ubigeo_id,
                'nombre'=> $nombre,
                'descripcion'=> $descripcion,
                'recomendacion'=> $recomendacion,
                'num_dias'=> $num_dias,
                'num_noches'=> $num_noches,
                'precio'=> $precio,
                'descuento'=> $descuento,
                'precio_descuento'=> $precio_descuento,
                'fecha_ini_promo'=> $fecha_ini_promo,
                'fecha_fin_promo'=> $fecha_fin_promo,
                'url'=> $url,
                'num_visitas'=> $num_visitas,
                'publicar'=> $publicar,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $paquete_controller->update($params) ;
        
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

      $paquete_id = $inputs->paquete_id;
      $estado = $inputs->estado;

      $params = array(
                'paquete_id'=> $paquete_id,
                'estado'=> $estado,
              ) ; 

      $paquete_controller = new PaqueteController() ; 

      $data = $paquete_controller->updateEstado( $params ) ;

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
      $paquete_controller = new PaqueteController() ; 

      $data = $paquete_controller->find( $id) ;

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

      $paquete_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'paquete_id'=> $paquete_id,
                'estado'=> $estado,
              ) ; 

      $paquete_controller = new PaqueteController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $paquete = $paquete_controller->find( $paquete_id );

        $data = $paquete_controller->deleteById( $paquete_id );

			}
			else
			{
				$data = $paquete_controller->updateEstado($params);
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

      $paquete_id = $inputs->id;
      $publicar = $inputs->publicar;

      if($publicar == "N"){
                $publicar = "S" ;
      }else{
                $publicar = "N" ;
      }

      $params = array(
                'paquete_id'=> $paquete_id,
                'publicar'=> $publicar,
              ) ; 

      $paquete_controller = new PaqueteController() ; 

      $data = $paquete_controller->updatePublish( $params ) ;

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

      $paquete_controller = new PaqueteController() ; 

      $data = $paquete_controller->getPublished( $params ) ;

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
