<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class PaqueteAdicional extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM paquete_adicional; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_paquete_adicional)
  {
    try{

      $paquete_adicional_id = $bean_paquete_adicional->getPaqueteAdicionalId();
      $paquete_id           = $bean_paquete_adicional->getPaqueteId();
      $adicional_id         = $bean_paquete_adicional->getAdicionalId();
      $estado               = $bean_paquete_adicional->getEstado();
      $created_at           = $bean_paquete_adicional->getCreatedAt();

      $this->query = "INSERT INTO paquete_adicional
                      (
                        paquete_id,
                        adicional_id,
                        estado,
                        created_at
                      )
                      VALUES(
                        '$paquete_id',
                        '$adicional_id',
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
  public function update($bean_paquete_adicional)
  {
    try{
      $paquete_adicional_id = $bean_paquete_adicional->getPaqueteAdicionalId();
      $paquete_id = $bean_paquete_adicional->getPaqueteId();
      $adicional_id = $bean_paquete_adicional->getAdicionalId();

      $this->query = "UPDATE paquete_adicional SET
                        paquete_id = '$paquete_id',
                        adicional_id = '$adicional_id'
                      WHERE paquete_adicional_id = '$paquete_adicional_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_paquete_adicional)
  {
    try{
      $paquete_adicional_id = $bean_paquete_adicional->getPaqueteAdicionalId();

      $this->query = "SELECT * FROM paquete_adicional WHERE paquete_adicional_id = '$paquete_adicional_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_paquete_adicional)
  {
    try{
      $paquete_adicional_id = $bean_paquete_adicional->getPaqueteAdicionalId();

      $this->query = "DELETE FROM paquete_adicional
                      WHERE paquete_adicional_id = '$paquete_adicional_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method getByEstado
  public function getByEstado($bean_paquete_adicional)
  {
    try{
      $estado = $bean_paquete_adicional->getEstado() ;

      $this->query = "SELECT * FROM paquete_adicional
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
  public function updateEstado($bean_paquete_adicional)
  {
    try{
      $paquete_adicional_id = $bean_paquete_adicional->getPaqueteAdicionalId();
      $estado = $bean_paquete_adicional->getEstado();

      $this->query = "UPDATE paquete_adicional SET
                        estado = '$estado'
                      WHERE paquete_adicional_id='$paquete_adicional_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method getByPaqueteId
  public function getByPaqueteId($bean_paquete_adicional)
  {
    try{
      $paquete_id = $bean_paquete_adicional->getPaqueteId() ;

      $this->query = "SELECT * FROM paquete_adicional
                      WHERE paquete_id = '$paquete_id'
                      AND estado = 1; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


}
