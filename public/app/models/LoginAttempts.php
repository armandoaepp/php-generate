<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class LoginAttempts extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM login_attempts";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_login_attempts)
  {
    try{
      $id = $bean_login_attempts->getId();
      $ip_address = $bean_login_attempts->getIpAddress();
      $login = $bean_login_attempts->getLogin();
      $time = $bean_login_attempts->getTime();

      $this->query = "INSERT INTO login_attempts
                      (
                        ip_address,
                        login,
                        time
                      )
                      VALUES(
                        '$ip_address',
                        '$login',
                        '$time'
                      ); ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Actualizar
  public function update($bean_login_attempts)
  {
    try{
      $id = $bean_login_attempts->getId();
      $ip_address = $bean_login_attempts->getIpAddress();
      $login = $bean_login_attempts->getLogin();
      $time = $bean_login_attempts->getTime();

      $this->query = "UPDATE login_attempts SET 
                        ip_address = '$ip_address',
                        login = '$login',
                        time = '$time'
                      WHERE id = '$id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Buscar por ID
  public function find($bean_login_attempts)
  {
    try{
      $id = $bean_login_attempts->getId();

      $this->query = "SELECT * FROM login_attempts WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_login_attempts)
  {
    try{
      $id = $bean_login_attempts->getId();

      $this->query = "DELETE FROM login_attempts
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
