<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class TrasladoPreguntaController
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
      $traslado_pregunta  = new TrasladoPregunta();

      $data = $traslado_pregunta->getAll();

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByEstado()
  {
    try
    {
      $traslado_pregunta  = new TrasladoPregunta();
            
      $bean_traslado_pregunta = new BeanTrasladoPregunta();
            
      $bean_traslado_pregunta->setEstado($estado);

      $data = $traslado_pregunta->getByEstado($bean_traslado_pregunta);

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

      $traslado_pregunta  = new TrasladoPregunta($this->cnx);

      $bean_traslado_pregunta = new BeanTrasladoPregunta();
            
      $bean_traslado_pregunta->setPregunta($pregunta);
      $bean_traslado_pregunta->setRespuesta($respuesta);
      $bean_traslado_pregunta->setOrden($orden);
      $bean_traslado_pregunta->setFecha($fecha);
            
      $data = $traslado_pregunta->save($bean_traslado_pregunta) ;

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

      $traslado_pregunta  = new TrasladoPregunta($this->cnx);
      $bean_traslado_pregunta = new BeanTrasladoPregunta();
            
      $bean_traslado_pregunta->setId($id);
      $bean_traslado_pregunta->setPregunta($pregunta);
      $bean_traslado_pregunta->setRespuesta($respuesta);
      $bean_traslado_pregunta->setOrden($orden);
      $bean_traslado_pregunta->setFecha($fecha);

      $data = $traslado_pregunta->update($bean_traslado_pregunta) ;
            
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

      $traslado_pregunta  = new TrasladoPregunta($this->cnx);
            
      $bean_traslado_pregunta = new BeanTrasladoPregunta();
            
      $bean_traslado_pregunta->setId($id);
      $bean_traslado_pregunta->setEstado($estado);

      $data = $traslado_pregunta->updateEstado($bean_traslado_pregunta) ;
            
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
      $traslado_pregunta  = new TrasladoPregunta();

      $bean_traslado_pregunta = new BeanTrasladoPregunta();

      $bean_traslado_pregunta->setId($id);

      $data = $traslado_pregunta->find( $bean_traslado_pregunta) ;
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

      $traslado_pregunta  = new TrasladoPregunta();

      $bean_traslado_pregunta = new BeanTrasladoPregunta();

      $bean_traslado_pregunta->setId($id);

      $data = $traslado_pregunta->deleteById( $bean_traslado_pregunta ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
