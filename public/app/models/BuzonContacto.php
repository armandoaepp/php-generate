<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BuzonContacto extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM buzon_contacto; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_buzon_contacto)
  {
    try{
      $id = $bean_buzon_contacto->getId();
      $nombre = $bean_buzon_contacto->getNombre();
      $dni = $bean_buzon_contacto->getDni();
      $email = $bean_buzon_contacto->getEmail();
      $telefono = $bean_buzon_contacto->getTelefono();
      $fecha = $bean_buzon_contacto->getFecha();

      $this->query = "INSERT INTO buzon_contacto
                      (
                        nombre,
                        dni,
                        email,
                        telefono,
                        fecha
                      )
                      VALUES(
                        '$nombre',
                        '$dni',
                        '$email',
                        '$telefono',
                        '$fecha'
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_buzon_contacto)
  {
    try{
      $id = $bean_buzon_contacto->getId();
      $nombre = $bean_buzon_contacto->getNombre();
      $dni = $bean_buzon_contacto->getDni();
      $email = $bean_buzon_contacto->getEmail();
      $telefono = $bean_buzon_contacto->getTelefono();
      $fecha = $bean_buzon_contacto->getFecha();

      $this->query = "UPDATE buzon_contacto SET 
                        nombre = '$nombre',
                        dni = '$dni',
                        email = '$email',
                        telefono = '$telefono',
                        fecha = '$fecha'
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
  public function find($bean_buzon_contacto)
  {
    try{
      $id = $bean_buzon_contacto->getId();

      $this->query = "SELECT * FROM buzon_contacto WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_buzon_contacto)
  {
    try{
      $id = $bean_buzon_contacto->getId();

      $this->query = "DELETE FROM buzon_contacto
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
