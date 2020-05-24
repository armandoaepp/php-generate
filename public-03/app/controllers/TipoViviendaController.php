<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class TipoViviendaController
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
      $tipo_vivienda  = new TipoVivienda();

      $data = $tipo_vivienda->getAll();

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

      $tipo_vivienda  = new TipoVivienda();
            
      $bean_tipo_vivienda = new BeanTipoVivienda();
            
      $bean_tipo_vivienda->setEstado($estado);

      $data = $tipo_vivienda->getByEstado($bean_tipo_vivienda);

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

      $tipo_vivienda  = new TipoVivienda($this->cnx);

      $bean_tipo_vivienda = new BeanTipoVivienda();
            
      $bean_tipo_vivienda->setDescVivienda($desc_vivienda);
            
      $data = $tipo_vivienda->save($bean_tipo_vivienda) ;

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

      $tipo_vivienda  = new TipoVivienda($this->cnx);
      $bean_tipo_vivienda = new BeanTipoVivienda();
            
      $bean_tipo_vivienda->setTipoViviendaId($tipo_vivienda_id);
      $bean_tipo_vivienda->setDescVivienda($desc_vivienda);

      $data = $tipo_vivienda->update($bean_tipo_vivienda) ;
            
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

      $tipo_vivienda  = new TipoVivienda($this->cnx);
            
      $bean_tipo_vivienda = new BeanTipoVivienda();
            
      $bean_tipo_vivienda->setTipoViviendaId($tipo_vivienda_id);
      $bean_tipo_vivienda->setEstado($estado);

      $data = $tipo_vivienda->updateEstado($bean_tipo_vivienda) ;
            
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
      $tipo_vivienda  = new TipoVivienda();

      $bean_tipo_vivienda = new BeanTipoVivienda();

      $bean_tipo_vivienda->setTipoViviendaId($id);

      $data = $tipo_vivienda->find( $bean_tipo_vivienda) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($tipo_vivienda_id)
  {
    try
    {

      $tipo_vivienda  = new TipoVivienda();

      $bean_tipo_vivienda = new BeanTipoVivienda();

      $bean_tipo_vivienda->setTipoViviendaId($tipo_vivienda_id);

      $data = $tipo_vivienda->deleteById( $bean_tipo_vivienda ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
