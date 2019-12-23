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
      $plato_controller = new PlatoController() ; 

       $data = $plato_controller->getAll() ;

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
        
      $plato_controller = new PlatoController($cnx) ; 
      $connection->beginTransaction();
        
      $plato_id = $inputs->plato_id;
      $nombre = $inputs->nombre;
      $descripcion = $inputs->descripcion;
      $precio = $inputs->precio;
      $descuento = $inputs->descuento;
      $precio_descuento = $inputs->precio_descuento;
      $imagen = $inputs->imagen;
      $fecha_ini_promo = $inputs->fecha_ini_promo;
      $fecha_fin_promo = $inputs->fecha_fin_promo;
      $num_visitas = $inputs->num_visitas;
      $publicar = $inputs->publicar;
      $create_up = $inputs->create_up;
        
      $params = array(
                'plato_id'=> $plato_id,
                'nombre'=> $nombre,
                'descripcion'=> $descripcion,
                'precio'=> $precio,
                'descuento'=> $descuento,
                'precio_descuento'=> $precio_descuento,
                'imagen'=> $imagen,
                'fecha_ini_promo'=> $fecha_ini_promo,
                'fecha_fin_promo'=> $fecha_fin_promo,
                'num_visitas'=> $num_visitas,
                'publicar'=> $publicar,
                'create_up'=> $create_up,
              ) ; 
        
      $data = $plato_controller->save($params) ;
        
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
        
      $plato_controller = new PlatoController($cnx) ; 
      $connection->beginTransaction();
        
      $plato_id = $inputs->plato_id;
      $nombre = $inputs->nombre;
      $descripcion = $inputs->descripcion;
      $precio = $inputs->precio;
      $descuento = $inputs->descuento;
      $precio_descuento = $inputs->precio_descuento;
      $imagen = $inputs->imagen;
      $fecha_ini_promo = $inputs->fecha_ini_promo;
      $fecha_fin_promo = $inputs->fecha_fin_promo;
      $num_visitas = $inputs->num_visitas;
      $publicar = $inputs->publicar;
      $create_up = $inputs->create_up;
        
      $params = array(
                'plato_id'=> $plato_id,
                'nombre'=> $nombre,
                'descripcion'=> $descripcion,
                'precio'=> $precio,
                'descuento'=> $descuento,
                'precio_descuento'=> $precio_descuento,
                'imagen'=> $imagen,
                'fecha_ini_promo'=> $fecha_ini_promo,
                'fecha_fin_promo'=> $fecha_fin_promo,
                'num_visitas'=> $num_visitas,
                'publicar'=> $publicar,
                'create_up'=> $create_up,
              ) ; 
        
      $data = $plato_controller->update($params) ;
        
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

      $plato_id = $inputs->plato_id;
      $estado = $inputs->estado;

      $params = array(
                'plato_id'=> $plato_id,
                'estado'=> $estado,
              ) ; 

      $plato_controller = new PlatoController() ; 

      $data = $plato_controller->updateEstado( $params ) ;

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
      $plato_controller = new PlatoController() ; 

      $data = $plato_controller->find( $id) ;

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

      $plato_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'plato_id'=> $plato_id,
                'estado'=> $estado,
              ) ; 

      $plato_controller = new PlatoController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $plato = $plato_controller->find( $plato_id );

        $data = $plato_controller->deleteById( $plato_id );
				if( !empty($plato) && $data )
				{
					$imagen = $plato["imagen"] ;
					UploadFiles::removeFile($imagen) ;
                }

			}
			else
			{
				$data = $plato_controller->updateEstado($params);
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

      $plato_id = $inputs->id;
      $publicar = $inputs->publicar;

      if($publicar == "N"){
                $publicar = "S" ;
      }else{
                $publicar = "N" ;
      }

      $params = array(
                'plato_id'=> $plato_id,
                'publicar'=> $publicar,
              ) ; 

      $plato_controller = new PlatoController() ; 

      $data = $plato_controller->updatePublish( $params ) ;

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

      $plato_controller = new PlatoController() ; 

      $data = $plato_controller->getPublished( $params ) ;

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
