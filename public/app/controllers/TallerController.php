<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class TallerController
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
      $taller  = new Taller();

      $data = $taller->getAll();

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

      $taller  = new Taller($this->cnx);

      $bean_taller = new BeanTaller();
            
      $bean_taller->setTitulo($titulo);
      $bean_taller->setDescripcion($descripcion);
      $bean_taller->setSlide($slide);
      $bean_taller->setImagen($imagen);
      $bean_taller->setCertificacion($certificacion);
      $bean_taller->setTitulos($titulos);
      $bean_taller->setInversion($inversion);
      $bean_taller->setTitulacion($titulacion);
      $bean_taller->setDetalleduracion($detalleduracion);
      $bean_taller->setDetalledia($detalledia);
      $bean_taller->setDetallehorario($detallehorario);
      $bean_taller->setDetallelugar($detallelugar);
      $bean_taller->setDetalleprecio($detalleprecio);
      $bean_taller->setDetalleequipos($detalleequipos);
      $bean_taller->setDetalleconsultas($detalleconsultas);
      $bean_taller->setDetalledirigido($detalledirigido);
      $bean_taller->setAquien($aquien);
      $bean_taller->setTemas($temas);
      $bean_taller->setNombreseo($nombreseo);
      $bean_taller->setOrden($orden);
      $bean_taller->setFecha($fecha);
            
      $data = $taller->save($bean_taller) ;

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

      $taller  = new Taller($this->cnx);
      $bean_taller = new BeanTaller();
            
      $bean_taller->setId($id);
      $bean_taller->setTitulo($titulo);
      $bean_taller->setDescripcion($descripcion);
      $bean_taller->setSlide($slide);
      $bean_taller->setImagen($imagen);
      $bean_taller->setCertificacion($certificacion);
      $bean_taller->setTitulos($titulos);
      $bean_taller->setInversion($inversion);
      $bean_taller->setTitulacion($titulacion);
      $bean_taller->setDetalleduracion($detalleduracion);
      $bean_taller->setDetalledia($detalledia);
      $bean_taller->setDetallehorario($detallehorario);
      $bean_taller->setDetallelugar($detallelugar);
      $bean_taller->setDetalleprecio($detalleprecio);
      $bean_taller->setDetalleequipos($detalleequipos);
      $bean_taller->setDetalleconsultas($detalleconsultas);
      $bean_taller->setDetalledirigido($detalledirigido);
      $bean_taller->setAquien($aquien);
      $bean_taller->setTemas($temas);
      $bean_taller->setNombreseo($nombreseo);
      $bean_taller->setOrden($orden);
      $bean_taller->setFecha($fecha);

      $data = $taller->update($bean_taller) ;
            
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

      $taller  = new Taller($this->cnx);
      $bean_taller = new BeanTaller();
            
      $bean_taller->setId($id);
      $bean_taller->setEstado($estado);

      $data = $taller->updateEstado($bean_taller) ;
            
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
      $taller  = new Taller();

      $bean_taller = new BeanTaller();

      $bean_taller->setId($id);

      $data = $taller->find( $bean_taller) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($params)
  {
    try
    {

      extract($params) ;

      $taller  = new Taller();

      $bean_taller = new BeanTaller();

      $bean_taller->setId($id);

      $data = $taller->deleteById( $bean_taller ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
