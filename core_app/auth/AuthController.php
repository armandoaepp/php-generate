<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class AuthController
{
  private $cnx;

  public function __construct($cnx = null)
  {
    $this->cnx = $cnx;
  }


  public function login($params = array())
  {
    try
    {

      extract($params) ;

      $user  = new User();
      $bean_user = new BeanUser();

      $bean_user->setEmail($email);
      $bean_user->setPassword($password);

      $data = $user->login($bean_user) ;

      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
