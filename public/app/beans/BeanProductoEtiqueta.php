<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanProductoEtiqueta{
  # Constructor
  public function __construct(){}

  # Atributos
  private $producto_etiqueta_id;
  private $producto_id;
  private $etiqueta_id;
  private $pe_estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setProductoEtiquetaId($producto_etiqueta_id_)
  {
    $this->producto_etiqueta_id = Validation::validate( $producto_etiqueta_id_ );
  }

  public function getProductoEtiquetaId()
  {
    return $this->producto_etiqueta_id;
  }

  public function setProductoId($producto_id_)
  {
    $this->producto_id = Validation::validate( $producto_id_ );
  }

  public function getProductoId()
  {
    return $this->producto_id;
  }

  public function setEtiquetaId($etiqueta_id_)
  {
    $this->etiqueta_id = Validation::validate( $etiqueta_id_ );
  }

  public function getEtiquetaId()
  {
    return $this->etiqueta_id;
  }

  public function setPeEstado($pe_estado_)
  {
    $this->pe_estado = Validation::validate( $pe_estado_ );
  }

  public function getPeEstado()
  {
    return $this->pe_estado;
  }

}
