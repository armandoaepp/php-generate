<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class SuscritorController
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
      $suscritor  = new Suscritor();

      $data = $suscritor->getAll();

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

      $suscritor  = new Suscritor();
            
      $bean_suscritor = new BeanSuscritor();
            
      $bean_suscritor->setEstado($estado);

      $data = $suscritor->getByEstado($bean_suscritor);

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

      $suscritor  = new Suscritor($this->cnx);

      $bean_suscritor = new BeanSuscritor();
            
      $bean_suscritor->setNombre($nombre);
      $bean_suscritor->setEmail($email);
      $bean_suscritor->setTelefono($telefono);
      $bean_suscritor->setEmpresa($empresa);
      $bean_suscritor->setMensaje($mensaje);
            
      $data = $suscritor->save($bean_suscritor) ;

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

      $suscritor  = new Suscritor($this->cnx);
      $bean_suscritor = new BeanSuscritor();
            
      $bean_suscritor->setSuscritorId($suscritor_id);
      $bean_suscritor->setNombre($nombre);
      $bean_suscritor->setEmail($email);
      $bean_suscritor->setTelefono($telefono);
      $bean_suscritor->setEmpresa($empresa);
      $bean_suscritor->setMensaje($mensaje);

      $data = $suscritor->update($bean_suscritor) ;
            
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

      $suscritor  = new Suscritor($this->cnx);
            
      $bean_suscritor = new BeanSuscritor();
            
      $bean_suscritor->setSuscritorId($suscritor_id);
      $bean_suscritor->setEstado($estado);

      $data = $suscritor->updateEstado($bean_suscritor) ;
            
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
      $suscritor  = new Suscritor();

      $bean_suscritor = new BeanSuscritor();

      $bean_suscritor->setSuscritorId($id);

      $data = $suscritor->find( $bean_suscritor) ;
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

      $suscritor  = new Suscritor();

      $bean_suscritor = new BeanSuscritor();

      $bean_suscritor->setSuscritorId($suscritor_id);

      $data = $suscritor->deleteById( $bean_suscritor ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
