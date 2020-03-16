<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class SuscriptorController
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
      $suscriptor  = new Suscriptor();

      $data = $suscriptor->getAll();

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

      $suscriptor  = new Suscriptor();
            
      $bean_suscriptor = new BeanSuscriptor();
            
      $bean_suscriptor->setEstado($estado);

      $data = $suscriptor->getByEstado($bean_suscriptor);

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

      $suscriptor  = new Suscriptor($this->cnx);

      $bean_suscriptor = new BeanSuscriptor();
            
      $bean_suscriptor->setNombre($nombre);
      $bean_suscriptor->setEmail($email);
      $bean_suscriptor->setTelefono($telefono);
      $bean_suscriptor->setEmpresa($empresa);
      $bean_suscriptor->setMensaje($mensaje);
            
      $data = $suscriptor->save($bean_suscriptor) ;

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

      $suscriptor  = new Suscriptor($this->cnx);
      $bean_suscriptor = new BeanSuscriptor();
            
      $bean_suscriptor->setSuscritorId($suscritor_id);
      $bean_suscriptor->setNombre($nombre);
      $bean_suscriptor->setEmail($email);
      $bean_suscriptor->setTelefono($telefono);
      $bean_suscriptor->setEmpresa($empresa);
      $bean_suscriptor->setMensaje($mensaje);

      $data = $suscriptor->update($bean_suscriptor) ;
            
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

      $suscriptor  = new Suscriptor($this->cnx);
            
      $bean_suscriptor = new BeanSuscriptor();
            
      $bean_suscriptor->setSuscritorId($suscritor_id);
      $bean_suscriptor->setEstado($estado);

      $data = $suscriptor->updateEstado($bean_suscriptor) ;
            
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
      $suscriptor  = new Suscriptor();

      $bean_suscriptor = new BeanSuscriptor();

      $bean_suscriptor->setSuscritorId($id);

      $data = $suscriptor->find( $bean_suscriptor) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($suscritor_id)
  {
    try
    {

      $suscriptor  = new Suscriptor();

      $bean_suscriptor = new BeanSuscriptor();

      $bean_suscriptor->setSuscritorId($suscritor_id);

      $data = $suscriptor->deleteById( $bean_suscriptor ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
