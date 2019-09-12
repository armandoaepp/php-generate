<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Suscriptor extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM suscriptor; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_suscriptor)
  {
    try{

      $suscriptor_id = $bean_suscriptor->getSuscriptorId();
      $nombre = $bean_suscriptor->getNombre();
      $email = $bean_suscriptor->getEmail();
      $telefono = $bean_suscriptor->getTelefono();
      $empresa = $bean_suscriptor->getEmpresa();
      $mensaje = $bean_suscriptor->getMensaje();
      $estado = $bean_suscriptor->getEstado();
      $created_at = $bean_suscriptor->getCreatedAt();

      $this->query = "INSERT INTO suscriptor
                      (
                        nombre,
                        email,
                        telefono,
                        empresa,
                        mensaje,
                        estado,
                        created_at
                      )
                      VALUES(
                        '$nombre',
                        '$email',
                        '$telefono',
                        '$empresa',
                        '$mensaje',
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
  public function update($bean_suscriptor)
  {
    try{
      $suscriptor_id = $bean_suscriptor->getSuscriptorId();
      $nombre = $bean_suscriptor->getNombre();
      $email = $bean_suscriptor->getEmail();
      $telefono = $bean_suscriptor->getTelefono();
      $empresa = $bean_suscriptor->getEmpresa();
      $mensaje = $bean_suscriptor->getMensaje();

      $this->query = "UPDATE suscriptor SET 
                        nombre = '$nombre',
                        email = '$email',
                        telefono = '$telefono',
                        empresa = '$empresa',
                        mensaje = '$mensaje'
                      WHERE suscriptor_id = '$suscriptor_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_suscriptor)
  {
    try{
      $suscriptor_id = $bean_suscriptor->getSuscriptorId();

      $this->query = "SELECT * FROM suscriptor WHERE suscriptor_id = '$suscriptor_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_suscriptor)
  {
    try{
      $suscriptor_id = $bean_suscriptor->getSuscriptorId();

      $this->query = "DELETE FROM suscriptor
                      WHERE suscriptor_id = '$suscriptor_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_suscriptor)
  {
    try{
      $estado = $bean_suscriptor->getEstado() ;

      $this->query = "SELECT * FROM suscriptor
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_suscriptor)
  {
    try{
      $suscriptor_id = $bean_suscriptor->getSuscriptorId();
      $estado = $bean_suscriptor->getEstado();

      $this->query = "UPDATE suscriptor SET 
                        estado = '$estado'
                      WHERE suscriptor_id='$suscriptor_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
