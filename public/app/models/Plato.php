<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Plato extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      // $this->query = "SELECT * FROM plato; ";
      $this->query = "SELECT
                          plato.*,
                          categoria.desc_categoria
                        FROM plato
                        INNER JOIN categoria ON categoria.categoria_id = plato.categoria_id ; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_plato)
  {
    try{

      // $plato_id         = $bean_plato->getPlatoId();
      $categoria_id     = $bean_plato->getCategoriaId();
      $nombre           = $bean_plato->getNombre();
      $descripcion      = $bean_plato->getDescripcion();
      $precio           = $bean_plato->getPrecio();
      $descuento        = $bean_plato->getDescuento();
      $precio_descuento = $bean_plato->getPrecioDescuento();
      $imagen           = $bean_plato->getImagen();
      $fecha_ini_promo  = $bean_plato->getFechaIniPromo();
      $fecha_fin_promo  = $bean_plato->getFechaFinPromo();
      $num_visitas      = $bean_plato->getNumVisitas();
      $publicar         = $bean_plato->getPublicar();
      $estado           = $bean_plato->getEstado();
      $created_at       = $bean_plato->getCreatedAt();

      $this->query = "INSERT INTO plato
                      (
                        categoria_id,
                        nombre,
                        descripcion,
                        precio,
                        descuento,
                        precio_descuento,
                        imagen,
                        fecha_ini_promo,
                        fecha_fin_promo,
                        num_visitas,
                        publicar,
                        estado,
                        created_at
                      )
                      VALUES(
                        '$categoria_id',
                        '$nombre',
                        '$descripcion',
                        '$precio',
                        '$descuento',
                        '$precio_descuento',
                        '$imagen',
                        '$fecha_ini_promo',
                        '$fecha_fin_promo',
                        '$num_visitas',
                        '$publicar',
                        '$estado',
                        $created_at
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_plato)
  {
    try{
      $plato_id = $bean_plato->getPlatoId();
      $categoria_id = $bean_plato->getCategoriaId();
      $nombre = $bean_plato->getNombre();
      $descripcion = $bean_plato->getDescripcion();
      $precio = $bean_plato->getPrecio();
      $descuento = $bean_plato->getDescuento();
      $precio_descuento = $bean_plato->getPrecioDescuento();
      $imagen = $bean_plato->getImagen();
      $fecha_ini_promo = $bean_plato->getFechaIniPromo();
      $fecha_fin_promo = $bean_plato->getFechaFinPromo();
      $num_visitas = $bean_plato->getNumVisitas();
      $publicar = $bean_plato->getPublicar();

      $this->query = "UPDATE plato SET
                        categoria_id = '$categoria_id',
                        nombre = '$nombre',
                        descripcion = '$descripcion',
                        precio = '$precio',
                        descuento = '$descuento',
                        precio_descuento = '$precio_descuento',
                        imagen = '$imagen',
                        fecha_ini_promo = '$fecha_ini_promo',
                        fecha_fin_promo = '$fecha_fin_promo',
                        num_visitas = '$num_visitas',
                        publicar = '$publicar'
                      WHERE plato_id = '$plato_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_plato)
  {
    try{
      $plato_id = $bean_plato->getPlatoId();

      $this->query = "SELECT * FROM plato WHERE plato_id = '$plato_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_plato)
  {
    try{
      $plato_id = $bean_plato->getPlatoId();

      $this->query = "DELETE FROM plato
                      WHERE plato_id = '$plato_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_plato)
  {
    try{
      $estado = $bean_plato->getEstado() ;

      $this->query = "SELECT * FROM plato
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_plato)
  {
    try{
      $plato_id = $bean_plato->getPlatoId();
      $estado = $bean_plato->getEstado();

      $this->query = "UPDATE plato SET
                        estado = '$estado'
                      WHERE plato_id='$plato_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method updatePublish
  public function updatePublish($bean_plato)
  {
    try{
      $plato_id = $bean_plato->getPlatoId();
      $publicar = $bean_plato->getPublicar() ;

      $this->query = "UPDATE plato SET
                        publicar = '$publicar'
                      WHERE plato_id = '$plato_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_plato)
  {
    try{
      $publicar = $bean_plato->getPublicar() ;

      $this->query = "SELECT * FROM plato
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
