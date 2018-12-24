<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Users extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM users";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_users)
  {
    try{
      $id = $bean_users->getId();
      $ip_address = $bean_users->getIpAddress();
      $username = $bean_users->getUsername();
      $password = $bean_users->getPassword();
      $salt = $bean_users->getSalt();
      $email = $bean_users->getEmail();
      $activation_code = $bean_users->getActivationCode();
      $forgotten_password_code = $bean_users->getForgottenPasswordCode();
      $forgotten_password_time = $bean_users->getForgottenPasswordTime();
      $remember_code = $bean_users->getRememberCode();
      $created_on = $bean_users->getCreatedOn();
      $last_login = $bean_users->getLastLogin();
      $active = $bean_users->getActive();
      $first_name = $bean_users->getFirstName();
      $last_name = $bean_users->getLastName();
      $company = $bean_users->getCompany();
      $phone = $bean_users->getPhone();
      $imagen = $bean_users->getImagen();

      $this->query = "INSERT INTO users
                      (
                        ip_address,
                        username,
                        password,
                        salt,
                        email,
                        activation_code,
                        forgotten_password_code,
                        forgotten_password_time,
                        remember_code,
                        created_on,
                        last_login,
                        active,
                        first_name,
                        last_name,
                        company,
                        phone,
                        imagen
                      )
                      VALUES(
                        '$ip_address',
                        '$username',
                        '$password',
                        '$salt',
                        '$email',
                        '$activation_code',
                        '$forgotten_password_code',
                        '$forgotten_password_time',
                        '$remember_code',
                        '$created_on',
                        '$last_login',
                        '$active',
                        '$first_name',
                        '$last_name',
                        '$company',
                        '$phone',
                        '$imagen'
                      ); ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Actualizar
  public function update($bean_users)
  {
    try{
      $id = $bean_users->getId();
      $ip_address = $bean_users->getIpAddress();
      $username = $bean_users->getUsername();
      $password = $bean_users->getPassword();
      $salt = $bean_users->getSalt();
      $email = $bean_users->getEmail();
      $activation_code = $bean_users->getActivationCode();
      $forgotten_password_code = $bean_users->getForgottenPasswordCode();
      $forgotten_password_time = $bean_users->getForgottenPasswordTime();
      $remember_code = $bean_users->getRememberCode();
      $created_on = $bean_users->getCreatedOn();
      $last_login = $bean_users->getLastLogin();
      $active = $bean_users->getActive();
      $first_name = $bean_users->getFirstName();
      $last_name = $bean_users->getLastName();
      $company = $bean_users->getCompany();
      $phone = $bean_users->getPhone();
      $imagen = $bean_users->getImagen();

      $this->query = "UPDATE users SET 
                        ip_address = '$ip_address',
                        username = '$username',
                        password = '$password',
                        salt = '$salt',
                        email = '$email',
                        activation_code = '$activation_code',
                        forgotten_password_code = '$forgotten_password_code',
                        forgotten_password_time = '$forgotten_password_time',
                        remember_code = '$remember_code',
                        created_on = '$created_on',
                        last_login = '$last_login',
                        active = '$active',
                        first_name = '$first_name',
                        last_name = '$last_name',
                        company = '$company',
                        phone = '$phone',
                        imagen = '$imagen'
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
  public function find($bean_users)
  {
    try{
      $id = $bean_users->getId();

      $this->query = "SELECT * FROM users WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_users)
  {
    try{
      $id = $bean_users->getId();

      $this->query = "DELETE FROM users
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
