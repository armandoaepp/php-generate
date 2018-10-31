<?php

class AuthController
{
    private $cnx;

    public function __construct($cnx = null){
        $this->cnx = $cnx;
    }

    function login( $params = array() )
    {
        try
        {
          // extraemos todos los parametros
            extract($params);

           $auth = new Auth();

           $auth->email     = $email ;
           $auth->password  = $password ;

           $data = $auth->login();

           return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }




    function getById( $params = array() )
    {
        try
        {
          // extraemos todos los parametros
            extract($params);

           $auth = new AUth();

           $auth->user_id  = $user_id ;
           $data = $auth->getById();

           return $data;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }



}
