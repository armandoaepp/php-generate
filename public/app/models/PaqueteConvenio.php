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
      $paquete_paquete_id = $bean_paquete_convenio->getPaquetePaqueteId();
      $convenio_convenio_id = $bean_paquete_convenio->getConvenioConvenioId();
      $estado = $bean_paquete_convenio->getEstado();

      $this->query = "INSERT INTO paquete_convenio
                      (
                        paquete_paquete_id,
                        convenio_convenio_id,
                        estado
                      )
                      VALUES(
                        '$paquete_paquete_id',
                        '$convenio_convenio_id',
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
      $paquete_paquete_id = $bean_paquete_convenio->getPaquetePaqueteId();
      $convenio_convenio_id = $bean_paquete_convenio->getConvenioConvenioId();

      $this->query = "UPDATE paquete_convenio SET 
                        paquete_paquete_id = '$paquete_paquete_id',
                        convenio_convenio_id = '$convenio_convenio_id'
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
}
