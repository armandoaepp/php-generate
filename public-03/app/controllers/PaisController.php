<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class PaisController
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
      $pais  = new Pais();

      $data = $pais->getAll();

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

      $pais  = new Pais();

      $bean_pais = new BeanPais();

      $bean_pais->setEstado($estado);

      $data = $pais->getByEstado($bean_pais);

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

      $pais  = new Pais($this->cnx);

      $bean_pais = new BeanPais();

      $bean_pais->setNombre($nombre);

      $data = $pais->save($bean_pais) ;

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

      $pais  = new Pais($this->cnx);
      $bean_pais = new BeanPais();

      $bean_pais->setPaisId($pais_id);
      $bean_pais->setNombre($nombre);

      $data = $pais->update($bean_pais) ;

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

      $pais  = new Pais($this->cnx);

      $bean_pais = new BeanPais();

      $bean_pais->setPaisId($pais_id);
      $bean_pais->setEstado($estado);

      $data = $pais->updateEstado($bean_pais) ;

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
      $pais  = new Pais();

      $bean_pais = new BeanPais();

      $bean_pais->setPaisId($id);

      $data = $pais->find( $bean_pais) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($pais_id)
  {
    try
    {

      $pais  = new Pais();

      $bean_pais = new BeanPais();

      $bean_pais->setPaisId($pais_id);

      $data = $pais->deleteById( $bean_pais ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
