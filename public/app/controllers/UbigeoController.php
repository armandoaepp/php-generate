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

  public function getByTipoAndPaisId( $params = array() )
  {
    try
    {
      extract($params) ;

      $ubigeo  = new Ubigeo();

      $bean_ubigeo = new BeanUbigeo();

      $pais_id = !empty($pais_id) ? $pais_id: 1 ;
      $tipo    = !empty($tipo) ? $tipo      : 1 ;

      $bean_ubigeo->setPaisId($pais_id);
      $bean_ubigeo->setTipo($tipo);


      $data = $ubigeo->getByTipoAndPaisId($bean_ubigeo);

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getProvinciasByPaisId( $params = array() )
  {
    try
    {
      extract($params) ;

      $ubigeo  = new Ubigeo();

      $bean_ubigeo = new BeanUbigeo();

      $pais_id = !empty($pais_id) ? $pais_id: 1 ;

      $bean_ubigeo->setPaisId($pais_id);

      $data = $ubigeo->getProvinciasByPaisId($bean_ubigeo);

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getDistritosByPaisId( $params = array() )
  {
    try
    {
      extract($params) ;

      $ubigeo  = new Ubigeo();

      $bean_ubigeo = new BeanUbigeo();

      $pais_id = !empty($pais_id) ? $pais_id: 1 ;

      $bean_ubigeo->setPaisId($pais_id);

      $data = $ubigeo->getDistritosByPaisId($bean_ubigeo);

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

      $codigo          = !empty($codigo) ? $codigo : '00' ;
      $nombre          = $nombre ;
      $descripcion     = !empty($descripcion) ? $descripcion : $nombre ;
      $ubigeo_id_padre = !empty($ubigeo_id_padre) ? $ubigeo_id_padre: 0 ;
      $pais_id         = !empty($pais_id) ? $pais_id : 1 ;
      $region_id       = !empty($region_id) ? $region_id : null ;
      $tipo            = !empty($tipo) ? $tipo : null ;

      $bean_ubigeo->setCodigo($codigo);
      $bean_ubigeo->setNombre($nombre);
      $bean_ubigeo->setDescripcion($descripcion);
      $bean_ubigeo->setUbigeoIdPadre($ubigeo_id_padre);
      $bean_ubigeo->setPaisId($pais_id);
      $bean_ubigeo->setRegionId($region_id);
      $bean_ubigeo->setTipo($tipo);

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

      $ubigeo_id       = $ubigeo_id ;
      $codigo          = !empty($codigo) ? $codigo : '00' ;
      $nombre          = $nombre ;
      $descripcion     = !empty($descripcion) ? $descripcion : $nombre ;
      $ubigeo_id_padre = !empty($ubigeo_id_padre) ? $ubigeo_id_padre: 0 ;
      $pais_id         = !empty($pais_id) ? $pais_id : 1 ;
      $region_id       = !empty($region_id) ? $region_id : null ;
      // $tipo            = !empty($tipo) ? $tipo : null ;

      $bean_ubigeo->setUbigeoId($ubigeo_id);
      $bean_ubigeo->setCodigo($codigo);
      $bean_ubigeo->setNombre($nombre);
      $bean_ubigeo->setDescripcion($descripcion);
      $bean_ubigeo->setUbigeoIdPadre($ubigeo_id_padre);
      $bean_ubigeo->setPaisId($pais_id);
      $bean_ubigeo->setRegionId($region_id);
      // $bean_ubigeo->setTipo($tipo);

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

      $bean_ubigeo->setUbigeoId($ubigeo_id);
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

      $bean_ubigeo->setUbigeoId($id);

      $data = $ubigeo->find( $bean_ubigeo) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($ubigeo_id)
  {
    try
    {

      $ubigeo  = new Ubigeo();

      $bean_ubigeo = new BeanUbigeo();

      $bean_ubigeo->setUbigeoId($ubigeo_id);

      $data = $ubigeo->deleteById( $bean_ubigeo ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
