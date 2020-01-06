<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class HabitacionController
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
      $habitacion  = new Habitacion();

      $data = $habitacion->getAll();

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

      $habitacion  = new Habitacion();
            
      $bean_habitacion = new BeanHabitacion();
            
      $bean_habitacion->setEstado($estado);

      $data = $habitacion->getByEstado($bean_habitacion);

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

      $habitacion  = new Habitacion($this->cnx);

      $bean_habitacion = new BeanHabitacion();
            
      $bean_habitacion->setNombre($nombre);
      $bean_habitacion->setDescripcion($descripcion);
      $bean_habitacion->setCaracteristicas($caracteristicas);
      $bean_habitacion->setPrecio($precio);
      $bean_habitacion->setNumVisitas($num_visitas);
      $bean_habitacion->setPublicar($publicar);
            
      $data = $habitacion->save($bean_habitacion) ;

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

      $habitacion  = new Habitacion($this->cnx);
      $bean_habitacion = new BeanHabitacion();
            
      $bean_habitacion->setHabitacionId($habitacion_id);
      $bean_habitacion->setNombre($nombre);
      $bean_habitacion->setDescripcion($descripcion);
      $bean_habitacion->setCaracteristicas($caracteristicas);
      $bean_habitacion->setPrecio($precio);
      $bean_habitacion->setNumVisitas($num_visitas);
      $bean_habitacion->setPublicar($publicar);

      $data = $habitacion->update($bean_habitacion) ;
            
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

      $habitacion  = new Habitacion($this->cnx);
            
      $bean_habitacion = new BeanHabitacion();
            
      $bean_habitacion->setHabitacionId($habitacion_id);
      $bean_habitacion->setEstado($estado);

      $data = $habitacion->updateEstado($bean_habitacion) ;
            
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
      $habitacion  = new Habitacion();

      $bean_habitacion = new BeanHabitacion();

      $bean_habitacion->setHabitacionId($id);

      $data = $habitacion->find( $bean_habitacion) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($habitacion_id)
  {
    try
    {

      $habitacion  = new Habitacion();

      $bean_habitacion = new BeanHabitacion();

      $bean_habitacion->setHabitacionId($habitacion_id);

      $data = $habitacion->deleteById( $bean_habitacion ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function updatePublish($params = array())
  {
    try
    {
            
      extract($params) ; 

      $habitacion  = new Habitacion($this->cnx);
      $bean_habitacion = new BeanHabitacion();
            
      $bean_habitacion->setHabitacionId($habitacion_id);
      $bean_habitacion->setPublicar($publicar);

      $data = $habitacion->updatePublish($bean_habitacion) ;
            
      return $data;
    }
    catch (Exception $e)
    {
           throw new Exception($e->getMessage());
    }
  }

  public function getPublished($params = array())
  {
    try
    {
            
      extract($params) ; 

      $habitacion  = new Habitacion($this->cnx);
      $bean_habitacion = new BeanHabitacion();
            
      $bean_habitacion->setPublicar($publicar);

      $data = $habitacion->getPublished($bean_habitacion) ;
      
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
