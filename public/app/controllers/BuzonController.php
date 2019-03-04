<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class BuzonController
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
      $buzon  = new Buzon();

      $data = $buzon->getAll();

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
      $buzon  = new Buzon();
            
      $bean_buzon = new BeanBuzon();
            
      $bean_buzon->setEstado($estado);

      $data = $buzon->getByEstado($bean_buzon);

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

      $buzon  = new Buzon($this->cnx);

      $bean_buzon = new BeanBuzon();
            
      $bean_buzon->setNombres($nombres);
      $bean_buzon->setTelefono($telefono);
      $bean_buzon->setEmail($email);
      $bean_buzon->setMensaje($mensaje);
      $bean_buzon->setFecha($fecha);
            
      $data = $buzon->save($bean_buzon) ;

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

      $buzon  = new Buzon($this->cnx);
      $bean_buzon = new BeanBuzon();
            
      $bean_buzon->setId($id);
      $bean_buzon->setNombres($nombres);
      $bean_buzon->setTelefono($telefono);
      $bean_buzon->setEmail($email);
      $bean_buzon->setMensaje($mensaje);
      $bean_buzon->setFecha($fecha);

      $data = $buzon->update($bean_buzon) ;
            
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

      $buzon  = new Buzon($this->cnx);
            
      $bean_buzon = new BeanBuzon();
            
      $bean_buzon->setId($id);
      $bean_buzon->setEstado($estado);

      $data = $buzon->updateEstado($bean_buzon) ;
            
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
      $buzon  = new Buzon();

      $bean_buzon = new BeanBuzon();

      $bean_buzon->setId($id);

      $data = $buzon->find( $bean_buzon) ;
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

      $buzon  = new Buzon();

      $bean_buzon = new BeanBuzon();

      $bean_buzon->setId($id);

      $data = $buzon->deleteById( $bean_buzon ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
