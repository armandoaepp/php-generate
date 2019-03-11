<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class UbigeoController
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
      $ubigeo  = new Ubigeo();

      $data = $ubigeo->getAll();

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

      $ubigeo  = new Ubigeo();
            
      $bean_ubigeo = new BeanUbigeo();
            
      $bean_ubigeo->setEstado($estado);

      $data = $ubigeo->getByEstado($bean_ubigeo);

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

      $ubigeo  = new Ubigeo($this->cnx);

      $bean_ubigeo = new BeanUbigeo();
            
      $bean_ubigeo->setCodigo($codigo);
      $bean_ubigeo->setUbigeo($ubigeo);
      $bean_ubigeo->setDescripcion($descripcion);
      $bean_ubigeo->setUbigeoIdPadre($ubigeo_id_padre);
      $bean_ubigeo->setPaisId($pais_id);
      $bean_ubigeo->setTipoUbigeoId($tipo_ubigeo_id);
      $bean_ubigeo->setRegionId($region_id);
            
      $data = $ubigeo->save($bean_ubigeo) ;

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

      $ubigeo  = new Ubigeo($this->cnx);
      $bean_ubigeo = new BeanUbigeo();
            
      $bean_ubigeo->setId($id);
      $bean_ubigeo->setCodigo($codigo);
      $bean_ubigeo->setUbigeo($ubigeo);
      $bean_ubigeo->setDescripcion($descripcion);
      $bean_ubigeo->setUbigeoIdPadre($ubigeo_id_padre);
      $bean_ubigeo->setPaisId($pais_id);
      $bean_ubigeo->setTipoUbigeoId($tipo_ubigeo_id);
      $bean_ubigeo->setRegionId($region_id);

      $data = $ubigeo->update($bean_ubigeo) ;
            
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

      $ubigeo  = new Ubigeo($this->cnx);
            
      $bean_ubigeo = new BeanUbigeo();
            
      $bean_ubigeo->setId($id);
      $bean_ubigeo->setEstado($estado);

      $data = $ubigeo->updateEstado($bean_ubigeo) ;
            
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
      $ubigeo  = new Ubigeo();

      $bean_ubigeo = new BeanUbigeo();

      $bean_ubigeo->setId($id);

      $data = $ubigeo->find( $bean_ubigeo) ;
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

      $ubigeo  = new Ubigeo();

      $bean_ubigeo = new BeanUbigeo();

      $bean_ubigeo->setId($id);

      $data = $ubigeo->deleteById( $bean_ubigeo ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
