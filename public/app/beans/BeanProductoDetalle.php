<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanProductoDetalle{
  # Constructor
  public function __construct(){}

  # Atributos
  private $producto_detalle_id;
  private $producto_id;
  private $pd_descripcion;
  private $pd_caracteristica;
  private $pd_estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setProductoDetalleId($producto_detalle_id_)
  {
    $this->producto_detalle_id = Validation::validate( $producto_detalle_id_ );
  }

  public function getProductoDetalleId()
  {
    return $this->producto_detalle_id;
  }

  public function setProductoId($producto_id_)
  {
    $this->producto_id = Validation::validate( $producto_id_ );
  }

  public function getProductoId()
  {
    return $this->producto_id;
  }

  public function setPdDescripcion($pd_descripcion_)
  {
    $this->pd_descripcion = Validation::validate( $pd_descripcion_ );
  }

  public function getPdDescripcion()
  {
    return $this->pd_descripcion;
  }

  public function setPdCaracteristica($pd_caracteristica_)
  {
    $this->pd_caracteristica = Validation::validate( $pd_caracteristica_ );
  }

  public function getPdCaracteristica()
  {
    return $this->pd_caracteristica;
  }

  public function setPdEstado($pd_estado_)
  {
    $this->pd_estado = Validation::validate( $pd_estado_ );
  }

  public function getPdEstado()
  {
    return $this->pd_estado;
  }

}
