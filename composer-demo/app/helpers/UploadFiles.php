<?php

class UploadFiles {

  //  static public function uploadFile($file, $path_url_img = 'img_admin', $path_root = '../../')
   //  static public function uploadFile($file, $path_url_img = 'img_admin', $path_root = '../../')
  static public function uploadFile(&$file, $path_relative = '')
  {

    #Verify directory name
    if (!file_exists(IMAGES)) {
      mkdir(IMAGES, 0777);
    }

    if ( !file_exists(IMAGES . $path_relative) ) {
      mkdir(IMAGES . $path_relative, 0777);
    }

    $imagen_url      = '';

    if (!empty($file['name']))
    {
      $name = $file['name'] ;
      # extension file
        $info = new SplFileInfo($name);
        $extension = $info->getExtension();

      # new name and url imgen
        $new_name = date('YmdHms',time()).mt_rand() .".{$extension}" ;

        if(!empty($path_relative)) {
          $imagen_url = "{$path_relative}/{$new_name}" ;
        }
        else{
          $imagen_url = "{$new_name}" ;
        }

        $imagen_url = IMAGES_DIR. DS."{$imagen_url}" ;

      # ruta destino(donde se movera el archivo )
        $ruta_destino = IMAGES.'/../'."{$imagen_url}";
        // echo $ruta_destino ;

        // echo $ruta_destino ;
        $file_ok = move_uploaded_file($file['tmp_name'], $ruta_destino);

      $imagen_url = $imagen_url ;

    }elseif ($file["error"] > 0)
    {
      // echo "Error: " . $file['error'] . "<br>";
      $imagen_url = "";
    }

    return $imagen_url ;

  }

  /** Upload multiples files
   * [files_arry] : array files
   * path_url_img : folder upload files
   * path_root : path root where moved files
  */
  //  static public function uploadMultiFiles(&$files_arry, $path_url_img = 'img_admin/',$path_root = '../../')
  static public function uploadMultiFiles(&$files_arry, $path_relative = '')
  {
    $imagenes =  [];

    if(!empty($files_arry))
    {
        $img_desc = reArrayFiles($files_arry);
        // print_r($img_desc);

        foreach($img_desc as $file)
        {
          if (!empty($file['name']))
          {
            $name = $file['name'] ;
            # extension file
              $info = new SplFileInfo($name);
              $extension = $info->getExtension();

            # new name and url imgen
              $new_name = date('YmdHms',time()).mt_rand() .".{$extension}" ;

              if(!empty($path_relative)) {
                $imagen_url = "{$path_relative}/{$new_name}" ;
              }
              else{
                $imagen_url = "{$new_name}" ;
              }

              $imagen_url = IMAGES_DIR."/{$imagen_url}" ;

            # ruta destino(donde se movera el archivo )
              $ruta_destino = IMAGES.'/../'."{$imagen_url}";

            # ruta destino(donde se movera el archivo )
              $file_ok = move_uploaded_file($file['tmp_name'], $ruta_destino);

            $imagenes[] = $imagen_url ;

          }elseif ($file["error"] > 0)
          {
            echo "Error: " . $file['error'] . "<br>";
            $imagenes[] = '';
          }

        }
        return $imagenes ;
    }
  }

   static public function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
  }

  static public function removeFile($path_file)
  {
    $path_file = IMAGES . '../' . $path_file ;

    echo "path_file : ".$path_file ."\n" ;

    $unlink =  false ;
    if(!empty($path_file))
    {
      if(is_file($path_file))
      {
        $unlink =   unlink($path_file );
      }
    }
    return $unlink ;

  }

  public function isFolderExist($folder)
  {

    if(empty($folder)) return ;

    $folder_path =  IMAGES . '../' .  $folder ;

    if(!file_exists($folder_path))
    {
      mkdir($folder_path,0777);
    }

  }

  public static function imagenDefault($imagen)
  {
    if(empty($imagen) )
    {
      $imagen = IMAGES_FOLDER."/default.png" ;
    }

    return $imagen ;
  }


}