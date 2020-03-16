<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class TipoHabitacion extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM tipo_habitacion; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_tipo_habitacion)
  {
    try{

      $tipo_habitacion_id = $bean_tipo_habitacion->getTipoHabitacionId();
      $nombre = $bean_tipo_habitacion->getNombre();
      $estado = $bean_tipo_habitacion->getEstado();

      $this->query = "INSERT INTO tipo_habitacion
                      (
                        nombre,
                        estado
                      )
                      VALUES(
                        '$nombre',
                        '$estado'
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_tipo_habitacion)
  {
    try{
      $tipo_habitacion_id = $bean_tipo_habitacion->getTipoHabitacionId();
      $nombre = $bean_tipo_habitacion->getNombre();

      $this->query = "UPDATE tipo_habitacion SET 
                        nombre = '$nombre'
                      WHERE tipo_habitacion_id = '$tipo_habitacion_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_tipo_habitacion)
  {
    try{
      $tipo_habitacion_id = $bean_tipo_habitacion->getTipoHabitacionId();

      $this->query = "SELECT * FROM tipo_habitacion WHERE tipo_habitacion_id = '$tipo_habitacion_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_tipo_habitacion)
  {
    try{
      $tipo_habitacion_id = $bean_tipo_habitacion->getTipoHabitacionId();

      $this->query = "DELETE FROM tipo_habitacion
                      WHERE tipo_habitacion_id = '$tipo_habitacion_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_tipo_habitacion)
  {
    try{
      $estado = $bean_tipo_habitacion->getEstado() ;

      $this->query = "SELECT * FROM tipo_habitacion
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_tipo_habitacion)
  {
    try{
      $tipo_habitacion_id = $bean_tipo_habitacion->getTipoHabitacionId();
      $estado = $bean_tipo_habitacion->getEstado();

      $this->query = "UPDATE tipo_habitacion SET 
                        estado = '$estado'
                      WHERE tipo_habitacion_id='$tipo_habitacion_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
