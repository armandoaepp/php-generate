<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class AsociadoController
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
      $asociado  = new Asociado();

      $data = $asociado->getAll();

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

      $asociado  = new Asociado();

      $bean_asociado = new BeanAsociado();

      $bean_asociado->setEstado($estado);

      $data = $asociado->getByEstado($bean_asociado);

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

      $asociado  = new Asociado($this->cnx);

      $bean_asociado = new BeanAsociado();

      $bean_asociado->setEmpresaId($empresa_id);
      $bean_asociado->setNombre($nombre);
      $bean_asociado->setApellidos($apellidos);
      $bean_asociado->setEmail($email);
      $bean_asociado->setPassword($password);
      $bean_asociado->setTelefono($telefono);

      $data = $asociado->save($bean_asociado) ;

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

      $asociado  = new Asociado($this->cnx);
      $bean_asociado = new BeanAsociado();

      $bean_asociado->setAsociadoId($asociado_id);
      $bean_asociado->setEmpresaId($empresa_id);
      $bean_asociado->setNombre($nombre);
      $bean_asociado->setApellidos($apellidos);
      $bean_asociado->setEmail($email);
      // $bean_asociado->setPassword($password);
      $bean_asociado->setTelefono($telefono);

      $data = $asociado->update($bean_asociado) ;

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

      $asociado  = new Asociado($this->cnx);

      $bean_asociado = new BeanAsociado();

      $bean_asociado->setAsociadoId($asociado_id);
      $bean_asociado->setEstado($estado);

      $data = $asociado->updateEstado($bean_asociado) ;

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
      $asociado  = new Asociado();

      $bean_asociado = new BeanAsociado();

      $bean_asociado->setAsociadoId($id);

      $data = $asociado->find( $bean_asociado) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($asociado_id)
  {
    try
    {

      $asociado  = new Asociado();

      $bean_asociado = new BeanAsociado();

      $bean_asociado->setAsociadoId($asociado_id);

      $data = $asociado->deleteById( $bean_asociado ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function updatePassword($params = array() )
  {
    try
    {

      extract($params) ;

      $asociado  = new Asociado($this->cnx);

      $bean_asociado = new BeanAsociado();

      $bean_asociado->setAsociadoId($asociado_id);
      $bean_asociado->setPassword($password);

      $data = $asociado->updatePassword($bean_asociado) ;

      return $data ;
    }
    catch (Exception $e)
    {
        throw new Exception($e->getMessage());
    }
  }

}
