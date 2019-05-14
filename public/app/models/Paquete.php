<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Paquete extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT
                        paquete.*,
                        ubigeo.nombre as distrito,
                        ubigeo.descripcion as ubigeo_full
                      FROM paquete
                      INNER JOIN ubigeo ON ubigeo.ubigeo_id = paquete.ubigeo_id AND ubigeo.tipo = 3
                      ; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_paquete)
  {
    try{

      $paquete_id       = $bean_paquete->getPaqueteId();
      $ubigeo_id        = $bean_paquete->getUbigeoId();
      $nombre           = $bean_paquete->getNombre();
      $descripcion      = $bean_paquete->getDescripcion();
      $recomendacion    = $bean_paquete->getRecomendacion();
      $num_dias         = $bean_paquete->getNumDias();
      $num_noches       = $bean_paquete->getNumNoches();
      $precio           = $bean_paquete->getPrecio();
      $descuento        = $bean_paquete->getDescuento();
      $precio_descuento = $bean_paquete->getPrecioDescuento();
      $fecha_ini_promo  = $bean_paquete->getFechaIniPromo();
      $fecha_fin_promo  = $bean_paquete->getFechaFinPromo();
      $url              = $bean_paquete->getUrl();
      $num_visitas      = $bean_paquete->getNumVisitas();
      $publicar         = $bean_paquete->getPublicar();
      $estado           = $bean_paquete->getEstado();
      $created_at       = $bean_paquete->getCreatedAt();

      $this->query = "INSERT INTO paquete
                      (
                        ubigeo_id,
                        nombre,
                        descripcion,
                        recomendacion,
                        num_dias,
                        num_noches,
                        precio,
                        descuento,
                        precio_descuento,
                        fecha_ini_promo,
                        fecha_fin_promo,
                        url,
                        num_visitas,
                        publicar,
                        estado,
                        created_at
                      )
                      VALUES(
                        '$ubigeo_id',
                        '$nombre',
                        '$descripcion',
                        '$recomendacion',
                        '$num_dias',
                        '$num_noches',
                        '$precio',
                        '$descuento',
                        '$precio_descuento',
                        '$fecha_ini_promo',
                        '$fecha_fin_promo',
                        '$url',
                        '$num_visitas',
                        '$publicar',
                        '$estado',
                        $created_at
                      ); ";

      $this->executeQuery();

      $id = $this->lastInsertId();

      // $data = $this->status  ;
      $data = $id  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_paquete)
  {
    try{
      $paquete_id       = $bean_paquete->getPaqueteId();
      $ubigeo_id        = $bean_paquete->getUbigeoId();
      $nombre           = $bean_paquete->getNombre();
      $descripcion      = $bean_paquete->getDescripcion();
      $recomendacion    = $bean_paquete->getRecomendacion();
      $num_dias         = $bean_paquete->getNumDias();
      $num_noches       = $bean_paquete->getNumNoches();
      $precio           = $bean_paquete->getPrecio();
      $descuento        = $bean_paquete->getDescuento();
      $precio_descuento = $bean_paquete->getPrecioDescuento();
      $fecha_ini_promo  = $bean_paquete->getFechaIniPromo();
      $fecha_fin_promo  = $bean_paquete->getFechaFinPromo();
      $url              = $bean_paquete->getUrl();
      // $num_visitas      = $bean_paquete->getNumVisitas();
      $publicar         = $bean_paquete->getPublicar();

      $this->query = "UPDATE paquete SET
                        ubigeo_id = '$ubigeo_id',
                        nombre = '$nombre',
                        descripcion = '$descripcion',
                        recomendacion = '$recomendacion',
                        num_dias = '$num_dias',
                        num_noches = '$num_noches',
                        precio = '$precio',
                        descuento = '$descuento',
                        precio_descuento = '$precio_descuento',
                        fecha_ini_promo = '$fecha_ini_promo',
                        fecha_fin_promo = '$fecha_fin_promo',
                        url = '$url',
                        publicar = '$publicar'
                      WHERE paquete_id = '$paquete_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_paquete)
  {
    try{
      $paquete_id = $bean_paquete->getPaqueteId();

      $this->query = "SELECT * FROM paquete WHERE paquete_id = '$paquete_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_paquete)
  {
    try{
      $paquete_id = $bean_paquete->getPaqueteId();

      $this->query = "DELETE FROM paquete
                      WHERE paquete_id = '$paquete_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_paquete)
  {
    try{
      $estado = $bean_paquete->getEstado() ;

      $this->query = "SELECT * FROM paquete
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_paquete)
  {
    try{
      $paquete_id = $bean_paquete->getPaqueteId();
      $estado = $bean_paquete->getEstado();

      $this->query = "UPDATE paquete SET
                        estado = '$estado'
                      WHERE paquete_id='$paquete_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method updatePublish
  public function updatePublish($bean_paquete)
  {
    try{
      $paquete_id = $bean_paquete->getPaqueteId();
      $publicar = $bean_paquete->getPublicar() ;

      $this->query = "UPDATE paquete SET
                        publicar = '$publicar'
                      WHERE paquete_id = '$paquete_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_paquete)
  {
    try{
      $publicar = $bean_paquete->getPublicar() ;

      $this->query = "SELECT * FROM paquete
                      WHERE publicar = '$publicar'
                      AND estado = 1 ; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
