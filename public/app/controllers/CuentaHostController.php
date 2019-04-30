<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class CuentaHostController
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
      $cuenta_host  = new CuentaHost();

      $data = $cuenta_host->getAll();

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

      $cuenta_host  = new CuentaHost();
            
      $bean_cuenta_host = new BeanCuentaHost();
            
      $bean_cuenta_host->setEstado($estado);

      $data = $cuenta_host->getByEstado($bean_cuenta_host);

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

      $cuenta_host  = new CuentaHost($this->cnx);

      $bean_cuenta_host = new BeanCuentaHost();
            
      $bean_cuenta_host->setPropietarioId($propietario_id);
      $bean_cuenta_host->setPlanId($plan_id);
      $bean_cuenta_host->setDominio($dominio);
      $bean_cuenta_host->setDescripcion($descripcion);
      $bean_cuenta_host->setSoloHost($solo_host);
      $bean_cuenta_host->setTiempoAlq($tiempo_alq);
      $bean_cuenta_host->setFacturado($facturado);
      $bean_cuenta_host->setCreatedAt($created_at);
      $bean_cuenta_host->setUpdatedAt($updated_at);
            
      $data = $cuenta_host->save($bean_cuenta_host) ;

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

      $cuenta_host  = new CuentaHost($this->cnx);
      $bean_cuenta_host = new BeanCuentaHost();
            
      $bean_cuenta_host->setId($id);
      $bean_cuenta_host->setPropietarioId($propietario_id);
      $bean_cuenta_host->setPlanId($plan_id);
      $bean_cuenta_host->setDominio($dominio);
      $bean_cuenta_host->setDescripcion($descripcion);
      $bean_cuenta_host->setSoloHost($solo_host);
      $bean_cuenta_host->setTiempoAlq($tiempo_alq);
      $bean_cuenta_host->setFacturado($facturado);
      $bean_cuenta_host->setCreatedAt($created_at);
      $bean_cuenta_host->setUpdatedAt($updated_at);

      $data = $cuenta_host->update($bean_cuenta_host) ;
            
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

      $cuenta_host  = new CuentaHost($this->cnx);
            
      $bean_cuenta_host = new BeanCuentaHost();
            
      $bean_cuenta_host->setId($id);
      $bean_cuenta_host->setEstado($estado);

      $data = $cuenta_host->updateEstado($bean_cuenta_host) ;
            
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
      $cuenta_host  = new CuentaHost();

      $bean_cuenta_host = new BeanCuentaHost();

      $bean_cuenta_host->setId($id);

      $data = $cuenta_host->find( $bean_cuenta_host) ;
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

      $cuenta_host  = new CuentaHost();

      $bean_cuenta_host = new BeanCuentaHost();

      $bean_cuenta_host->setId($id);

      $data = $cuenta_host->deleteById( $bean_cuenta_host ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
