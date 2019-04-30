<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanSuscritor{
  # Constructor
  public function __construct(){}

  # Atributos
  private $suscritor_id;
  private $nombre;
  private $email;
  private $telefono;
  private $mensaje;
  private $estado = 1 ;
  private $created_at = NULL ;

  #Auto Increment Item

  # METODOS
  public function setSuscritorId($suscritor_id_)
  {
    $this->suscritor_id = Validation::validate( $suscritor_id_ );
  }

  public function getSuscritorId()
  {
    return $this->suscritor_id;
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
