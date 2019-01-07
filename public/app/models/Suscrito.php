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

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM suscrito";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_suscrito)
  {
    try{
      $bean_suscrito->setCreatedUp( HelperDate::timestampsBd() );

      $id = $bean_suscrito->getId();
      $nombre = $bean_suscrito->getNombre();
      $email = $bean_suscrito->getEmail();
      $telefono = $bean_suscrito->getTelefono();
      $empresa = $bean_suscrito->getEmpresa();
      $mensaje = $bean_suscrito->getMensaje();
      $estado = $bean_suscrito->getEstado();
      $created_up = $bean_suscrito->getCreatedUp();

      $this->query = "INSERT INTO suscrito
                      (
                        nombre,
                        email,
                        telefono,
                        empresa,
                        mensaje,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$nombre',
                        '$email',
                        '$telefono',
                        '$empresa',
                        '$mensaje',
                        '$estado',
                        $created_up
                      ); ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Actualizar
  public function update($bean_suscrito)
  {
    try{
      $id = $bean_suscrito->getId();
      $nombre = $bean_suscrito->getNombre();
      $email = $bean_suscrito->getEmail();
      $telefono = $bean_suscrito->getTelefono();
      $empresa = $bean_suscrito->getEmpresa();
      $mensaje = $bean_suscrito->getMensaje();

      $this->query = "UPDATE suscrito SET 
                        nombre = '$nombre',
                        email = '$email',
                        telefono = '$telefono',
                        empresa = '$empresa',
                        mensaje = '$mensaje'
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

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Buscar por ID
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

  # Método deleteById
  public function deleteById($bean_suscrito)
  {
    try{
      $id = $bean_suscrito->getId();

      $this->query = "DELETE FROM suscrito
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
