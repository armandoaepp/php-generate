<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class TipoHabitacionController
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
      $tipo_habitacion  = new TipoHabitacion();

      $data = $tipo_habitacion->getAll();

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

      $tipo_habitacion  = new TipoHabitacion();
            
      $bean_tipo_habitacion = new BeanTipoHabitacion();
            
      $bean_tipo_habitacion->setEstado($estado);

      $data = $tipo_habitacion->getByEstado($bean_tipo_habitacion);

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

      $tipo_habitacion  = new TipoHabitacion($this->cnx);

      $bean_tipo_habitacion = new BeanTipoHabitacion();
            
      $bean_tipo_habitacion->setNombre($nombre);
            
      $data = $tipo_habitacion->save($bean_tipo_habitacion) ;

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

      $tipo_habitacion  = new TipoHabitacion($this->cnx);
      $bean_tipo_habitacion = new BeanTipoHabitacion();
            
      $bean_tipo_habitacion->setTipoHabitacionId($tipo_habitacion_id);
      $bean_tipo_habitacion->setNombre($nombre);

      $data = $tipo_habitacion->update($bean_tipo_habitacion) ;
            
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

      $tipo_habitacion  = new TipoHabitacion($this->cnx);
            
      $bean_tipo_habitacion = new BeanTipoHabitacion();
            
      $bean_tipo_habitacion->setTipoHabitacionId($tipo_habitacion_id);
      $bean_tipo_habitacion->setEstado($estado);

      $data = $tipo_habitacion->updateEstado($bean_tipo_habitacion) ;
            
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
      $tipo_habitacion  = new TipoHabitacion();

      $bean_tipo_habitacion = new BeanTipoHabitacion();

      $bean_tipo_habitacion->setTipoHabitacionId($id);

      $data = $tipo_habitacion->find( $bean_tipo_habitacion) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($tipo_habitacion_id)
  {
    try
    {

      $tipo_habitacion  = new TipoHabitacion();

      $bean_tipo_habitacion = new BeanTipoHabitacion();

      $bean_tipo_habitacion->setTipoHabitacionId($tipo_habitacion_id);

      $data = $tipo_habitacion->deleteById( $bean_tipo_habitacion ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
