<?php

function templateUpdate($table, $aatri){

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

  $'. $aatri[0].' = !empty($_POST["id"]) ? $_POST["id"]: 0 ;
' . PHP_EOL;

// RECIBIER PROPIEDADES

for ($i = 1; $i < count($aatri); $i++)
{
    if ( !verificarItemViewSave($aatri[$i]) )
    {
            $html .= '  $' . $aatri[$i] . '   = $_POST["' . $aatri[$i] . '"] ;' . PHP_EOL;
    }
}


if ( in_array('imagen', $aatri) )
{
  $html .= '  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;' . PHP_EOL;
  $html .= '  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;' . PHP_EOL;
  $html .= '' . PHP_EOL;
  $html .= '  $imagen  = "";' . PHP_EOL;
  $html .= '  $imagen = UploadFiles::uploadFile($file_imagen, "'. $table .'") ;' . PHP_EOL;
  $html .= '' . PHP_EOL;
  $html .= '  if (empty($imagen) ) { '. PHP_EOL ;
  $html .= '    $imagen = $img_bd ; '. PHP_EOL ;
  $html .= '  } '. PHP_EOL ;
  $html .= '' . PHP_EOL;
}

if ( in_array('url', $aatri) )
{
  $html .= '  $url = UrlHelper::urlFriendly($'. $aatri[1].'); ' . PHP_EOL;
  $html .= '' . PHP_EOL;
}

//START ARRAY

$html .= '  $params = array(' . PHP_EOL;
for ($i = 0; $i < count($aatri); $i++)
{
    if ( !verificarItemViewSave($aatri[$i]) )
    {
      $html .= '    "' . $aatri[$i] . '"   => $' . $aatri[$i] . ',' . PHP_EOL;
  }
}

if ( in_array('imagen', $aatri) )
{
  $html .= '    "imagen"  => $imagen,' . PHP_EOL;
}

if ( in_array('url', $aatri) )
{
  $html .= '    "url"  => $url,' . PHP_EOL;
}
$html .= '  );' . PHP_EOL;
$html .= '' . PHP_EOL;
//END ARRAY


$html .= '
  $response = $'. $table .'_controller->update($params);

  if($response){

    if( $imagen == $img_bd ){
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./' . $table . '.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
';

  return $html ;
}

