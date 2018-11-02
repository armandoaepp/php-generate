<?php

function itemsDefaultBeans($item)
{
 echo "item: ".$item;

  $item = strtolower( trim($item) ) ;

  $items =  array(
    'url'        => '""' ,
    'imagen'     => '""' ,
    'publicar'   => 'S' ,
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


echo "itemsDefaultBeans: " . itemsDefaultBeans('url') ;
