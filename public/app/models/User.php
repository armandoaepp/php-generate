<?php
# Class Model Generada - ByPower @armandaepp
class User extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM user";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_user)
  {
    try{
      $bean_user->setCreatedUp( HelperDate::timestampsBd() );

      $user_id = $bean_user->getUserId();
      $nombre = $bean_user->getNombre();
      $apellidos = $bean_user->getApellidos();
      $email = $bean_user->getEmail();
      $password = $bean_user->getPassword();
      $estado = $bean_user->getEstado();
      $created_up = $bean_user->getCreatedUp();

      $this->query = "INSERT INTO user
                      (
                        nombre,
                        apellidos,
                        email,
                        password,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$nombre',
                        '$apellidos',
                        '$email',
                        '$password',
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
  public function update($bean_user)
  {
    try{
      $user_id = $bean_user->getUserId();
      $nombre = $bean_user->getNombre();
      $apellidos = $bean_user->getApellidos();
      $email = $bean_user->getEmail();
      $password = $bean_user->getPassword();

      $this->query = "UPDATE user SET
                        nombre = '$nombre',
                        apellidos = '$apellidos',
                        email = '$email',
                        password = '$password'
                      WHERE user_id = '$user_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Eliminar(Actualizar Estado)
  public function updateEstado($bean_user)
  {
    try{
      $user_id = $bean_user->getUserId();
      $estado = $bean_user->getEstado();

      $this->query = "UPDATE user SET
                        estado = '$estado'
                      WHERE user_id='$user_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Buscar por ID
  public function find($bean_user)
  {
    try{
      $user_id = $bean_user->getUserId();

      $this->query = "SELECT * FROM user WHERE user_id = '$user_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_user)
  {
    try{
      $user_id = $bean_user->getUserId();

      $this->query = "DELETE FROM user
                      WHERE user_id = '$user_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  public function login($bean_user){

    try{

      // $this->md5Password();

      $email    = $bean_user->getEmail();
      $password = $bean_user->getPassword();
      $estado   = $bean_user->getEstado();

      $password = Encript::md5($password) ;


      $this->query = "SELECT user_id, email, nombre, apellidos FROM user
                      WHERE email = '$email'
                      AND password = '$password'
                      AND estado = $estado
                      LIMIT 1 ;";

      // echo "query: ".$this->query ;

      $this->executeFind();

      $rows = $this->rows ;

      return $rows;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }

  }



}
