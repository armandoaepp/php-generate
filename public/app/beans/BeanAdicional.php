<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanAdicional{
  # Constructor
  public function __construct(){}

  # Atributos
  private $adicional_id;
  private $descripcion;
  private $precio;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setAdicionalId($adicional_id_)
  {
    $this->adicional_id = Validation::validate( $adicional_id_ );
  }

  public function getAdicionalId()
  {
    return $this->adicional_id;
  }

  public function setDescripcion($descripcion_)
  {
    $this->descripcion = Validation::validate( $descripcion_ );
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }

  public function setPrecio($precio_)
  {
    $this->precio = Validation::validate( $precio_ );
  }

  public function getPrecio()
  {
    return $this->precio;
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
