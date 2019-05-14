<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class PaqueteController
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
      $paquete  = new Paquete();

      $data = $paquete->getAll();

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

      $paquete  = new Paquete();

      $bean_paquete = new BeanPaquete();

      $bean_paquete->setEstado($estado);

      $data = $paquete->getByEstado($bean_paquete);

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

      $paquete  = new Paquete($this->cnx);

      $bean_paquete = new BeanPaquete();

      $ubigeo_id          = $ubigeo_id ;
      $nombre             = $nombre ;
      $descripcion        = !empty($descripcion) ? $descripcion        : "" ;
      $recomendacion      = !empty($recomendacion) ? $recomendacion    : "" ;
      $num_dias           = !empty($num_dias) ? $num_dias              : 0 ;
      $num_noches         = !empty($num_noches) ? $num_noches          : 0 ;
      $precio             = $precio ;
      $descuento          = !empty($descuento) ? $descuento            : 0 ;
      $fecha_ini_promo    = !empty($fecha_ini_promo) ? $fecha_ini_promo: NULL;
      $fecha_fin_promo    = !empty($fecha_fin_promo) ? $fecha_fin_promo: NULL;
      // $fecha_ini_promo = $fecha_ini_promo ;
      // $fecha_fin_promo = $fecha_fin_promo ;
      $url                = !empty($url) ? $url                        : "" ;
      $num_visitas        = !empty($num_visitas) ? $num_visitas        : 0 ;
      $publicar           = $publicar ;


      $precio_descuento = $precio ;
      if($descuento > 0){
          $precio_descuento = $precio - ( $precio * ($descuento/100) ) ;
      }

      $bean_paquete->setUbigeoId($ubigeo_id);
      $bean_paquete->setNombre($nombre);
      $bean_paquete->setDescripcion($descripcion);
      $bean_paquete->setRecomendacion($recomendacion);
      $bean_paquete->setNumDias($num_dias);
      $bean_paquete->setNumNoches($num_noches);
      $bean_paquete->setPrecio($precio);
      $bean_paquete->setDescuento($descuento);
      $bean_paquete->setPrecioDescuento($precio_descuento);
      $bean_paquete->setFechaIniPromo($fecha_ini_promo);
      $bean_paquete->setFechaFinPromo($fecha_fin_promo);
      $bean_paquete->setUrl($url);
      $bean_paquete->setNumVisitas($num_visitas);
      $bean_paquete->setPublicar($publicar);

      $paquete_id = $paquete->save($bean_paquete) ;

      $data = $paquete_id;

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

      $paquete  = new Paquete($this->cnx);
      $bean_paquete = new BeanPaquete();

      $paquete_id         = $paquete_id ;
      $ubigeo_id          = $ubigeo_id ;
      $nombre             = $nombre ;
      $descripcion        = !empty($descripcion) ? $descripcion        : "" ;
      $recomendacion      = !empty($recomendacion) ? $recomendacion    : "" ;
      $num_dias           = !empty($num_dias) ? $num_dias              : 0 ;
      $num_noches         = !empty($num_noches) ? $num_noches          : 0 ;
      $precio             = $precio ;
      $descuento          = !empty($descuento) ? $descuento            : 0 ;
      $fecha_ini_promo    = !empty($fecha_ini_promo) ? $fecha_ini_promo: "1900-01-01" ;
      $fecha_fin_promo    = !empty($fecha_fin_promo) ? $fecha_fin_promo: "1900-01-01" ;
      // $fecha_ini_promo = $fecha_ini_promo ;
      // $fecha_fin_promo = $fecha_fin_promo ;
      $url                = !empty($url) ? $url                        : "" ;
      // $num_visitas        = !empty($num_visitas) ? $num_visitas        : 0 ;
      $publicar           = $publicar ;


      $precio_descuento = $precio ;
      if($descuento > 0)
      {
        $precio_descuento = $precio - ( $precio * ($descuento/100) ) ;
      }


      $bean_paquete->setPaqueteId($paquete_id);
      $bean_paquete->setUbigeoId($ubigeo_id);
      $bean_paquete->setNombre($nombre);
      $bean_paquete->setDescripcion($descripcion);
      $bean_paquete->setRecomendacion($recomendacion);
      $bean_paquete->setNumDias($num_dias);
      $bean_paquete->setNumNoches($num_noches);
      $bean_paquete->setPrecio($precio);
      $bean_paquete->setDescuento($descuento);
      $bean_paquete->setPrecioDescuento($precio_descuento);
      $bean_paquete->setFechaIniPromo($fecha_ini_promo);
      $bean_paquete->setFechaFinPromo($fecha_fin_promo);
      $bean_paquete->setUrl($url);
      // $bean_paquete->setNumVisitas($num_visitas);
      $bean_paquete->setPublicar($publicar);

      $data = $paquete->update($bean_paquete) ;

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

      $paquete  = new Paquete($this->cnx);

      $bean_paquete = new BeanPaquete();

      $bean_paquete->setPaqueteId($paquete_id);
      $bean_paquete->setEstado($estado);

      $data = $paquete->updateEstado($bean_paquete) ;

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
      $paquete  = new Paquete();

      $bean_paquete = new BeanPaquete();

      $bean_paquete->setPaqueteId($id);

      $data = $paquete->find( $bean_paquete) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($paquete_id)
  {
    try
    {

      $paquete  = new Paquete();

      $bean_paquete = new BeanPaquete();

      $bean_paquete->setPaqueteId($paquete_id);

      $data = $paquete->deleteById( $bean_paquete ) ;

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

      $paquete  = new Paquete($this->cnx);
      $bean_paquete = new BeanPaquete();

      $bean_paquete->setPaqueteId($paquete_id);
      $bean_paquete->setPublicar($publicar);

      $data = $paquete->updatePublish($bean_paquete) ;

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

      $paquete  = new Paquete($this->cnx);
      $bean_paquete = new BeanPaquete();

      $bean_paquete->setPublicar($publicar);

      $data = $paquete->getPublished($bean_paquete) ;

      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
