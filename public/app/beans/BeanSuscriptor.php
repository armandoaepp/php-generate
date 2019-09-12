<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanSuscriptor{
  # Constructor
  public function __construct(){}

  # Atributos
  private $suscriptor_id;
  private $nombre;
  private $email;
  private $telefono;
  private $empresa;
  private $mensaje;
  private $estado = 1 ;
  private $created_at = NULL ;

  #Auto Increment Item

  # METODOS
  public function setSuscriptorId($suscriptor_id_)
  {
    $this->suscriptor_id = Validation::validate( $suscriptor_id_ );
  }

  public function getSuscriptorId()
  {
    return $this->suscriptor_id;
  }

  public function setNombre($nombre_)
  {
    $this->nombre = Validation::validate( $nombre_ );
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setEmail($email_)
  {
    $this->email = Validation::validate( $email_ );
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setTelefono($telefono_)
  {
    $this->telefono = Validation::validate( $telefono_ );
  }

  public function getTelefono()
  {
    return $this->telefono;
  }

  public function setEmpresa($empresa_)
  {
    $this->empresa = Validation::validate( $empresa_ );
  }

  public function getEmpresa()
  {
    return $this->empresa;
  }

  public function setMensaje($mensaje_)
  {
    $this->mensaje = Validation::validate( $mensaje_ );
  }

  public function getMensaje()
  {
    return $this->mensaje;
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
