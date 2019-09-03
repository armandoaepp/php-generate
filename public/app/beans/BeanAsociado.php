<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanAsociado{
  # Constructor
  public function __construct(){}

  # Atributos
  private $user_id;
  private $nombre;
  private $apellidos;
  private $email;
  private $password;
  private $empresa;
  private $telefono;
  private $estado = 1 ;
  private $created_at = NULL ;

  #Auto Increment Item

  # METODOS
  public function setUserId($user_id_)
  {
    $this->user_id = Validation::validate( $user_id_ );
  }

  public function getUserId()
  {
    return $this->user_id;
  }

  public function setNombre($nombre_)
  {
    $this->nombre = Validation::validate( $nombre_ );
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setApellidos($apellidos_)
  {
    $this->apellidos = Validation::validate( $apellidos_ );
  }

  public function getApellidos()
  {
    return $this->apellidos;
  }

  public function setEmail($email_)
  {
    $this->email = Validation::validate( $email_ );
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setPassword($password_)
  {
    $this->password = Validation::validate( $password_ );
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setEmpresa($empresa_)
  {
    $this->empresa = Validation::validate( $empresa_ );
  }

  public function getEmpresa()
  {
    return $this->empresa;
  }

  public function setTelefono($telefono_)
  {
    $this->telefono = Validation::validate( $telefono_ );
  }

  public function getTelefono()
  {
    return $this->telefono;
  }

  public function setEstado($estado_)
  {
    $this->estado = Validation::validate( $estado_ );
  }

  public function getEstado()
  {
    return $this->estado;
  }

  public function setCreatedAt($created_at_)
  {
    $this->created_at = Validation::validate( $created_at_ );
  }

  public function getCreatedAt()
  {
    if(empty($this->created_at))
    {
      $this->created_at = HelperDate::timestampsBd();
    }
    return $this->created_at;
  }

}
