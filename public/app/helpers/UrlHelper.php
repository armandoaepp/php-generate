<?php
class UrlHelper {

  // function urls_amigables($url) {
  static public function urlFriendly($url) {


    // Tranformamos todo a minusculas
    $url = trim($url);


    //Rememplazamos caracteres especiales latinos

    $find = array("á","Á","é","É","í","Í","ó","Ó","ú","Ú","ñ","Ñ",);

    $repl = array("a","A","e","E","i","I","o","O","u","U","n","N",);

    $url = str_replace ($find, $repl, $url);

    $url = strtolower($url);

    // Añadimos los guiones

    $find = array(' ', '&', '\r\n', '\n', '+');
    $url = str_replace ($find, '-', $url);

    // Eliminamos y Reemplazamos otros carácteres especiales

    $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');

    $repl = array('', '-', '');

    $url = preg_replace ($find, $repl, $url);

    return $url;

  }

  // function urls_amigables($url) {
    static public function urlFriendlyInverse($url) {


      // Tranformamos todo a minusculas
      $url = trim($url);

      $url = str_replace('-', ' ', $url);

      return $url;

    }



}