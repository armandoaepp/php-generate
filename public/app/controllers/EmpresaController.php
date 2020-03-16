<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class EmpresaController
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
      $empresa  = new Empresa();

      $data = $empresa->getAll();

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

      $empresa  = new Empresa();
            
      $bean_empresa = new BeanEmpresa();
            
      $bean_empresa->setEstado($estado);

      $data = $empresa->getByEstado($bean_empresa);

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

      $empresa  = new Empresa($this->cnx);

      $bean_empresa = new BeanEmpresa();
            
      $bean_empresa->setRuc($ruc);
      $bean_empresa->setNombre($nombre);
            
      $data = $empresa->save($bean_empresa) ;

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

      $empresa  = new Empresa($this->cnx);
      $bean_empresa = new BeanEmpresa();
            
      $bean_empresa->setEmpresaId($empresa_id);
      $bean_empresa->setRuc($ruc);
      $bean_empresa->setNombre($nombre);

      $data = $empresa->update($bean_empresa) ;
            
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

      $empresa  = new Empresa($this->cnx);
            
      $bean_empresa = new BeanEmpresa();
            
      $bean_empresa->setEmpresaId($empresa_id);
      $bean_empresa->setEstado($estado);

      $data = $empresa->updateEstado($bean_empresa) ;
            
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
      $empresa  = new Empresa();

      $bean_empresa = new BeanEmpresa();

      $bean_empresa->setEmpresaId($id);

      $data = $empresa->find( $bean_empresa) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($empresa_id)
  {
    try
    {

      $empresa  = new Empresa();

      $bean_empresa = new BeanEmpresa();

      $bean_empresa->setEmpresaId($empresa_id);

      $data = $empresa->deleteById( $bean_empresa ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
