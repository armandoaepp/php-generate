<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class AdicionalController
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
      $adicional  = new Adicional();

      $data = $adicional->getAll();

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

      $adicional  = new Adicional();
            
      $bean_adicional = new BeanAdicional();
            
      $bean_adicional->setEstado($estado);

      $data = $adicional->getByEstado($bean_adicional);

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

      $adicional  = new Adicional($this->cnx);

      $bean_adicional = new BeanAdicional();
            
      $bean_adicional->setDescripcion($descripcion);
      $bean_adicional->setPrecio($precio);
            
      $data = $adicional->save($bean_adicional) ;

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

      $adicional  = new Adicional($this->cnx);
      $bean_adicional = new BeanAdicional();
            
      $bean_adicional->setAdicionalId($adicional_id);
      $bean_adicional->setDescripcion($descripcion);
      $bean_adicional->setPrecio($precio);

      $data = $adicional->update($bean_adicional) ;
            
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

      $adicional  = new Adicional($this->cnx);
            
      $bean_adicional = new BeanAdicional();
            
      $bean_adicional->setAdicionalId($adicional_id);
      $bean_adicional->setEstado($estado);

      $data = $adicional->updateEstado($bean_adicional) ;
            
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
      $adicional  = new Adicional();

      $bean_adicional = new BeanAdicional();

      $bean_adicional->setAdicionalId($id);

      $data = $adicional->find( $bean_adicional) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($adicional_id)
  {
    try
    {

      $adicional  = new Adicional();

      $bean_adicional = new BeanAdicional();

      $bean_adicional->setAdicionalId($adicional_id);

      $data = $adicional->deleteById( $bean_adicional ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
