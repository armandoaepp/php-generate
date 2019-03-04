<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class SuscritoController
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
      $suscrito  = new Suscrito();

      $data = $suscrito->getAll();

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByEstado( $params = array() )
  {
    try
    {
            
      extract($params) ; 

      $suscrito  = new Suscrito();
            
      $bean_suscrito = new BeanSuscrito();
            
      $bean_suscrito->setEstado($estado);

      $data = $suscrito->getByEstado($bean_suscrito);

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

      $suscrito  = new Suscrito($this->cnx);

      $bean_suscrito = new BeanSuscrito();
            
      $bean_suscrito->setNombre($nombre);
      $bean_suscrito->setAsunto($asunto);
      $bean_suscrito->setEmail($email);
      $bean_suscrito->setTelefono($telefono);
      $bean_suscrito->setEmpresa($empresa);
      $bean_suscrito->setMensaje($mensaje);
            
      $data = $suscrito->save($bean_suscrito) ;

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

      $suscrito  = new Suscrito($this->cnx);
      $bean_suscrito = new BeanSuscrito();
            
      $bean_suscrito->setId($id);
      $bean_suscrito->setNombre($nombre);
      $bean_suscrito->setAsunto($asunto);
      $bean_suscrito->setEmail($email);
      $bean_suscrito->setTelefono($telefono);
      $bean_suscrito->setEmpresa($empresa);
      $bean_suscrito->setMensaje($mensaje);

      $data = $suscrito->update($bean_suscrito) ;
            
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

      $suscrito  = new Suscrito($this->cnx);
            
      $bean_suscrito = new BeanSuscrito();
            
      $bean_suscrito->setId($id);
      $bean_suscrito->setEstado($estado);

      $data = $suscrito->updateEstado($bean_suscrito) ;
            
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
      $suscrito  = new Suscrito();

      $bean_suscrito = new BeanSuscrito();

      $bean_suscrito->setId($id);

      $data = $suscrito->find( $bean_suscrito) ;
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

      $suscrito  = new Suscrito();

      $bean_suscrito = new BeanSuscrito();

      $bean_suscrito->setId($id);

      $data = $suscrito->deleteById( $bean_suscrito ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
