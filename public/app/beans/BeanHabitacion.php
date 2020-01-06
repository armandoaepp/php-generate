<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanHabitacion{
  # Constructor
  public function __construct(){}

  # Atributos
  private $habitacion_id;
  private $nombre;
  private $descripcion;
  private $caracteristicas;
  private $precio;
  private $num_visitas;
  private $publicar = "S" ;
  private $estado = 1 ;
  private $created_at = NULL ;

  #Auto Increment Item

  # METODOS
  public function setHabitacionId($habitacion_id_)
  {
    $this->habitacion_id = Validation::validate( $habitacion_id_ );
  }

  public function getHabitacionId()
  {
    return $this->habitacion_id;
  }

  public function setNombre($nombre_)
  {
    $this->nombre = Validation::validate( $nombre_ );
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setDescripcion($descripcion_)
  {
    $this->descripcion = Validation::validate( $descripcion_ );
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }

  public function setCaracteristicas($caracteristicas_)
  {
    $this->caracteristicas = Validation::validate( $caracteristicas_ );
  }

  public function getCaracteristicas()
  {
    return $this->caracteristicas;
  }

  public function setPrecio($precio_)
  {
    $this->precio = Validation::validate( $precio_ );
  }

  public function getPrecio()
  {
    return $this->precio;
  }

  public function setNumVisitas($num_visitas_)
  {
    $this->num_visitas = Validation::validate( $num_visitas_ );
  }

  public function getNumVisitas()
  {
    return $this->num_visitas;
  }

  public function setPublicar($publicar_)
  {
    $this->publicar = Validation::validate( $publicar_ );
  }

  public function getPublicar()
  {
    return $this->publicar;
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
