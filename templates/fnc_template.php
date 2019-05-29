<?php

function verificarItem($item){

  $item = strtolower( trim($item) ) ;

  $items = array('estado', 'created_at', 'imagen', 'url', 'publicar') ;

  if ( in_array($item, $items) )
  {
    return true ;
  }
  return false ;

}

function verificarItemViewSave($item){

  $item = strtolower( trim($item) ) ;

  $items = array('estado', 'created_at', 'imagen', 'url') ;

  if ( in_array($item, $items) )
  {
    return true ;
  }
  return false ;

}


function itemsDefaultBeans($item)
{
  $item = strtolower( trim($item) ) ;

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


function itemsNotUpdateMetodo($item){

  $item = strtolower( trim($item) ) ;

  $items = array('estado','created_at') ;

  if ( in_array($item, $items) )
  {
    return true ;
  }
  return false ;

}

function itemsNotSetController($item){

  $item = strtolower( trim($item) ) ;

  $items = array('estado', 'created_at') ;

  if ( in_array($item, $items) )
  {
    return true ;
  }
  return false ;

}

function itemsNotListTable($item){

  $item = strtolower( trim($item) ) ;

  $items = array('estado', 'created_at', 'imagen', 'publicar') ;

  if ( in_array($item, $items) )
  {
    return true ;
  }
  return false ;

}