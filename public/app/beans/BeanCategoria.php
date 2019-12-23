<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanCategoria{
  # Constructor
  public function __construct(){}

  # Atributos
  private $categoria_id;
  private $desc_categoria;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setCategoriaId($categoria_id_)
  {
    $this->categoria_id = Validation::validate( $categoria_id_ );
  }

  public function getCategoriaId()
  {
    return $this->categoria_id;
  }

  public function setDescCategoria($desc_categoria_)
  {
    $this->desc_categoria = Validation::validate( $desc_categoria_ );
  }

  public function getDescCategoria()
  {
    return $this->desc_categoria;
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
