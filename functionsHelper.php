<?php


function toCamelCase($string) {

    $value = ucwords($string, "_");
    $value = str_replace('_', '', $value);
    return $value ;
}

function toUrlFriendly($string, $str_re = "_") {
    $value = str_replace($str_re, '-', $string);
    return $value ;
}



// copy_directory('/directory1','/public/directory1')

function copy_directory($src,$dst) {
    $dir = opendir($src);
    @mkdir($dst);
    while(false !== ( $file = readdir($dir)) ) {
        if (( $file != '.' ) && ( $file != '..' )) {
            if ( is_dir($src . '/' . $file) ) {
                recurse_copy($src . '/' . $file,$dst . '/' . $file);
            }
            else {
                copy($src . '/' . $file,$dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

function full_copy( $source, $target ) {
    if ( is_dir( $source ) ) {
        @mkdir( $target );
        $d = dir( $source );
        while ( FALSE !== ( $entry = $d->read() ) ) {
            if ( $entry == '.' || $entry == '..' ) {
                continue;
            }
            $Entry = $source . '/' . $entry;
            if ( is_dir( $Entry ) ) {
                full_copy( $Entry, $target . '/' . $entry );
                continue;
            }
            copy( $Entry, $target . '/' . $entry );
        }

        $d->close();
    }else {
        copy( $source, $target );
    }
}

function generatePrefixTable($table_name)
{
  $table_name = trim($table_name);
  $porciones = explode("_", $table_name);
  //  var_dump($porciones);

  $prefix = "" ;
  if (count($porciones) > 1)
  {
    for ($i=0; $i < count($porciones) ; $i++)
    {
      $prefix .= substr( $porciones[$i] , 0, 1);
      // echo $prefix."<br>";
    }
  }
  else
  {
    $prefix .= substr( $table_name , 0, 3);
  }


  return $prefix ;

}

function revemoPrefix($string, $prefix)
{
  $string = trim($string);

  if ( empty($prefix) ) return $string ;

  $pos = strpos($string, $prefix);
  $str = "";

  if ($pos === false)
  {
    $str = $string ;
  }
  else
  {
    $str = substr( $string , strlen($prefix));
    // echo str_replace($prefix, "truth", $my_str);
  }
  return $str ;
}