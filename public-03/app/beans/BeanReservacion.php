<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanReservacion{
  # Constructor
  public function __construct(){}

  # Atributos
  private $reserva_id;
  private $tipo_habitacion_id;
  private $nombre;
  private $apellidos;
  private $cantidad;
  private $cuidad_origen;
  private $fecha_llegada;
  private $fecha_salida;
  private $telefono;
  private $email;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setReservaId($reserva_id_)
  {
    $this->reserva_id = Validation::validate( $reserva_id_ );
  }

  public function getReservaId()
  {
    return $this->reserva_id;
  }

  public function setTipoHabitacionId($tipo_habitacion_id_)
  {
    $this->tipo_habitacion_id = Validation::validate( $tipo_habitacion_id_ );
  }

  public function getTipoHabitacionId()
  {
    return $this->tipo_habitacion_id;
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

  public function setCantidad($cantidad_)
  {
    $this->cantidad = Validation::validate( $cantidad_ );
  }

  public function getCantidad()
  {
    return $this->cantidad;
  }

  public function setCuidadOrigen($cuidad_origen_)
  {
    $this->cuidad_origen = Validation::validate( $cuidad_origen_ );
  }

  public function getCuidadOrigen()
  {
    return $this->cuidad_origen;
  }

  public function setFechaLlegada($fecha_llegada_)
  {
    $this->fecha_llegada = Validation::validate( $fecha_llegada_ );
  }

  public function getFechaLlegada()
  {
    return $this->fecha_llegada;
  }

  public function setFechaSalida($fecha_salida_)
  {
    $this->fecha_salida = Validation::validate( $fecha_salida_ );
  }

  public function getFechaSalida()
  {
    return $this->fecha_salida;
  }

  public function setTelefono($telefono_)
  {
    $this->telefono = Validation::validate( $telefono_ );
  }

  public function getTelefono()
  {
    return $this->telefono;
  }

  public function setEmail($email_)
  {
    $this->email = Validation::validate( $email_ );
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEstado($estado_)
  {
    $this->estado = Validation::validate( $estado_ );
  }

  public function getEstado()
  {
    return $this->estado;
  }

}
