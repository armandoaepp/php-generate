<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
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

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function setUsersGroups($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $users_groups  = new UsersGroups($this->cnx);

            $bean_users_groups = new BeanUsersGroups();
            
            $bean_users_groups->setId($id);
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

    public function updateUsersGroups($params = array())
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

            $data = $users_groups->update($bean_users_groups) ;
            
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
            $users_groups  = new UsersGroups();

            $bean_users_groups = new BeanUsersGroups();

            $bean_users_groups->setId($id);

            $data = $users_groups->getById( $bean_users_groups) ;

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
