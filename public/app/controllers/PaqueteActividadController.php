<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class PaqueteActividadController
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
      $paquete_actividad  = new PaqueteActividad();

      $data = $paquete_actividad->getAll();

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

      $paquete_actividad  = new PaqueteActividad();

      $bean_paquete_actividad = new BeanPaqueteActividad();

      $bean_paquete_actividad->setEstado($estado);

      $data = $paquete_actividad->getByEstado($bean_paquete_actividad);

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

      $paquete_actividad  = new PaqueteActividad($this->cnx);

      $bean_paquete_actividad = new BeanPaqueteActividad();

      $bean_paquete_actividad->setPaqueteId($paquete_id);
      $bean_paquete_actividad->setActividadId($actividad_id);
      $bean_paquete_actividad->setHoras($horas);
      $bean_paquete_actividad->setDescripcion($descripcion);

      $data = $paquete_actividad->save($bean_paquete_actividad) ;

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

      $paquete_actividad  = new PaqueteActividad($this->cnx);
      $bean_paquete_actividad = new BeanPaqueteActividad();

      $bean_paquete_actividad->setPaqueteActividadId($paquete_actividad_id);
      // $bean_paquete_actividad->setPaqueteId($paquete_id);
      // $bean_paquete_actividad->setActividadId($actividad_id);
      $bean_paquete_actividad->setHoras($horas);
      $bean_paquete_actividad->setDescripcion($descripcion);

      $data = $paquete_actividad->update($bean_paquete_actividad) ;

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

      $paquete_actividad  = new PaqueteActividad($this->cnx);

      $bean_paquete_actividad = new BeanPaqueteActividad();

      $bean_paquete_actividad->setPaqueteActividadId($paquete_actividad_id);
      $bean_paquete_actividad->setEstado($estado);

      $data = $paquete_actividad->updateEstado($bean_paquete_actividad) ;

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
      $paquete_actividad  = new PaqueteActividad();

      $bean_paquete_actividad = new BeanPaqueteActividad();

      $bean_paquete_actividad->setPaqueteActividadId($id);

      $data = $paquete_actividad->find( $bean_paquete_actividad) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($paquete_actividad_id)
  {
    try
    {

      $paquete_actividad  = new PaqueteActividad();

      $bean_paquete_actividad = new BeanPaqueteActividad();

      $bean_paquete_actividad->setPaqueteActividadId($paquete_actividad_id);

      $data = $paquete_actividad->deleteById( $bean_paquete_actividad ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByPaqueteId( $params = array() )
  {
    try
    {

      extract($params) ;

      $paquete_actividad  = new PaqueteActividad();

      $bean_paquete_actividad = new BeanPaqueteActividad();

      $bean_paquete_actividad->setPaqueteId($paquete_id);

      $data = $paquete_actividad->getByPaqueteId($bean_paquete_actividad);

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByPaqueteIdActividadId( $params = array() )
  {
    try
    {

      extract($params) ;

      $paquete_actividad  = new PaqueteActividad();

      $bean_paquete_actividad = new BeanPaqueteActividad();

      $bean_paquete_actividad->setPaqueteId($paquete_id);
      $bean_paquete_actividad->setActividadId($actividad_id);

      $data = $paquete_actividad->getByPaqueteIdActividadId($bean_paquete_actividad);

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
