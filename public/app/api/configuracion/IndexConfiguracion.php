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
      $configuracion_controller = new ConfiguracionController() ; 

       $data = $configuracion_controller->getAll() ;

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
        
      $configuracion_controller = new ConfiguracionController($cnx) ; 
      $connection->beginTransaction();
        
      $configuracion_id = $inputs->configuracion_id;
      $titulo = $inputs->titulo;
      $horario = $inputs->horario;
      $direccion = $inputs->direccion;
      $email = $inputs->email;
      $telefono = $inputs->telefono;
      $facebook = $inputs->facebook;
      $youtube = $inputs->youtube;
      $instagram = $inputs->instagram;
      $mapa = $inputs->mapa;
      $popup = $inputs->popup;
      $show_popup = $inputs->show_popup;
        
      $params = array(
                'configuracion_id'=> $configuracion_id,
                'titulo'=> $titulo,
                'horario'=> $horario,
                'direccion'=> $direccion,
                'email'=> $email,
                'telefono'=> $telefono,
                'facebook'=> $facebook,
                'youtube'=> $youtube,
                'instagram'=> $instagram,
                'mapa'=> $mapa,
                'popup'=> $popup,
                'show_popup'=> $show_popup,
              ) ; 
        
      $data = $configuracion_controller->save($params) ;
        
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
        
      $configuracion_controller = new ConfiguracionController($cnx) ; 
      $connection->beginTransaction();
        
      $configuracion_id = $inputs->configuracion_id;
      $titulo = $inputs->titulo;
      $horario = $inputs->horario;
      $direccion = $inputs->direccion;
      $email = $inputs->email;
      $telefono = $inputs->telefono;
      $facebook = $inputs->facebook;
      $youtube = $inputs->youtube;
      $instagram = $inputs->instagram;
      $mapa = $inputs->mapa;
      $popup = $inputs->popup;
      $show_popup = $inputs->show_popup;
        
      $params = array(
                'configuracion_id'=> $configuracion_id,
                'titulo'=> $titulo,
                'horario'=> $horario,
                'direccion'=> $direccion,
                'email'=> $email,
                'telefono'=> $telefono,
                'facebook'=> $facebook,
                'youtube'=> $youtube,
                'instagram'=> $instagram,
                'mapa'=> $mapa,
                'popup'=> $popup,
                'show_popup'=> $show_popup,
              ) ; 
        
      $data = $configuracion_controller->update($params) ;
        
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

      $configuracion_id = $inputs->configuracion_id;
      $estado = $inputs->estado;

      $params = array(
                'configuracion_id'=> $configuracion_id,
                'estado'=> $estado,
              ) ; 

      $configuracion_controller = new ConfiguracionController() ; 

      $data = $configuracion_controller->updateEstado( $params ) ;

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
      $configuracion_controller = new ConfiguracionController() ; 

      $data = $configuracion_controller->find( $id) ;

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

      $configuracion_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'configuracion_id'=> $configuracion_id,
                'estado'=> $estado,
              ) ; 

      $configuracion_controller = new ConfiguracionController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

				$configuracion = $configuracion_controller->find( $configuracion_id );

				$data = $configuracion_controller->deleteById( $configuracion_id );

				if( !empty($configuracion) && $data )
				{
					$imagen = $configuracion["imagen"] ; 
					UploadFiles::removeFile($imagen) ;
				}

			}
			else
			{
				$data = $configuracion_controller->updateEstado($params);
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
