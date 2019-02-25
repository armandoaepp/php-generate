<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class UsersController
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
      $users  = new Users();

      $data = $users->getAll();
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

      $users  = new Users($this->cnx);

      $bean_users = new BeanUsers();
            
      $bean_users->setIpAddress($ip_address);
      $bean_users->setUsername($username);
      $bean_users->setPassword($password);
      $bean_users->setSalt($salt);
      $bean_users->setEmail($email);
      $bean_users->setActivationCode($activation_code);
      $bean_users->setForgottenPasswordCode($forgotten_password_code);
      $bean_users->setForgottenPasswordTime($forgotten_password_time);
      $bean_users->setRememberCode($remember_code);
      $bean_users->setCreatedOn($created_on);
      $bean_users->setLastLogin($last_login);
      $bean_users->setActive($active);
      $bean_users->setFirstName($first_name);
      $bean_users->setLastName($last_name);
      $bean_users->setCompany($company);
      $bean_users->setPhone($phone);
      $bean_users->setImagen($imagen);
            
      $data = $users->save($bean_users) ;

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

      $users  = new Users($this->cnx);
      $bean_users = new BeanUsers();
            
      $bean_users->setId($id);
      $bean_users->setIpAddress($ip_address);
      $bean_users->setUsername($username);
      $bean_users->setPassword($password);
      $bean_users->setSalt($salt);
      $bean_users->setEmail($email);
      $bean_users->setActivationCode($activation_code);
      $bean_users->setForgottenPasswordCode($forgotten_password_code);
      $bean_users->setForgottenPasswordTime($forgotten_password_time);
      $bean_users->setRememberCode($remember_code);
      $bean_users->setCreatedOn($created_on);
      $bean_users->setLastLogin($last_login);
      $bean_users->setActive($active);
      $bean_users->setFirstName($first_name);
      $bean_users->setLastName($last_name);
      $bean_users->setCompany($company);
      $bean_users->setPhone($phone);
      $bean_users->setImagen($imagen);

      $data = $users->update($bean_users) ;
            
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

      $users  = new Users($this->cnx);
      $bean_users = new BeanUsers();
            
      $bean_users->setId($id);
      $bean_users->setEstado($estado);

      $data = $users->updateEstado($bean_users) ;
            
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
      $users  = new Users();

      $bean_users = new BeanUsers();

      $bean_users->setId($id);

      $data = $users->find( $bean_users) ;
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

      $users  = new Users();

      $bean_users = new BeanUsers();

      $bean_users->setId($id);

      $data = $users->deleteById( $bean_users ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
