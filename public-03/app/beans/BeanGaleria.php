<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanGaleria{
  # Constructor
  public function __construct(){}

  # Atributos
  private $galeria_id;
  private $titulo;
  private $descripcion;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setGaleriaId($galeria_id_)
  {
    $this->galeria_id = Validation::validate( $galeria_id_ );
  }

  public function getGaleriaId()
  {
    return $this->galeria_id;
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
