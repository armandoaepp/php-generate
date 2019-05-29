<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanItinerario{
  # Constructor
  public function __construct(){}

  # Atributos
  private $id;
  private $paquete_id;
  private $dia;
  private $titulo;
  private $descripcion;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setId($id_)
  {
    $this->id = Validation::validate( $id_ );
  }

  public function getId()
  {
    return $this->id;
  }

  public function setPaqueteId($paquete_id_)
  {
    $this->paquete_id = Validation::validate( $paquete_id_ );
  }

  public function getPaqueteId()
  {
    return $this->paquete_id;
  }

  public function setDia($dia_)
  {
    $this->dia = Validation::validate( $dia_ );
  }

  public function getDia()
  {
    return $this->dia;
  }

  public function setTitulo($titulo_)
  {
    $this->titulo = Validation::validate( $titulo_ );
  }

  public function getTitulo()
  {
    return $this->titulo;
  }

  public function setDescripcion($descripcion_)
  {
    $this->descripcion = Validation::validate( $descripcion_ );
  }

  public function getDescripcion()
  {
    return $this->descripcion;
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
