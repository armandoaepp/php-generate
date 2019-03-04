<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class MensajeController
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
      $mensaje  = new Mensaje();

      $data = $mensaje->getAll();

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByEstado()
  {
    try
    {
      $mensaje  = new Mensaje();
            
      $bean_mensaje = new BeanMensaje();
            
      $bean_mensaje->setEstado($estado);

      $data = $mensaje->getByEstado($bean_mensaje);

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

      $mensaje  = new Mensaje($this->cnx);

      $bean_mensaje = new BeanMensaje();
            
      $bean_mensaje->setTitulo($titulo);
      $bean_mensaje->setImagen($imagen);
      $bean_mensaje->setDescripcion($descripcion);
      $bean_mensaje->setDescripcion2($descripcion_2);
      $bean_mensaje->setSlogan($slogan);
      $bean_mensaje->setMision($mision);
      $bean_mensaje->setVision($vision);
      $bean_mensaje->setOrden($orden);
      $bean_mensaje->setFecha($fecha);
            
      $data = $mensaje->save($bean_mensaje) ;

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

      $mensaje  = new Mensaje($this->cnx);
      $bean_mensaje = new BeanMensaje();
            
      $bean_mensaje->setId($id);
      $bean_mensaje->setTitulo($titulo);
      $bean_mensaje->setImagen($imagen);
      $bean_mensaje->setDescripcion($descripcion);
      $bean_mensaje->setDescripcion2($descripcion_2);
      $bean_mensaje->setSlogan($slogan);
      $bean_mensaje->setMision($mision);
      $bean_mensaje->setVision($vision);
      $bean_mensaje->setOrden($orden);
      $bean_mensaje->setFecha($fecha);

      $data = $mensaje->update($bean_mensaje) ;
            
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

      $mensaje  = new Mensaje($this->cnx);
            
      $bean_mensaje = new BeanMensaje();
            
      $bean_mensaje->setId($id);
      $bean_mensaje->setEstado($estado);

      $data = $mensaje->updateEstado($bean_mensaje) ;
            
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
      $mensaje  = new Mensaje();

      $bean_mensaje = new BeanMensaje();

      $bean_mensaje->setId($id);

      $data = $mensaje->find( $bean_mensaje) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($id)
  {
    try
    {

      $mensaje  = new Mensaje();

      $bean_mensaje = new BeanMensaje();

      $bean_mensaje->setId($id);

      $data = $mensaje->deleteById( $bean_mensaje ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
