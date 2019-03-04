<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class DiplomadoController
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
      $diplomado  = new Diplomado();

      $data = $diplomado->getAll();

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

      $diplomado  = new Diplomado();
            
      $bean_diplomado = new BeanDiplomado();
            
      $bean_diplomado->setEstado($estado);

      $data = $diplomado->getByEstado($bean_diplomado);

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

      $diplomado  = new Diplomado($this->cnx);

      $bean_diplomado = new BeanDiplomado();
            
      $bean_diplomado->setTitulo($titulo);
      $bean_diplomado->setDescripcion($descripcion);
      $bean_diplomado->setSlide($slide);
      $bean_diplomado->setImagen($imagen);
      $bean_diplomado->setCertificacion($certificacion);
      $bean_diplomado->setTitulos($titulos);
      $bean_diplomado->setInversion($inversion);
      $bean_diplomado->setTitulacion($titulacion);
      $bean_diplomado->setDetalleduracion($detalleduracion);
      $bean_diplomado->setDetalledia($detalledia);
      $bean_diplomado->setDetallehorario($detallehorario);
      $bean_diplomado->setDetallelugar($detallelugar);
      $bean_diplomado->setDetalleprecio($detalleprecio);
      $bean_diplomado->setDetalleequipos($detalleequipos);
      $bean_diplomado->setDetalleconsultas($detalleconsultas);
      $bean_diplomado->setDetalledirigido($detalledirigido);
      $bean_diplomado->setAquien($aquien);
      $bean_diplomado->setTemas($temas);
      $bean_diplomado->setNombreseo($nombreseo);
      $bean_diplomado->setOrden($orden);
      $bean_diplomado->setFecha($fecha);
            
      $data = $diplomado->save($bean_diplomado) ;

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

      $diplomado  = new Diplomado($this->cnx);
      $bean_diplomado = new BeanDiplomado();
            
      $bean_diplomado->setId($id);
      $bean_diplomado->setTitulo($titulo);
      $bean_diplomado->setDescripcion($descripcion);
      $bean_diplomado->setSlide($slide);
      $bean_diplomado->setImagen($imagen);
      $bean_diplomado->setCertificacion($certificacion);
      $bean_diplomado->setTitulos($titulos);
      $bean_diplomado->setInversion($inversion);
      $bean_diplomado->setTitulacion($titulacion);
      $bean_diplomado->setDetalleduracion($detalleduracion);
      $bean_diplomado->setDetalledia($detalledia);
      $bean_diplomado->setDetallehorario($detallehorario);
      $bean_diplomado->setDetallelugar($detallelugar);
      $bean_diplomado->setDetalleprecio($detalleprecio);
      $bean_diplomado->setDetalleequipos($detalleequipos);
      $bean_diplomado->setDetalleconsultas($detalleconsultas);
      $bean_diplomado->setDetalledirigido($detalledirigido);
      $bean_diplomado->setAquien($aquien);
      $bean_diplomado->setTemas($temas);
      $bean_diplomado->setNombreseo($nombreseo);
      $bean_diplomado->setOrden($orden);
      $bean_diplomado->setFecha($fecha);

      $data = $diplomado->update($bean_diplomado) ;
            
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

      $diplomado  = new Diplomado($this->cnx);
            
      $bean_diplomado = new BeanDiplomado();
            
      $bean_diplomado->setId($id);
      $bean_diplomado->setEstado($estado);

      $data = $diplomado->updateEstado($bean_diplomado) ;
            
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
      $diplomado  = new Diplomado();

      $bean_diplomado = new BeanDiplomado();

      $bean_diplomado->setId($id);

      $data = $diplomado->find( $bean_diplomado) ;
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

      $diplomado  = new Diplomado();

      $bean_diplomado = new BeanDiplomado();

      $bean_diplomado->setId($id);

      $data = $diplomado->deleteById( $bean_diplomado ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
