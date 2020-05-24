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
      $sub_categoria_controller = new SubCategoriaController() ; 

       $data = $sub_categoria_controller->getAll() ;

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
        
      $sub_categoria_controller = new SubCategoriaController($cnx) ; 
      $connection->beginTransaction();
        
      $sub_categoria_id = $inputs->sub_categoria_id;
      $categoria_id = $inputs->categoria_id;
      $sc_nombre = $inputs->sc_nombre;
      $sc_imagen = $inputs->sc_imagen;
      $sc_publicar = $inputs->sc_publicar;
        
      $params = array(
                'sub_categoria_id'=> $sub_categoria_id,
                'categoria_id'=> $categoria_id,
                'sc_nombre'=> $sc_nombre,
                'sc_imagen'=> $sc_imagen,
                'sc_publicar'=> $sc_publicar,
              ) ; 
        
      $data = $sub_categoria_controller->save($params) ;
        
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
        
      $sub_categoria_controller = new SubCategoriaController($cnx) ; 
      $connection->beginTransaction();
        
      $sub_categoria_id = $inputs->sub_categoria_id;
      $categoria_id = $inputs->categoria_id;
      $sc_nombre = $inputs->sc_nombre;
      $sc_imagen = $inputs->sc_imagen;
      $sc_publicar = $inputs->sc_publicar;
        
      $params = array(
                'sub_categoria_id'=> $sub_categoria_id,
                'categoria_id'=> $categoria_id,
                'sc_nombre'=> $sc_nombre,
                'sc_imagen'=> $sc_imagen,
                'sc_publicar'=> $sc_publicar,
              ) ; 
        
      $data = $sub_categoria_controller->update($params) ;
        
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

      $sub_categoria_id = $inputs->sub_categoria_id;
      $estado = $inputs->sc_estado;

      $params = array(
                'sub_categoria_id'=> $sub_categoria_id,
                'estado'=> $estado,
              ) ; 

      $sub_categoria_controller = new SubCategoriaController() ; 

      $data = $sub_categoria_controller->updateEstado( $params ) ;

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
      $sub_categoria_controller = new SubCategoriaController() ; 

      $data = $sub_categoria_controller->find( $id) ;

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

      $sub_categoria_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'sub_categoria_id'=> $sub_categoria_id,
                'estado'=> $estado,
              ) ; 

      $sub_categoria_controller = new SubCategoriaController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $sub_categoria = $sub_categoria_controller->find( $sub_categoria_id );

        $data = $sub_categoria_controller->deleteById( $sub_categoria_id );

			}
			else
			{
				$data = $sub_categoria_controller->updateEstado($params);
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

      $sub_categoria_id = $inputs->id;
      $publicar = $inputs->publicar;

      if($publicar == "N"){
                $publicar = "S" ;
      }else{
                $publicar = "N" ;
      }

      $params = array(
                'sub_categoria_id'=> $sub_categoria_id,
                'publicar'=> $publicar,
              ) ; 

      $sub_categoria_controller = new SubCategoriaController() ; 

      $data = $sub_categoria_controller->updatePublish( $params ) ;

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

      $sub_categoria_controller = new SubCategoriaController() ; 

      $data = $sub_categoria_controller->getPublished( $params ) ;

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
