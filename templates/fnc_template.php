<?php

function verificarItem($item){

  $item = strtolower( trim($item) ) ;

  $items = array('estado', 'created_up', 'imagen', 'url', 'publicar') ;

  if ( in_array($item, $items) )
  {
    return true ;
  }
  return false ;

}