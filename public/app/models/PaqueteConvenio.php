<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class PaqueteConvenio extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM paquete_convenio; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_paquete_convenio)
  {
    try{

      $paquete_convenio_id = $bean_paquete_convenio->getPaqueteConvenioId();
      $paquete_id = $bean_paquete_convenio->getPaqueteId();
      $convenio_id = $bean_paquete_convenio->getConvenioId();
      $estado = $bean_paquete_convenio->getEstado();

      $this->query = "INSERT INTO paquete_convenio
                      (
                        paquete_id,
                        convenio_id,
                        estado
                      )
                      VALUES(
                        '$paquete_id',
                        '$convenio_id',
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
  public function update($bean_paquete_convenio)
  {
    try{
      $paquete_convenio_id = $bean_paquete_convenio->getPaqueteConvenioId();
      $paquete_id = $bean_paquete_convenio->getPaqueteId();
      $convenio_id = $bean_paquete_convenio->getConvenioId();

      $this->query = "UPDATE paquete_convenio SET
                        paquete_id = '$paquete_id',
                        convenio_id = '$convenio_id'
                      WHERE paquete_convenio_id = '$paquete_convenio_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_paquete_convenio)
  {
    try{
      $paquete_convenio_id = $bean_paquete_convenio->getPaqueteConvenioId();

      $this->query = "SELECT * FROM paquete_convenio WHERE paquete_convenio_id = '$paquete_convenio_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_paquete_convenio)
  {
    try{
      $paquete_convenio_id = $bean_paquete_convenio->getPaqueteConvenioId();

      $this->query = "DELETE FROM paquete_convenio
                      WHERE paquete_convenio_id = '$paquete_convenio_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_paquete_convenio)
  {
    try{
      $estado = $bean_paquete_convenio->getEstado() ;

      $this->query = "SELECT * FROM paquete_convenio
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_paquete_convenio)
  {
    try{
      $paquete_convenio_id = $bean_paquete_convenio->getPaqueteConvenioId();
      $estado = $bean_paquete_convenio->getEstado();

      $this->query = "UPDATE paquete_convenio SET
                        estado = '$estado'
                      WHERE paquete_convenio_id='$paquete_convenio_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method getByPaqueteId
  public function getByPaqueteId($bean_paquete_convenio)
  {
    try{

      $paquete_id = $bean_paquete_convenio->getPaqueteId();

      $this->query = "SELECT
                        paquete_convenio.*,
                        convenio.nombre AS desc_convenio
                      FROM paquete_convenio
                      INNER JOIN convenio ON convenio.convenio_id = paquete_convenio.convenio_id
                      WHERE paquete_convenio.paquete_id = '$paquete_id'
                      AND paquete_convenio.estado = 1; ";

      // echo $this->query."<br>" ;
      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
  public function updateEstadoByPaqueteId($bean_paquete_convenio)
  {
    try{
      $paquete_id = $bean_paquete_convenio->getPaqueteId();
      $estado = $bean_paquete_convenio->getEstado();

      $this->query = "UPDATE paquete_convenio SET
                        estado = '$estado'
                      WHERE paquete_id = '$paquete_id'; ";

      // echo $this->query."<br>" ;

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function getByPaqueteIdConvenioId($bean_paquete_convenio)
  {
    try{

      $paquete_id = $bean_paquete_convenio->getPaqueteId();
      $convenio_id = $bean_paquete_convenio->getConvenioId();

      $this->query = "SELECT * FROM paquete_convenio
                      WHERE convenio_id = '$convenio_id'
                      AND paquete_id = '$paquete_id'
                      LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
