<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class LoginAttemptsController
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
            $login_attempts  = new LoginAttempts();

            $data = $login_attempts->getAll();

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function setLoginAttempts($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $login_attempts  = new LoginAttempts($this->cnx);

            $bean_login_attempts = new BeanLoginAttempts();
            
            $bean_login_attempts->setId($id);
            $bean_login_attempts->setIpAddress($ip_address);
            $bean_login_attempts->setLogin($login);
            $bean_login_attempts->setTime($time);
            
            $data = $login_attempts->save($bean_login_attempts) ;

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function updateLoginAttempts($params = array())
    {
        try
        {
            
            extract($params) ; 

            $login_attempts  = new LoginAttempts($this->cnx);
            $bean_login_attempts = new BeanLoginAttempts();
            
            $bean_login_attempts->setId($id);
            $bean_login_attempts->setIpAddress($ip_address);
            $bean_login_attempts->setLogin($login);
            $bean_login_attempts->setTime($time);

            $data = $login_attempts->update($bean_login_attempts) ;
            
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

            $login_attempts  = new LoginAttempts($this->cnx);
            $bean_login_attempts = new BeanLoginAttempts();
            
            $bean_login_attempts->setId($id);
            $bean_login_attempts->setEstado($estado);

            $data = $login_attempts->update($bean_login_attempts) ;
            
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

    public function getById($id)
    {
        try
        {
            $login_attempts  = new LoginAttempts();

            $bean_login_attempts = new BeanLoginAttempts();

            $bean_login_attempts->setId($id);

            $data = $login_attempts->getById( $bean_login_attempts) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function deleteById($id)
    {
        try
        {
            $login_attempts  = new LoginAttempts();

            $bean_login_attempts = new BeanLoginAttempts();

            $bean_login_attempts->setId($id);

            $data = $login_attempts->deleteById( $bean_login_attempts ) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

}
