<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class PaqueteServicio extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM paquete_servicio; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_paquete_servicio)
  {
    try{

      $id = $bean_paquete_servicio->getId();
      $paquete_id = $bean_paquete_servicio->getPaqueteId();
      $servicio_id = $bean_paquete_servicio->getServicioId();
      $tipo = $bean_paquete_servicio->getTipo();
      $estado = $bean_paquete_servicio->getEstado();
      $created_at = $bean_paquete_servicio->getCreatedAt();

      $this->query = "INSERT INTO paquete_servicio
                      (
                        paquete_id,
                        servicio_id,
                        tipo,
                        estado,
                        created_at
                      )
                      VALUES(
                        '$paquete_id',
                        '$servicio_id',
                        '$tipo',
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
  public function update($bean_paquete_servicio)
  {
    try{
      $id = $bean_paquete_servicio->getId();
      $paquete_id = $bean_paquete_servicio->getPaqueteId();
      $servicio_id = $bean_paquete_servicio->getServicioId();
      $tipo = $bean_paquete_servicio->getTipo();

      $this->query = "UPDATE paquete_servicio SET
                        paquete_id = '$paquete_id',
                        servicio_id = '$servicio_id',
                        tipo = '$tipo'
                      WHERE id = '$id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_paquete_servicio)
  {
    try{
      $id = $bean_paquete_servicio->getId();

      $this->query = "SELECT * FROM paquete_servicio WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_paquete_servicio)
  {
    try{
      $id = $bean_paquete_servicio->getId();

      $this->query = "DELETE FROM paquete_servicio
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method getByEstado
  public function getByEstado($bean_paquete_servicio)
  {
    try{
      $estado = $bean_paquete_servicio->getEstado() ;

      $this->query = "SELECT * FROM paquete_servicio
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
  public function updateEstado($bean_paquete_servicio)
  {
    try{
      $id = $bean_paquete_servicio->getId();
      $estado = $bean_paquete_servicio->getEstado();

      $this->query = "UPDATE paquete_servicio SET
                        estado = '$estado'
                      WHERE id='$id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

    # Method getByPaqueteId
    public function getByPaqueteId($bean_paquete_servicio)
    {
      try{
        $paquete_id = $bean_paquete_servicio->getPaqueteId() ;

        $this->query = "SELECT * FROM paquete_servicio
                        WHERE paquete_id = '$paquete_id'
                        AND estado = 1; ";
        // echo $this->query ;
        // echo "<br>";

        $this->executeQuery();

        $data = $this->rows ;

        return $data;

      }catch(exception $e){

        throw new Exception($e->getMessage());

      }
    }


}
