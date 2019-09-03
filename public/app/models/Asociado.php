<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Asociado extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM asociado; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_asociado)
  {
    try{

      $user_id = $bean_asociado->getUserId();
      $nombre = $bean_asociado->getNombre();
      $apellidos = $bean_asociado->getApellidos();
      $email = $bean_asociado->getEmail();
      $password = $bean_asociado->getPassword();
      $empresa = $bean_asociado->getEmpresa();
      $telefono = $bean_asociado->getTelefono();
      $estado = $bean_asociado->getEstado();
      $created_at = $bean_asociado->getCreatedAt();

      $this->query = "INSERT INTO asociado
                      (
                        nombre,
                        apellidos,
                        email,
                        password,
                        empresa,
                        telefono,
                        estado,
                        created_at
                      )
                      VALUES(
                        '$nombre',
                        '$apellidos',
                        '$email',
                        '$password',
                        '$empresa',
                        '$telefono',
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
  public function update($bean_asociado)
  {
    try{
      $user_id = $bean_asociado->getUserId();
      $nombre = $bean_asociado->getNombre();
      $apellidos = $bean_asociado->getApellidos();
      $email = $bean_asociado->getEmail();
      $password = $bean_asociado->getPassword();
      $empresa = $bean_asociado->getEmpresa();
      $telefono = $bean_asociado->getTelefono();

      $this->query = "UPDATE asociado SET 
                        nombre = '$nombre',
                        apellidos = '$apellidos',
                        email = '$email',
                        password = '$password',
                        empresa = '$empresa',
                        telefono = '$telefono'
                      WHERE user_id = '$user_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_asociado)
  {
    try{
      $user_id = $bean_asociado->getUserId();

      $this->query = "SELECT * FROM asociado WHERE user_id = '$user_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_asociado)
  {
    try{
      $user_id = $bean_asociado->getUserId();

      $this->query = "DELETE FROM asociado
                      WHERE user_id = '$user_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_asociado)
  {
    try{
      $estado = $bean_asociado->getEstado() ;

      $this->query = "SELECT * FROM asociado
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_asociado)
  {
    try{
      $user_id = $bean_asociado->getUserId();
      $estado = $bean_asociado->getEstado();

      $this->query = "UPDATE asociado SET 
                        estado = '$estado'
                      WHERE user_id='$user_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
