<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Habitacion extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM habitacion; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_habitacion)
  {
    try{

      $habitacion_id   = $bean_habitacion->getHabitacionId();
      $nombre          = $bean_habitacion->getNombre();
      $descripcion     = $bean_habitacion->getDescripcion();
      $caracteristicas = $bean_habitacion->getCaracteristicas();
      $precio          = $bean_habitacion->getPrecio();
      $num_visitas     = $bean_habitacion->getNumVisitas();
      $publicar        = $bean_habitacion->getPublicar();
      $estado          = $bean_habitacion->getEstado();
      $created_at      = $bean_habitacion->getCreatedAt();

      $this->query = "INSERT INTO habitacion
                      (
                        nombre,
                        descripcion,
                        caracteristicas,
                        precio,
                        num_visitas,
                        publicar,
                        estado,
                        created_at
                      )
                      VALUES(
                        '$nombre',
                        '$descripcion',
                        '$caracteristicas',
                        '$precio',
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
  public function update($bean_habitacion)
  {
    try{
      $habitacion_id = $bean_habitacion->getHabitacionId();
      $nombre = $bean_habitacion->getNombre();
      $descripcion = $bean_habitacion->getDescripcion();
      $caracteristicas = $bean_habitacion->getCaracteristicas();
      $precio = $bean_habitacion->getPrecio();
      $num_visitas = $bean_habitacion->getNumVisitas();
      $publicar = $bean_habitacion->getPublicar();

      $this->query = "UPDATE habitacion SET
                        nombre = '$nombre',
                        descripcion = '$descripcion',
                        caracteristicas = '$caracteristicas',
                        precio = '$precio',
                        num_visitas = '$num_visitas',
                        publicar = '$publicar'
                      WHERE habitacion_id = '$habitacion_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_habitacion)
  {
    try{
      $habitacion_id = $bean_habitacion->getHabitacionId();

      $this->query = "SELECT * FROM habitacion WHERE habitacion_id = '$habitacion_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_habitacion)
  {
    try{
      $habitacion_id = $bean_habitacion->getHabitacionId();

      $this->query = "DELETE FROM habitacion
                      WHERE habitacion_id = '$habitacion_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_habitacion)
  {
    try{
      $estado = $bean_habitacion->getEstado() ;

      $this->query = "SELECT * FROM habitacion
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_habitacion)
  {
    try{
      $habitacion_id = $bean_habitacion->getHabitacionId();
      $estado = $bean_habitacion->getEstado();

      $this->query = "UPDATE habitacion SET
                        estado = '$estado'
                      WHERE habitacion_id='$habitacion_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      // $data = $this->status  ;
      $id = $this->lastInsertId();

      // $data = $this->status  ;
      $data = $id  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method updatePublish
  public function updatePublish($bean_habitacion)
  {
    try{
      $habitacion_id = $bean_habitacion->getHabitacionId();
      $publicar = $bean_habitacion->getPublicar() ;

      $this->query = "UPDATE habitacion SET
                        publicar = '$publicar'
                      WHERE habitacion_id = '$habitacion_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_habitacion)
  {
    try{
      $publicar = $bean_habitacion->getPublicar() ;

      $this->query = "SELECT * FROM habitacion
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
