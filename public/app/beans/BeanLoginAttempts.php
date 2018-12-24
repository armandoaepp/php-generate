<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanLoginAttempts{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $ip_address;
    private $login;
    private $time;

    # METODOS
    public function setId($id_)
    {
        $this->id = Validation::validate( $id_ );
    }

    public function getId()
    {
        return $this->id;
    }

    public function setIpAddress($ip_address_)
    {
        $this->ip_address = Validation::validate( $ip_address_ );
    }

    public function getIpAddress()
    {
        return $this->ip_address;
    }

    public function setLogin($login_)
    {
        $this->login = Validation::validate( $login_ );
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setTime($time_)
    {
        $this->time = Validation::validate( $time_ );
    }

    public function getTime()
    {
        return $this->time;
    }

}
