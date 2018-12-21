<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class UserController
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
            $user  = new User();

            $data = $user->getAll();

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function setUser($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $user  = new User($this->cnx);

            $bean_user = new BeanUser();
            
            $bean_user->setUserId($user_id);
            $bean_user->setNombre($nombre);
            $bean_user->setApellidos($apellidos);
            $bean_user->setEmail($email);
            $bean_user->setPassword($password);
            $bean_user->setCreatedUp($created_up);
            
            $data = $user->save($bean_user) ;

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function updateUser($params = array())
    {
        try
        {
            
            extract($params) ; 

            $user  = new User($this->cnx);
            $bean_user = new BeanUser();
            
            $bean_user->setUserId($user_id);
            $bean_user->setNombre($nombre);
            $bean_user->setApellidos($apellidos);
            $bean_user->setEmail($email);
            $bean_user->setPassword($password);
            $bean_user->setCreatedUp($created_up);

            $data = $user->update($bean_user) ;
            
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

            $user  = new User($this->cnx);
            $bean_user = new BeanUser();
            
            $bean_user->setUserId($user_id);
            $bean_user->setEstado($estado);

            $data = $user->update($bean_user) ;
            
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
            $user  = new User();

            $bean_user = new BeanUser();

            $bean_user->setUserId($id);

            $data = $user->getById( $bean_user) ;

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
            $user  = new User();

            $bean_user = new BeanUser();

            $bean_user->setUserId($id);

            $data = $user->deleteById( $bean_user ) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

}
