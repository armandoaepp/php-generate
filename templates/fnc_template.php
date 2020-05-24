<?php

function verificarItem($item, $prefix = ""){

  $item = strtolower( trim($item) ) ;

  if(!empty($prefix))
  {
    $item = revemoPrefix($item, $prefix)  ;
  }

  $items = array('estado', 'created_at', 'imagen', 'url', 'publicar') ;

  if ( in_array($item, $items) )
  {
    return true ;
  }
  return false ;

}

function verificarItemViewSave($item, $prefix = ""){

  $item = strtolower( trim($item) ) ;

  if(!empty($prefix))
  {
    $item = revemoPrefix($item, $prefix)  ;
  }

  $items = array('estado', 'created_at', 'imagen', 'url') ;

  if ( in_array($item, $items) )
  {
    return true ;
  }
  return false ;

}


function itemsDefaultBeans($item, $prefix = ""){

  $item = strtolower( trim($item) ) ;

  if(!empty($prefix))
  {
    $item = revemoPrefix($item, $prefix)  ;
  }

  $items =  array(
    'url'        => '""' ,
    'imagen'     => '""' ,
    'publicar'   => '"S"' ,
    'estado'     => 1,
    'created_at' => 'NULL',
  );

  if ( array_key_exists($item , $items) ) {
    return $items[$item] ;
  }
  else {
    return false ;
  }
}


function itemsNotUpdateMetodo($item, $prefix = ""){

  $item = strtolower( trim($item) ) ;

  if(!empty($prefix))
  {
    $item = revemoPrefix($item, $prefix)  ;
  }

  $items = array('estado','created_at') ;

  if ( in_array($item, $items) )
  {
    return true ;
  }
  return false ;

}

function itemsNotSetController($item, $prefix = ""){

  $item = strtolower( trim($item) ) ;

  if(!empty($prefix))
  {
    $item = revemoPrefix($item, $prefix)  ;
  }

  $items = array('estado', 'created_at') ;

  if ( in_array($item, $items) )
  {
    return true ;
  }
  return false ;

}

function itemsNotListTable($item, $prefix = ""){

  $item = strtolower( trim($item) ) ;

  if(!empty($prefix))
  {
    $item = revemoPrefix($item, $prefix)  ;
  }

  $items = array('estado', 'created_at', 'imagen', 'publicar') ;

  if ( in_array($item, $items) )
  {
    return true ;
  }
  return false ;

}