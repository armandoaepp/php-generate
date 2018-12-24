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
      $taller_controller = new TallerController() ; 

       $data = $taller_controller->getAll() ;

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
        
      $taller_controller = new TallerController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $titulo = $inputs->titulo;
      $descripcion = $inputs->descripcion;
      $slide = $inputs->slide;
      $imagen = $inputs->imagen;
      $certificacion = $inputs->certificacion;
      $titulos = $inputs->titulos;
      $inversion = $inputs->inversion;
      $titulacion = $inputs->titulacion;
      $detalleduracion = $inputs->detalleduracion;
      $detalledia = $inputs->detalledia;
      $detallehorario = $inputs->detallehorario;
      $detallelugar = $inputs->detallelugar;
      $detalleprecio = $inputs->detalleprecio;
      $detalleequipos = $inputs->detalleequipos;
      $detalleconsultas = $inputs->detalleconsultas;
      $detalledirigido = $inputs->detalledirigido;
      $aquien = $inputs->aquien;
      $temas = $inputs->temas;
      $nombreseo = $inputs->nombreseo;
      $orden = $inputs->orden;
      $fecha = $inputs->fecha;
        
      $params = array(
                'id'=> $id,
                'titulo'=> $titulo,
                'descripcion'=> $descripcion,
                'slide'=> $slide,
                'imagen'=> $imagen,
                'certificacion'=> $certificacion,
                'titulos'=> $titulos,
                'inversion'=> $inversion,
                'titulacion'=> $titulacion,
                'detalleduracion'=> $detalleduracion,
                'detalledia'=> $detalledia,
                'detallehorario'=> $detallehorario,
                'detallelugar'=> $detallelugar,
                'detalleprecio'=> $detalleprecio,
                'detalleequipos'=> $detalleequipos,
                'detalleconsultas'=> $detalleconsultas,
                'detalledirigido'=> $detalledirigido,
                'aquien'=> $aquien,
                'temas'=> $temas,
                'nombreseo'=> $nombreseo,
                'orden'=> $orden,
                'fecha'=> $fecha,
              ) ; 
        
      $data = $taller_controller->save($params) ;

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
        
      $taller_controller = new TallerController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $titulo = $inputs->titulo;
      $descripcion = $inputs->descripcion;
      $slide = $inputs->slide;
      $imagen = $inputs->imagen;
      $certificacion = $inputs->certificacion;
      $titulos = $inputs->titulos;
      $inversion = $inputs->inversion;
      $titulacion = $inputs->titulacion;
      $detalleduracion = $inputs->detalleduracion;
      $detalledia = $inputs->detalledia;
      $detallehorario = $inputs->detallehorario;
      $detallelugar = $inputs->detallelugar;
      $detalleprecio = $inputs->detalleprecio;
      $detalleequipos = $inputs->detalleequipos;
      $detalleconsultas = $inputs->detalleconsultas;
      $detalledirigido = $inputs->detalledirigido;
      $aquien = $inputs->aquien;
      $temas = $inputs->temas;
      $nombreseo = $inputs->nombreseo;
      $orden = $inputs->orden;
      $fecha = $inputs->fecha;
        
      $params = array(
                'id'=> $id,
                'titulo'=> $titulo,
                'descripcion'=> $descripcion,
                'slide'=> $slide,
                'imagen'=> $imagen,
                'certificacion'=> $certificacion,
                'titulos'=> $titulos,
                'inversion'=> $inversion,
                'titulacion'=> $titulacion,
                'detalleduracion'=> $detalleduracion,
                'detalledia'=> $detalledia,
                'detallehorario'=> $detallehorario,
                'detallelugar'=> $detallelugar,
                'detalleprecio'=> $detalleprecio,
                'detalleequipos'=> $detalleequipos,
                'detalleconsultas'=> $detalleconsultas,
                'detalledirigido'=> $detalledirigido,
                'aquien'=> $aquien,
                'temas'=> $temas,
                'nombreseo'=> $nombreseo,
                'orden'=> $orden,
                'fecha'=> $fecha,
              ) ; 
        
      $data = $taller_controller->update($params) ;

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

      $taller_controller = new TallerController() ; 

      $data = $taller_controller->updateEstado( $params ) ;

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
      $taller_controller = new TallerController() ; 

      $data = $taller_controller->find( $id) ;

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

      $taller_controller = new TallerController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

				$taller = $taller_controller->find($params);

				$data = $taller_controller->deleteById($params);

				if( !empty($taller) && $data )
				{
					$imagen = $taller["imagen"] ;
					UploadFiles::removeFile($img_bd) ;
				}

			}
			else
			{
				$data = $taller_controller->updateEstado($params);
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
