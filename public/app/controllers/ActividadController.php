<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class ActividadController
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
      $actividad  = new Actividad();

      $data = $actividad->getAll();

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

      $actividad  = new Actividad();
            
      $bean_actividad = new BeanActividad();
            
      $bean_actividad->setEstado($estado);

      $data = $actividad->getByEstado($bean_actividad);

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

      $actividad  = new Actividad($this->cnx);

      $bean_actividad = new BeanActividad();
            
      $bean_actividad->setNombre($nombre);
      $bean_actividad->setDescripcion($descripcion);
      $bean_actividad->setHoras($horas);
            
      $data = $actividad->save($bean_actividad) ;

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

      $actividad  = new Actividad($this->cnx);
      $bean_actividad = new BeanActividad();
            
      $bean_actividad->setTipoPaqueteId($tipo_paquete_id);
      $bean_actividad->setNombre($nombre);
      $bean_actividad->setDescripcion($descripcion);
      $bean_actividad->setHoras($horas);

      $data = $actividad->update($bean_actividad) ;
            
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

      $actividad  = new Actividad($this->cnx);
            
      $bean_actividad = new BeanActividad();
            
      $bean_actividad->setTipoPaqueteId($tipo_paquete_id);
      $bean_actividad->setEstado($estado);

      $data = $actividad->updateEstado($bean_actividad) ;
            
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
      $actividad  = new Actividad();

      $bean_actividad = new BeanActividad();

      $bean_actividad->setTipoPaqueteId($id);

      $data = $actividad->find( $bean_actividad) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($tipo_paquete_id)
  {
    try
    {

      $actividad  = new Actividad();

      $bean_actividad = new BeanActividad();

      $bean_actividad->setTipoPaqueteId($tipo_paquete_id);

      $data = $actividad->deleteById( $bean_actividad ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
