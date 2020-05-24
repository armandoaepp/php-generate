<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanComentario{
  # Constructor
  public function __construct(){}

  # Atributos
  private $comentario_id;
  private $email;
  private $mensaje;
  private $calificacion;
  private $estado = 1 ;
  private $created_at = NULL ;

  #Auto Increment Item

  # METODOS
  public function setComentarioId($comentario_id_)
  {
    $this->comentario_id = Validation::validate( $comentario_id_ );
  }

  public function getComentarioId()
  {
    return $this->comentario_id;
  }

  public function setEmail($email_)
  {
    $this->email = Validation::validate( $email_ );
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setMensaje($mensaje_)
  {
    $this->mensaje = Validation::validate( $mensaje_ );
  }

  public function getMensaje()
  {
    return $this->mensaje;
  }

  public function setCalificacion($calificacion_)
  {
    $this->calificacion = Validation::validate( $calificacion_ );
  }

  public function getCalificacion()
  {
    return $this->calificacion;
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
