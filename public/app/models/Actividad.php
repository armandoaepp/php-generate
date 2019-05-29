<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Actividad extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM actividad; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_actividad)
  {
    try{

      $actividad_id = $bean_actividad->getActividadId();
      $nombre = $bean_actividad->getNombre();
      $descripcion = $bean_actividad->getDescripcion();
      $horas = $bean_actividad->getHoras();
      $estado = $bean_actividad->getEstado();

      $this->query = "INSERT INTO actividad
                      (
                        nombre,
                        descripcion,
                        horas,
                        estado
                      )
                      VALUES(
                        '$nombre',
                        '$descripcion',
                        '$horas',
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
  public function update($bean_actividad)
  {
    try{
      $actividad_id = $bean_actividad->getActividadId();
      $nombre = $bean_actividad->getNombre();
      $descripcion = $bean_actividad->getDescripcion();
      $horas = $bean_actividad->getHoras();

      $this->query = "UPDATE actividad SET
                        nombre = '$nombre',
                        descripcion = '$descripcion',
                        horas = '$horas'
                      WHERE actividad_id = '$actividad_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_actividad)
  {
    try{
      $actividad_id = $bean_actividad->getActividadId();

      $this->query = "SELECT * FROM actividad WHERE actividad_id = '$actividad_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_actividad)
  {
    try{
      $actividad_id = $bean_actividad->getActividadId();

      $this->query = "DELETE FROM actividad
                      WHERE actividad_id = '$actividad_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method getByEstado
  public function getByEstado($bean_actividad)
  {
    try{
      $estado = $bean_actividad->getEstado() ;

      $this->query = "SELECT * FROM actividad
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
  public function updateEstado($bean_actividad)
  {
    try{
      $actividad_id = $bean_actividad->getActividadId();
      $estado = $bean_actividad->getEstado();

      $this->query = "UPDATE actividad SET
                        estado = '$estado'
                      WHERE actividad_id='$actividad_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
