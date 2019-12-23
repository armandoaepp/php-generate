<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class PlatoController
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
      $plato  = new Plato();

      $data = $plato->getAll();

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

      $plato  = new Plato();
            
      $bean_plato = new BeanPlato();
            
      $bean_plato->setEstado($estado);

      $data = $plato->getByEstado($bean_plato);

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

      $plato  = new Plato($this->cnx);

      $bean_plato = new BeanPlato();
            
      $bean_plato->setNombre($nombre);
      $bean_plato->setDescripcion($descripcion);
      $bean_plato->setPrecio($precio);
      $bean_plato->setDescuento($descuento);
      $bean_plato->setPrecioDescuento($precio_descuento);
      $bean_plato->setImagen($imagen);
      $bean_plato->setFechaIniPromo($fecha_ini_promo);
      $bean_plato->setFechaFinPromo($fecha_fin_promo);
      $bean_plato->setNumVisitas($num_visitas);
      $bean_plato->setPublicar($publicar);
      $bean_plato->setCreateUp($create_up);
            
      $data = $plato->save($bean_plato) ;

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

      $plato  = new Plato($this->cnx);
      $bean_plato = new BeanPlato();
            
      $bean_plato->setPlatoId($plato_id);
      $bean_plato->setNombre($nombre);
      $bean_plato->setDescripcion($descripcion);
      $bean_plato->setPrecio($precio);
      $bean_plato->setDescuento($descuento);
      $bean_plato->setPrecioDescuento($precio_descuento);
      $bean_plato->setImagen($imagen);
      $bean_plato->setFechaIniPromo($fecha_ini_promo);
      $bean_plato->setFechaFinPromo($fecha_fin_promo);
      $bean_plato->setNumVisitas($num_visitas);
      $bean_plato->setPublicar($publicar);
      $bean_plato->setCreateUp($create_up);

      $data = $plato->update($bean_plato) ;
            
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

      $plato  = new Plato($this->cnx);
            
      $bean_plato = new BeanPlato();
            
      $bean_plato->setPlatoId($plato_id);
      $bean_plato->setEstado($estado);

      $data = $plato->updateEstado($bean_plato) ;
            
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
      $plato  = new Plato();

      $bean_plato = new BeanPlato();

      $bean_plato->setPlatoId($id);

      $data = $plato->find( $bean_plato) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($plato_id)
  {
    try
    {

      $plato  = new Plato();

      $bean_plato = new BeanPlato();

      $bean_plato->setPlatoId($plato_id);

      $data = $plato->deleteById( $bean_plato ) ;

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

      $plato  = new Plato($this->cnx);
      $bean_plato = new BeanPlato();
            
      $bean_plato->setPlatoId($plato_id);
      $bean_plato->setPublicar($publicar);

      $data = $plato->updatePublish($bean_plato) ;
            
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

      $plato  = new Plato($this->cnx);
      $bean_plato = new BeanPlato();
            
      $bean_plato->setPublicar($publicar);

      $data = $plato->getPublished($bean_plato) ;
      
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
