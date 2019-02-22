<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Buzon extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM buzon";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_buzon)
  {
    try{
      $id = $bean_buzon->getId();
      $nombres = $bean_buzon->getNombres();
      $telefono = $bean_buzon->getTelefono();
      $email = $bean_buzon->getEmail();
      $mensaje = $bean_buzon->getMensaje();
      $estado = $bean_buzon->getEstado();
      $fecha = $bean_buzon->getFecha();

      $this->query = "INSERT INTO buzon
                      (
                        nombres,
                        telefono,
                        email,
                        mensaje,
                        estado,
                        fecha
                      )
                      VALUES(
                        '$nombres',
                        '$telefono',
                        '$email',
                        '$mensaje',
                        '$estado',
                        '$fecha'
                      ); ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Actualizar
  public function update($bean_buzon)
  {
    try{
      $id = $bean_buzon->getId();
      $nombres = $bean_buzon->getNombres();
      $telefono = $bean_buzon->getTelefono();
      $email = $bean_buzon->getEmail();
      $mensaje = $bean_buzon->getMensaje();
      $fecha = $bean_buzon->getFecha();

      $this->query = "UPDATE buzon SET 
                        nombres = '$nombres',
                        telefono = '$telefono',
                        email = '$email',
                        mensaje = '$mensaje',
                        fecha = '$fecha'
                      WHERE id = '$id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Eliminar(Actualizar Estado)
  public function updateEstado($bean_buzon)
  {
    try{
      $id = $bean_buzon->getId();
      $estado = $bean_buzon->getEstado();

      $this->query = "UPDATE buzon SET 
                        estado = '$estado'
                      WHERE id='$id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Buscar por ID
  public function find($bean_buzon)
  {
    try{
      $id = $bean_buzon->getId();

      $this->query = "SELECT * FROM buzon WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_buzon)
  {
    try{
      $id = $bean_buzon->getId();

      $this->query = "DELETE FROM buzon
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}