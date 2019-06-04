<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Suscritor extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM suscritor; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_suscritor)
  {
    try{

      // $suscritor_id = $bean_suscritor->getSuscritorId();
      $nombre       = $bean_suscritor->getNombre();
      $email        = $bean_suscritor->getEmail();
      $telefono     = $bean_suscritor->getTelefono();
      $empresa      = $bean_suscritor->getEmpresa();
      $mensaje      = $bean_suscritor->getMensaje();
      $estado       = $bean_suscritor->getEstado();
      $created_at   = $bean_suscritor->getCreatedAt();

      $this->query = "INSERT INTO suscritor
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
  public function update($bean_suscritor)
  {
    try{
      $suscritor_id = $bean_suscritor->getSuscritorId();
      $nombre       = $bean_suscritor->getNombre();
      $email        = $bean_suscritor->getEmail();
      $telefono     = $bean_suscritor->getTelefono();
      $empresa      = $bean_suscritor->getEmpresa();
      $mensaje      = $bean_suscritor->getMensaje();

      $this->query = "UPDATE suscritor SET
                        nombre = '$nombre',
                        email = '$email',
                        telefono = '$telefono',
                        empresa = '$empresa',
                        mensaje = '$mensaje'
                      WHERE suscritor_id = '$suscritor_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_suscritor)
  {
    try{
      $suscritor_id = $bean_suscritor->getSuscritorId();

      $this->query = "SELECT * FROM suscritor WHERE suscritor_id = '$suscritor_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_suscritor)
  {
    try{
      $suscritor_id = $bean_suscritor->getSuscritorId();

      $this->query = "DELETE FROM suscritor
                      WHERE suscritor_id = '$suscritor_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_suscritor)
  {
    try{
      $estado = $bean_suscritor->getEstado() ;

      $this->query = "SELECT * FROM suscritor
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_suscritor)
  {
    try{
      $suscritor_id = $bean_suscritor->getSuscritorId();
      $estado = $bean_suscritor->getEstado();

      $this->query = "UPDATE suscritor SET
                        estado = '$estado'
                      WHERE suscritor_id='$suscritor_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
