<?php

function templateUpdate($table, $atributos, $arraycabeza = array() ){

  $cmTable = toCamelCase($table) ;
  $table_url = toUrlFriendly($table) ;

$html = '';
$html .= '
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/' . $table_url . '/' . $table_url . '.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $'. $table.'_controller = new '. $cmTable.'Controller();

  $'. $atributos[0].' = !empty($_POST["id"]) ? $_POST["id"]: 0 ;
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
  $html .= '  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;' . PHP_EOL;
  $html .= '  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;' . PHP_EOL;
  $html .= '' . PHP_EOL;
  $html .= '  $imagen  = "";' . PHP_EOL;
  $html .= '  $imagen = UploadFiles::uploadFile($file_imagen, "'. $table_url .'") ;' . PHP_EOL;
  $html .= '' . PHP_EOL;
  $html .= '  if (empty($imagen) ) { '. PHP_EOL ;
  $html .= '    $imagen = $img_bd ; '. PHP_EOL ;
  $html .= '  } '. PHP_EOL ;
  $html .= '' . PHP_EOL;
}

if ( in_array('url', $atributos) )
{
  $html .= '  $url = UrlHelper::urlFriendly($'. $atributos[1].'); ' . PHP_EOL;
  $html .= '' . PHP_EOL;
}

//START ARRAY

$html .= '  $params = array(' . PHP_EOL;
for ($i = 0; $i < count($atributos); $i++)
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
  $response = $'. $table .'_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./' . $table_url . '.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
';

  return $html ;
}

