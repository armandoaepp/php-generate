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
      $producto_controller = new ProductoController() ; 

       $data = $producto_controller->getAll() ;

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
        
      $producto_controller = new ProductoController($cnx) ; 
      $connection->beginTransaction();
        
      $producto_id = $inputs->producto_id;
      $sub_categoria_id = $inputs->sub_categoria_id;
      $categoria_id = $inputs->categoria_id;
      $codigo = $inputs->codigo;
      $nombre = $inputs->nombre;
      $descripcion_corta = $inputs->descripcion_corta;
      $precio = $inputs->precio;
      $descuento = $inputs->descuento;
      $precio_descuento = $inputs->precio_descuento;
      $num_visitas = $inputs->num_visitas;
      $publicar = $inputs->publicar;
      $created_at = $inputs->created_at;
        
      $params = array(
                'producto_id'=> $producto_id,
                'sub_categoria_id'=> $sub_categoria_id,
                'categoria_id'=> $categoria_id,
                'codigo'=> $codigo,
                'nombre'=> $nombre,
                'descripcion_corta'=> $descripcion_corta,
                'precio'=> $precio,
                'descuento'=> $descuento,
                'precio_descuento'=> $precio_descuento,
                'num_visitas'=> $num_visitas,
                'publicar'=> $publicar,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $producto_controller->save($params) ;
        
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
        
      $producto_controller = new ProductoController($cnx) ; 
      $connection->beginTransaction();
        
      $producto_id = $inputs->producto_id;
      $sub_categoria_id = $inputs->sub_categoria_id;
      $categoria_id = $inputs->categoria_id;
      $codigo = $inputs->codigo;
      $nombre = $inputs->nombre;
      $descripcion_corta = $inputs->descripcion_corta;
      $precio = $inputs->precio;
      $descuento = $inputs->descuento;
      $precio_descuento = $inputs->precio_descuento;
      $num_visitas = $inputs->num_visitas;
      $publicar = $inputs->publicar;
      $created_at = $inputs->created_at;
        
      $params = array(
                'producto_id'=> $producto_id,
                'sub_categoria_id'=> $sub_categoria_id,
                'categoria_id'=> $categoria_id,
                'codigo'=> $codigo,
                'nombre'=> $nombre,
                'descripcion_corta'=> $descripcion_corta,
                'precio'=> $precio,
                'descuento'=> $descuento,
                'precio_descuento'=> $precio_descuento,
                'num_visitas'=> $num_visitas,
                'publicar'=> $publicar,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $producto_controller->update($params) ;
        
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

      $producto_id = $inputs->producto_id;
      $estado = $inputs->estado;

      $params = array(
                'producto_id'=> $producto_id,
                'estado'=> $estado,
              ) ; 

      $producto_controller = new ProductoController() ; 

      $data = $producto_controller->updateEstado( $params ) ;

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
      $producto_controller = new ProductoController() ; 

      $data = $producto_controller->find( $id) ;

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

      $producto_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'producto_id'=> $producto_id,
                'estado'=> $estado,
              ) ; 

      $producto_controller = new ProductoController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $producto = $producto_controller->find( $producto_id );

        $data = $producto_controller->deleteById( $producto_id );

			}
			else
			{
				$data = $producto_controller->updateEstado($params);
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

      $producto_id = $inputs->id;
      $publicar = $inputs->publicar;

      if($publicar == "N"){
                $publicar = "S" ;
      }else{
                $publicar = "N" ;
      }

      $params = array(
                'producto_id'=> $producto_id,
                'publicar'=> $publicar,
              ) ; 

      $producto_controller = new ProductoController() ; 

      $data = $producto_controller->updatePublish( $params ) ;

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

      $producto_controller = new ProductoController() ; 

      $data = $producto_controller->getPublished( $params ) ;

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
