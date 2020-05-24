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
      $producto_img_controller = new ProductoImgController() ; 

       $data = $producto_img_controller->getAll() ;

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
        
      $producto_img_controller = new ProductoImgController($cnx) ; 
      $connection->beginTransaction();
        
      $producto_img_id = $inputs->producto_img_id;
      $producto_id = $inputs->producto_id;
      $pi_jerarquia = $inputs->pi_jerarquia;
      $pi_imagen = $inputs->pi_imagen;
      $pi_descripcion = $inputs->pi_descripcion;
        
      $params = array(
                'producto_img_id'=> $producto_img_id,
                'producto_id'=> $producto_id,
                'pi_jerarquia'=> $pi_jerarquia,
                'pi_imagen'=> $pi_imagen,
                'pi_descripcion'=> $pi_descripcion,
              ) ; 
        
      $data = $producto_img_controller->save($params) ;
        
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
        
      $producto_img_controller = new ProductoImgController($cnx) ; 
      $connection->beginTransaction();
        
      $producto_img_id = $inputs->producto_img_id;
      $producto_id = $inputs->producto_id;
      $pi_jerarquia = $inputs->pi_jerarquia;
      $pi_imagen = $inputs->pi_imagen;
      $pi_descripcion = $inputs->pi_descripcion;
        
      $params = array(
                'producto_img_id'=> $producto_img_id,
                'producto_id'=> $producto_id,
                'pi_jerarquia'=> $pi_jerarquia,
                'pi_imagen'=> $pi_imagen,
                'pi_descripcion'=> $pi_descripcion,
              ) ; 
        
      $data = $producto_img_controller->update($params) ;
        
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

      $producto_img_id = $inputs->producto_img_id;
      $estado = $inputs->pi_estado;

      $params = array(
                'producto_img_id'=> $producto_img_id,
                'estado'=> $estado,
              ) ; 

      $producto_img_controller = new ProductoImgController() ; 

      $data = $producto_img_controller->updateEstado( $params ) ;

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
      $producto_img_controller = new ProductoImgController() ; 

      $data = $producto_img_controller->find( $id) ;

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

      $producto_img_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'producto_img_id'=> $producto_img_id,
                'estado'=> $estado,
              ) ; 

      $producto_img_controller = new ProductoImgController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $producto_img = $producto_img_controller->find( $producto_img_id );

        $data = $producto_img_controller->deleteById( $producto_img_id );

			}
			else
			{
				$data = $producto_img_controller->updateEstado($params);
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
