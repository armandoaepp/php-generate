<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class UsersGroupsController
{
  private $cnx;

  public function __construct($cnx = null)
  {
    $this->cnx = $cnx;
  }
    
  public function getAll()
  {
    try
    {
      $users_groups  = new UsersGroups();

      $data = $users_groups->getAll();
      $data = Serialize::unSerializeArray($data);
        

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function save($params = array() )
  {
    try
    {
            
      extract($params) ; 

      $users_groups  = new UsersGroups($this->cnx);

      $bean_users_groups = new BeanUsersGroups();
            
      $bean_users_groups->setUserId($user_id);
      $bean_users_groups->setGroupId($group_id);
            
      $data = $users_groups->save($bean_users_groups) ;

      return $data ;
    }
    catch (Exception $e)
    {
        throw new Exception($e->getMessage());
    }
  }

  public function update($params = array())
  {
    try
    {
            
      extract($params) ; 

      $users_groups  = new UsersGroups($this->cnx);
      $bean_users_groups = new BeanUsersGroups();
            
      $bean_users_groups->setId($id);
      $bean_users_groups->setUserId($user_id);
      $bean_users_groups->setGroupId($group_id);

      $data = $users_groups->update($bean_users_groups) ;
            
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function updateEstado($params = array())
  {
    try
    {
            
      extract($params) ; 

      $users_groups  = new UsersGroups($this->cnx);
      $bean_users_groups = new BeanUsersGroups();
            
      $bean_users_groups->setId($id);
      $bean_users_groups->setEstado($estado);

      $data = $users_groups->updateEstado($bean_users_groups) ;
            
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function find($id)
  {
    try
    {
      $users_groups  = new UsersGroups();

      $bean_users_groups = new BeanUsersGroups();

      $bean_users_groups->setId($id);

      $data = $users_groups->find( $bean_users_groups) ;
      $data = Serialize::unSerializeArray($data);
        

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($params)
  {
    try
    {

      extract($params) ;

      $users_groups  = new UsersGroups();

      $bean_users_groups = new BeanUsersGroups();

      $bean_users_groups->setId($id);

      $data = $users_groups->deleteById( $bean_users_groups ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
