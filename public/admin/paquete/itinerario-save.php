
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/paquete/paquete.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $itinerario_controller = new ItinerarioController();

  $itinerario_id = $_POST['itinerario_id'];
  $titulo        = $_POST['titulo'];
  $descripcion   = $_POST['descripcion'];

  $mensaje = "";

  if ( count($itinerario_id) > 0)
  {

      for ($i = 0; $i < count($itinerario_id); $i++)
      {
        $params = array(
                    'id'          => !empty($itinerario_id[$i])? $itinerario_id[$i]: 0,
                    'titulo'      => !empty($titulo[$i])? $titulo[$i]              : "",
                    'descripcion' => !empty($descripcion[$i])? $descripcion[$i]    : "",
                  );

        $itinerario_controller->updateItinerario($params);

          // echo $itinerario_id[$i] ."<br>";
      }

      $mensaje = "ok";

  } else {
      $mensaje = "¡El Registro No exite!";
  }


  if($mensaje == 'ok'){
    header("Location: ./paquete.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Registrar" ;
  }
