<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class TipoEmpresaController
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
      $tipo_empresa  = new TipoEmpresa();

      $data = $tipo_empresa->getAll();

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

      $tipo_empresa  = new TipoEmpresa();
            
      $bean_tipo_empresa = new BeanTipoEmpresa();
            
      $bean_tipo_empresa->setEstado($estado);

      $data = $tipo_empresa->getByEstado($bean_tipo_empresa);

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

      $tipo_empresa  = new TipoEmpresa($this->cnx);

      $bean_tipo_empresa = new BeanTipoEmpresa();
            
      $bean_tipo_empresa->setDescripcion($descripcion);
      $bean_tipo_empresa->setGlosa($glosa);
            
      $data = $tipo_empresa->save($bean_tipo_empresa) ;

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

      $tipo_empresa  = new TipoEmpresa($this->cnx);
      $bean_tipo_empresa = new BeanTipoEmpresa();
            
      $bean_tipo_empresa->setTipoEmpresaId($tipo_empresa_id);
      $bean_tipo_empresa->setDescripcion($descripcion);
      $bean_tipo_empresa->setGlosa($glosa);

      $data = $tipo_empresa->update($bean_tipo_empresa) ;
            
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

      $tipo_empresa  = new TipoEmpresa($this->cnx);
            
      $bean_tipo_empresa = new BeanTipoEmpresa();
            
      $bean_tipo_empresa->setTipoEmpresaId($tipo_empresa_id);
      $bean_tipo_empresa->setEstado($estado);

      $data = $tipo_empresa->updateEstado($bean_tipo_empresa) ;
            
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
      $tipo_empresa  = new TipoEmpresa();

      $bean_tipo_empresa = new BeanTipoEmpresa();

      $bean_tipo_empresa->setTipoEmpresaId($id);

      $data = $tipo_empresa->find( $bean_tipo_empresa) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($tipo_empresa_id)
  {
    try
    {

      $tipo_empresa  = new TipoEmpresa();

      $bean_tipo_empresa = new BeanTipoEmpresa();

      $bean_tipo_empresa->setTipoEmpresaId($tipo_empresa_id);

      $data = $tipo_empresa->deleteById( $bean_tipo_empresa ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
