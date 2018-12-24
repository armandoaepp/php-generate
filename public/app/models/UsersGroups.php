<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class UsersGroups extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM users_groups";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_users_groups)
  {
    try{
      $id = $bean_users_groups->getId();
      $user_id = $bean_users_groups->getUserId();
      $group_id = $bean_users_groups->getGroupId();

      $this->query = "INSERT INTO users_groups
                      (
                        user_id,
                        group_id
                      )
                      VALUES(
                        '$user_id',
                        '$group_id'
                      ); ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Actualizar
  public function update($bean_users_groups)
  {
    try{
      $id = $bean_users_groups->getId();
      $user_id = $bean_users_groups->getUserId();
      $group_id = $bean_users_groups->getGroupId();

      $this->query = "UPDATE users_groups SET 
                        user_id = '$user_id',
                        group_id = '$group_id'
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
  public function find($bean_users_groups)
  {
    try{
      $id = $bean_users_groups->getId();

      $this->query = "SELECT * FROM users_groups WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_users_groups)
  {
    try{
      $id = $bean_users_groups->getId();

      $this->query = "DELETE FROM users_groups
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
