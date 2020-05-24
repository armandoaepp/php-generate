<!DOCTYPE html>
<html lang="es">

<head>
  <?php
$setvar = array(
  "titulo" => "Padron de Registro",
  "follow" => "",
  "description" => "",
  "keywords" => "",
  "active" => [1, 0],
);

require_once "templates/head_links.phtml";

?>

  <?php
require_once './app/autoload.php';

//  tipo de vivienda
$tipo_vivienda_controller = new TipoViviendaController();

$params_tipo = array(
  'estado' => 1
) ;

$tipo_viviendas = $tipo_vivienda_controller->getByEstado($params_tipo);

// var_dump($tipo_viviendas);

//  tipo de vivienda
$ubigeo_controller = new UbigeoController();

$params_ubigeo = array(
  'tipo' => 5,
  'ubigeo_id_padre' => 2097,
) ;

$sectores = $ubigeo_controller->getUbigeoIdPadreAndTipo($params_ubigeo);

$title_page = "Padron" ;

?>

</head>

<body>
<style>
  .header {
    background-color: #bf0909;
  }
</style>

  <?php require_once "templates/header.phtml";?>


  <?php require_once "templates/footer.phtml";?>
  <?php require_once "templates/foot_links.phtml";?>


</body>

</html>