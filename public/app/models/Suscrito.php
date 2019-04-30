<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Suscrito extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM suscrito; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_suscrito)
  {
    try{
      $estado = $bean_suscrito->getEstado() ;

      $this->query = "SELECT * FROM suscrito
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_suscrito)
  {
    try{
      $bean_suscrito->setCreatedUp( HelperDate::timestampsBd() );

      $id = $bean_suscrito->getId();
      $nombre = $bean_suscrito->getNombre();
      $asunto = $bean_suscrito->getAsunto();
      $email = $bean_suscrito->getEmail();
      $telefono = $bean_suscrito->getTelefono();
      $empresa = $bean_suscrito->getEmpresa();
      $mensaje = $bean_suscrito->getMensaje();
      $estado = $bean_suscrito->getEstado();
      $created_at = $bean_suscrito->getCreatedUp();

      $this->query = "INSERT INTO suscrito
                      (
                        nombre,
                        asunto,
                        email,
                        telefono,
                        empresa,
                        mensaje,
                        estado,
                        created_at
                      )
                      VALUES(
                        '$nombre',
                        '$asunto',
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
  public function update($bean_suscrito)
  {
    try{
      $id = $bean_suscrito->getId();
      $nombre = $bean_suscrito->getNombre();
      $asunto = $bean_suscrito->getAsunto();
      $email = $bean_suscrito->getEmail();
      $telefono = $bean_suscrito->getTelefono();
      $empresa = $bean_suscrito->getEmpresa();
      $mensaje = $bean_suscrito->getMensaje();

      $this->query = "UPDATE suscrito SET
                        nombre = '$nombre',
                        asunto = '$asunto',
                        email = '$email',
                        telefono = '$telefono',
                        empresa = '$empresa',
                        mensaje = '$mensaje'
                      WHERE id = '$id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
  public function updateEstado($bean_suscrito)
  {
    try{
      $id = $bean_suscrito->getId();
      $estado = $bean_suscrito->getEstado();

      $this->query = "UPDATE suscrito SET
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

  # Method Buscar por ID
  public function find($bean_suscrito)
  {
    try{
      $id = $bean_suscrito->getId();

      $this->query = "SELECT * FROM suscrito WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_suscrito)
  {
    try{
      $id = $bean_suscrito->getId();

      $this->query = "DELETE FROM suscrito
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
