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

function verificarItemViewSave($item){

  $item = strtolower( trim($item) ) ;

  $items = array('estado', 'created_up', 'imagen', 'url') ;

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
    'created_up' => 'NULL',
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

  $items = array('estado','created_up') ;

  if ( in_array($item, $items) )
  {
    return true ;
  }
  return false ;

}

function itemsNotSetController($item){

  $item = strtolower( trim($item) ) ;

  $items = array('estado', 'created_up') ;

  if ( in_array($item, $items) )
  {
    return true ;
  }
  return false ;

}