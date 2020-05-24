<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanProductoImg{
  # Constructor
  public function __construct(){}

  # Atributos
  private $producto_img_id;
  private $producto_id;
  private $pi_jerarquia;
  private $pi_imagen = "" ;
  private $pi_descripcion;
  private $pi_estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setProductoImgId($producto_img_id_)
  {
    $this->producto_img_id = Validation::validate( $producto_img_id_ );
  }

  public function getProductoImgId()
  {
    return $this->producto_img_id;
  }

  public function setProductoId($producto_id_)
  {
    $this->producto_id = Validation::validate( $producto_id_ );
  }

  public function getProductoId()
  {
    return $this->producto_id;
  }

  public function setPiJerarquia($pi_jerarquia_)
  {
    $this->pi_jerarquia = Validation::validate( $pi_jerarquia_ );
  }

  public function getPiJerarquia()
  {
    return $this->pi_jerarquia;
  }

  public function setPiImagen($pi_imagen_)
  {
    $this->pi_imagen = Validation::validate( $pi_imagen_ );
  }

  public function getPiImagen()
  {
    return $this->pi_imagen;
  }

  public function setPiDescripcion($pi_descripcion_)
  {
    $this->pi_descripcion = Validation::validate( $pi_descripcion_ );
  }

  public function getPiDescripcion()
  {
    return $this->pi_descripcion;
  }

  public function setPiEstado($pi_estado_)
  {
    $this->pi_estado = Validation::validate( $pi_estado_ );
  }

  public function getPiEstado()
  {
    return $this->pi_estado;
  }

}
