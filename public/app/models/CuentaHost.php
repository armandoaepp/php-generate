<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class CuentaHost extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM cuenta_host; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_cuenta_host)
  {
    try{

      $id = $bean_cuenta_host->getId();
      $propietario_id = $bean_cuenta_host->getPropietarioId();
      $plan_id = $bean_cuenta_host->getPlanId();
      $dominio = $bean_cuenta_host->getDominio();
      $descripcion = $bean_cuenta_host->getDescripcion();
      $solo_host = $bean_cuenta_host->getSoloHost();
      $tiempo_alq = $bean_cuenta_host->getTiempoAlq();
      $facturado = $bean_cuenta_host->getFacturado();
      $estado = $bean_cuenta_host->getEstado();
      $created_at = $bean_cuenta_host->getCreatedAt();
      $updated_at = $bean_cuenta_host->getUpdatedAt();

      $this->query = "INSERT INTO cuenta_host
                      (
                        propietario_id,
                        plan_id,
                        dominio,
                        descripcion,
                        solo_host,
                        tiempo_alq,
                        facturado,
                        estado,
                        created_at,
                        updated_at
                      )
                      VALUES(
                        '$propietario_id',
                        '$plan_id',
                        '$dominio',
                        '$descripcion',
                        '$solo_host',
                        '$tiempo_alq',
                        '$facturado',
                        '$estado',
                        '$created_at',
                        '$updated_at'
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_cuenta_host)
  {
    try{
      $id = $bean_cuenta_host->getId();
      $propietario_id = $bean_cuenta_host->getPropietarioId();
      $plan_id = $bean_cuenta_host->getPlanId();
      $dominio = $bean_cuenta_host->getDominio();
      $descripcion = $bean_cuenta_host->getDescripcion();
      $solo_host = $bean_cuenta_host->getSoloHost();
      $tiempo_alq = $bean_cuenta_host->getTiempoAlq();
      $facturado = $bean_cuenta_host->getFacturado();
      $created_at = $bean_cuenta_host->getCreatedAt();
      $updated_at = $bean_cuenta_host->getUpdatedAt();

      $this->query = "UPDATE cuenta_host SET 
                        propietario_id = '$propietario_id',
                        plan_id = '$plan_id',
                        dominio = '$dominio',
                        descripcion = '$descripcion',
                        solo_host = '$solo_host',
                        tiempo_alq = '$tiempo_alq',
                        facturado = '$facturado',
                        created_at = '$created_at',
                        updated_at = '$updated_at'
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
  public function find($bean_cuenta_host)
  {
    try{
      $id = $bean_cuenta_host->getId();

      $this->query = "SELECT * FROM cuenta_host WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_cuenta_host)
  {
    try{
      $id = $bean_cuenta_host->getId();

      $this->query = "DELETE FROM cuenta_host
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_cuenta_host)
  {
    try{
      $estado = $bean_cuenta_host->getEstado() ;

      $this->query = "SELECT * FROM cuenta_host
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_cuenta_host)
  {
    try{
      $id = $bean_cuenta_host->getId();
      $estado = $bean_cuenta_host->getEstado();

      $this->query = "UPDATE cuenta_host SET 
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
}
