<?php
class helperBd {

  public static function timestampsBd($timestamps = true)
  {
    $created_up  = null ;

    if($timestamps)
    {
      $created_up =  date('Y-m-d H:m:s');
    }

    $created_up = !empty($created_up) ? "'".$created_up."'" : "NULL" ;

    return $created_up;

  }

  public static function imagenDefault($imagen)
  {
    if(empty($imagen) )
    {
      $imagen = IMAGES_PATH."default.png" ;
    }

    return $imagen ;
  }

}