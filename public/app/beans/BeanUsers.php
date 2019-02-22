<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanUsers{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $ip_address;
    private $username;
    private $password;
    private $salt;
    private $email;
    private $activation_code;
    private $forgotten_password_code;
    private $forgotten_password_time;
    private $remember_code;
    private $created_on;
    private $last_login;
    private $active;
    private $first_name;
    private $last_name;
    private $company;
    private $phone;
    private $imagen = "" ;

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

    public function setUsername($username_)
    {
        $this->username = Validation::validate( $username_ );
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword($password_)
    {
        $this->password = Validation::validate( $password_ );
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setSalt($salt_)
    {
        $this->salt = Validation::validate( $salt_ );
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function setEmail($email_)
    {
        $this->email = Validation::validate( $email_ );
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setActivationCode($activation_code_)
    {
        $this->activation_code = Validation::validate( $activation_code_ );
    }

    public function getActivationCode()
    {
        return $this->activation_code;
    }

    public function setForgottenPasswordCode($forgotten_password_code_)
    {
        $this->forgotten_password_code = Validation::validate( $forgotten_password_code_ );
    }

    public function getForgottenPasswordCode()
    {
        return $this->forgotten_password_code;
    }

    public function setForgottenPasswordTime($forgotten_password_time_)
    {
        $this->forgotten_password_time = Validation::validate( $forgotten_password_time_ );
    }

    public function getForgottenPasswordTime()
    {
        return $this->forgotten_password_time;
    }

    public function setRememberCode($remember_code_)
    {
        $this->remember_code = Validation::validate( $remember_code_ );
    }

    public function getRememberCode()
    {
        return $this->remember_code;
    }

    public function setCreatedOn($created_on_)
    {
        $this->created_on = Validation::validate( $created_on_ );
    }

    public function getCreatedOn()
    {
        return $this->created_on;
    }

    public function setLastLogin($last_login_)
    {
        $this->last_login = Validation::validate( $last_login_ );
    }

    public function getLastLogin()
    {
        return $this->last_login;
    }

    public function setActive($active_)
    {
        $this->active = Validation::validate( $active_ );
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setFirstName($first_name_)
    {
        $this->first_name = Validation::validate( $first_name_ );
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setLastName($last_name_)
    {
        $this->last_name = Validation::validate( $last_name_ );
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setCompany($company_)
    {
        $this->company = Validation::validate( $company_ );
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setPhone($phone_)
    {
        $this->phone = Validation::validate( $phone_ );
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setImagen($imagen_)
    {
        $this->imagen = Validation::validate( $imagen_ );
    }

    public function getImagen()
    {
        return $this->imagen;
    }

}
