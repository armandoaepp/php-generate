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
  private $cat_codigo;
  private $cat_nombre;
  private $cat_imagen;
  private $cat_publiciar;
  private $cat_estado;

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

  public function setCatCodigo($cat_codigo_)
  {
    $this->cat_codigo = Validation::validate( $cat_codigo_ );
  }

  public function getCatCodigo()
  {
    return $this->cat_codigo;
  }

  public function setCatNombre($cat_nombre_)
  {
    $this->cat_nombre = Validation::validate( $cat_nombre_ );
  }

  public function getCatNombre()
  {
    return $this->cat_nombre;
  }

  public function setCatImagen($cat_imagen_)
  {
    $this->cat_imagen = Validation::validate( $cat_imagen_ );
  }

  public function getCatImagen()
  {
    return $this->cat_imagen;
  }

  public function setCatPubliciar($cat_publiciar_)
  {
    $this->cat_publiciar = Validation::validate( $cat_publiciar_ );
  }

  public function getCatPubliciar()
  {
    return $this->cat_publiciar;
  }

  public function setCatEstado($cat_estado_)
  {
    $this->cat_estado = Validation::validate( $cat_estado_ );
  }

  public function getCatEstado()
  {
    return $this->cat_estado;
  }

}
