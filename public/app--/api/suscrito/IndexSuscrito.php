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
      $suscrito_controller = new SuscritoController() ;

       $data = $suscrito_controller->getAll() ;

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

      $suscrito_controller = new SuscritoController($cnx) ;
      $connection->beginTransaction();

      $nombre  = "Armando Enrique Pisfil Puemape";
      $email   = "armanodaepp@gmail.com";
      $mensaje = "Mensaje de Prueba 123456";

      // $nombre  = $inputs->nombre;
      // $email   = $inputs->email;
      // $mensaje = $inputs->mensaje;

      $empresa = !empty($inputs->empresa) ? $inputs->empresa : '' ;
      $telefono = !empty($inputs->telefono) ? $inputs->telefono : '' ;

      $params = array(
          'nombre'   => $nombre,
          'email'    => $email,
          'telefono' => $telefono,
          'empresa'  => $empresa,
          'mensaje'  => $mensaje,
      );

      $data = $suscrito_controller->save($params) ;

      $connection->commit();

       # enviar correo
       sendMail($params);

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

      $suscrito_controller = new SuscritoController($cnx) ;
      $connection->beginTransaction();

      $id = $inputs->id;
      $nombre = $inputs->nombre;
      $email = $inputs->email;
      $telefono = $inputs->telefono;
      $empresa = $inputs->empresa;
      $mensaje = $inputs->mensaje;
      $created_up = $inputs->created_up;

      $params = array(
                'id'=> $id,
                'nombre'=> $nombre,
                'email'=> $email,
                'telefono'=> $telefono,
                'empresa'=> $empresa,
                'mensaje'=> $mensaje,
                'created_up'=> $created_up,
              ) ;

      $data = $suscrito_controller->update($params) ;

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

      $suscrito_controller = new SuscritoController() ;

      $data = $suscrito_controller->updateEstado( $params ) ;

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
      $suscrito_controller = new SuscritoController() ;

      $data = $suscrito_controller->find( $id) ;

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

      $suscrito_controller = new SuscritoController() ;


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

				$suscrito = $suscrito_controller->find($params);

				$data = $suscrito_controller->deleteById($params);

				if( !empty($suscrito) && $data )
				{
					$imagen = $suscrito["imagen"] ;
					UploadFiles::removeFile($img_bd) ;
				}

			}
			else
			{
				$data = $suscrito_controller->updateEstado($params);
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

function sendMail( $params  ){

  extract( $params);

  // $template_mail = RenderTemplate::getTemplate(APP.'views'.DS.'mails'.DS.'mail-contact') ;
  $template_mail = RenderTemplate::getTemplate(APP.'views/mails/mail-contact') ;


  $data = array(
    'nombre'  =>  $nombre,
    'email'  =>  $email,
    'mensaje'  =>  $mensaje,
  );

  $BODY_MSJ = RenderTemplate::render( $template_mail, $data) ;


  $header = "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html; charset=utf-8\r\n";
  $header .= "X-Priority: 3\n";
  $header .= "X-MSMail-Priority: Normal\n";
  $header .= "X-Mailer:PHP/".phpversion()."\n";
  $header .= "From: Escuela Cumbre <recepcion@escuelacumbre.edu.pe> \r\n";
  $header .= "Cc: marlon@catmedia.com.pe \r\n";
  $header .= "Bcc: armando@catmedia.com.pe \r\n";

  $to = "armandoaepp@gmail.com";
  mail($to,"Escuela Cumbre: Solcitud de información desde la web",utf8_decode($BODY_MSJ),$header);

}
