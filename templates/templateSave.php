<?php

function templateSave($table, $atributos, $arraycabeza = array() ){

  $cmTable = toCamelCase($table) ;
  // $url = toUrlFriendly($table) ;

$html = '';
$html .= '
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/' . $table . '/' . $table . '.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $'. $table.'_controller = new '. $cmTable.'Controller();
' . PHP_EOL;

// RECIBIER PROPIEDADES

for ($i = 1; $i < count($atributos); $i++)
{
    if ( !verificarItemViewSave($atributos[$i]) )
    {
            $html .= '  $' . $atributos[$i] . '   = $_POST["' . $atributos[$i] . '"] ;' . PHP_EOL;
    }
}


if ( in_array('imagen', $atributos) )
{
  $html .= '  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;' . PHP_EOL;
  $html .= '' . PHP_EOL;
  $html .= '  $imagen  = "";' . PHP_EOL;
  $html .= '  $imagen = UploadFiles::uploadFile($file_imagen, "'. $table .'") ;' . PHP_EOL;
  $html .= '' . PHP_EOL;
}

if ( in_array('url', $atributos) )
{
  $html .= '  $url = UrlHelper::urlFriendly($'. $atributos[1].'); ' . PHP_EOL;
  $html .= '' . PHP_EOL;
}

//START ARRAY

$html .= '  $params = array(' . PHP_EOL;
for ($i = 1; $i < count($atributos); $i++)
{
  if ( !verificarItemViewSave($atributos[$i]) )
  {
    $html .= '    "' . $atributos[$i] . '"   => $' . $atributos[$i] . ',' . PHP_EOL;
  }
}

if ( in_array('imagen', $atributos) )
{
  $html .= '    "imagen"  => $imagen,' . PHP_EOL;
}

if ( in_array('url', $atributos) )
{
  $html .= '    "url"  => $url,' . PHP_EOL;
}
$html .= '  );' . PHP_EOL;
$html .= '' . PHP_EOL;
//END ARRAY


$html .= '
  $response = $'. $table .'_controller->save($params);

  if($response){
    header("Location: ./' . $table . '.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
';

  return $html ;
}

