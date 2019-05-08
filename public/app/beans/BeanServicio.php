<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanServicio{
  # Constructor
  public function __construct(){}

  # Atributos
  private $id;
  private $descripcion;
  private $icono;
  private $incluye;
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

  public function setDescripcion($descripcion_)
  {
    $this->descripcion = Validation::validate( $descripcion_ );
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }

  public function setIcono($icono_)
  {
    $this->icono = Validation::validate( $icono_ );
  }

  public function getIcono()
  {
    return $this->icono;
  }

  public function setIncluye($incluye_)
  {
    $this->incluye = Validation::validate( $incluye_ );
  }

  public function getIncluye()
  {
    return $this->incluye;
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
