<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanHabitacionImg{
  # Constructor
  public function __construct(){}

  # Atributos
  private $habitacion_img_id;
  private $habitacion_id;
  private $jerarquia;
  private $imagen = "" ;
  private $desc_img;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setHabitacionImgId($habitacion_img_id_)
  {
    $this->habitacion_img_id = Validation::validate( $habitacion_img_id_ );
  }

  public function getHabitacionImgId()
  {
    return $this->habitacion_img_id;
  }

  public function setHabitacionId($habitacion_id_)
  {
    $this->habitacion_id = Validation::validate( $habitacion_id_ );
  }

  public function getHabitacionId()
  {
    return $this->habitacion_id;
  }

  public function setJerarquia($jerarquia_)
  {
    $this->jerarquia = Validation::validate( $jerarquia_ );
  }

  public function getJerarquia()
  {
    return $this->jerarquia;
  }

  public function setImagen($imagen_)
  {
    $this->imagen = Validation::validate( $imagen_ );
  }

  public function getImagen()
  {
    return $this->imagen;
  }

  public function setDescImg($desc_img_)
  {
    $this->desc_img = Validation::validate( $desc_img_ );
  }

  public function getDescImg()
  {
    return $this->desc_img;
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
