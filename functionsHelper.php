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