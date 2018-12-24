<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class EventoController
{
  private $cnx;

  public function __construct($cnx = null)
  {
    $this->cnx = $cnx;
  }
    
  public function getAll()
  {
    try
    {
      $evento  = new Evento();

      $data = $evento->getAll();
      $data = Serialize::unSerializeArray($data);
        

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function save($params = array() )
  {
    try
    {
            
      extract($params) ; 

      $evento  = new Evento($this->cnx);

      $bean_evento = new BeanEvento();
            
      $bean_evento->setTitulo($titulo);
      $bean_evento->setDescripcion($descripcion);
      $bean_evento->setImagen($imagen);
      $bean_evento->setNombreseo($nombreseo);
      $bean_evento->setOrden($orden);
      $bean_evento->setFecha($fecha);
            
      $data = $evento->save($bean_evento) ;

      return $data ;
    }
    catch (Exception $e)
    {
        throw new Exception($e->getMessage());
    }
  }

  public function update($params = array())
  {
    try
    {
            
      extract($params) ; 

      $evento  = new Evento($this->cnx);
      $bean_evento = new BeanEvento();
            
      $bean_evento->setId($id);
      $bean_evento->setTitulo($titulo);
      $bean_evento->setDescripcion($descripcion);
      $bean_evento->setImagen($imagen);
      $bean_evento->setNombreseo($nombreseo);
      $bean_evento->setOrden($orden);
      $bean_evento->setFecha($fecha);

      $data = $evento->update($bean_evento) ;
            
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function updateEstado($params = array())
  {
    try
    {
            
      extract($params) ; 

      $evento  = new Evento($this->cnx);
      $bean_evento = new BeanEvento();
            
      $bean_evento->setId($id);
      $bean_evento->setEstado($estado);

      $data = $evento->updateEstado($bean_evento) ;
            
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function find($id)
  {
    try
    {
      $evento  = new Evento();

      $bean_evento = new BeanEvento();

      $bean_evento->setId($id);

      $data = $evento->find( $bean_evento) ;
      $data = Serialize::unSerializeArray($data);
        

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($params)
  {
    try
    {

      extract($params) ;

      $evento  = new Evento();

      $bean_evento = new BeanEvento();

      $bean_evento->setId($id);

      $data = $evento->deleteById( $bean_evento ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
