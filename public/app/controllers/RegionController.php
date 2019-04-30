<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class RegionController
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
      $region  = new Region();

      $data = $region->getAll();

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

      $region  = new Region();
            
      $bean_region = new BeanRegion();
            
      $bean_region->setEstado($estado);

      $data = $region->getByEstado($bean_region);

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

      $region  = new Region($this->cnx);

      $bean_region = new BeanRegion();
            
      $bean_region->setNombre($nombre);
            
      $data = $region->save($bean_region) ;

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

      $region  = new Region($this->cnx);
      $bean_region = new BeanRegion();
            
      $bean_region->setRegionId($region_id);
      $bean_region->setNombre($nombre);

      $data = $region->update($bean_region) ;
            
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

      $region  = new Region($this->cnx);
            
      $bean_region = new BeanRegion();
            
      $bean_region->setRegionId($region_id);
      $bean_region->setEstado($estado);

      $data = $region->updateEstado($bean_region) ;
            
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
      $region  = new Region();

      $bean_region = new BeanRegion();

      $bean_region->setRegionId($id);

      $data = $region->find( $bean_region) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($region_id)
  {
    try
    {

      $region  = new Region();

      $bean_region = new BeanRegion();

      $bean_region->setRegionId($region_id);

      $data = $region->deleteById( $bean_region ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
