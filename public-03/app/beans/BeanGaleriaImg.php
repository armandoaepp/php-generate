<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanGaleriaImg{
  # Constructor
  public function __construct(){}

  # Atributos
  private $galeria_img_id;
  private $galeria_id;
  private $imagen = "" ;
  private $item;
  private $desc_img;
  private $estado = 1 ;

  #Auto Increment Item
  public $item_autoincrement = true;

  # METODOS
  public function setGaleriaImgId($galeria_img_id_)
  {
    $this->galeria_img_id = Validation::validate( $galeria_img_id_ );
  }

  public function getGaleriaImgId()
  {
    return $this->galeria_img_id;
  }

  public function setGaleriaId($galeria_id_)
  {
    $this->galeria_id = Validation::validate( $galeria_id_ );
  }

  public function getGaleriaId()
  {
    return $this->galeria_id;
  }

  public function setImagen($imagen_)
  {
    $this->imagen = Validation::validate( $imagen_ );
  }

  public function getImagen()
  {
    return $this->imagen;
  }

  public function setItem($item_)
  {
    $this->item = Validation::validate( $item_ );
  }

  public function getItem()
  {
    if(empty($this->item) && $this->item_autoincrement)
    {
      $galeria_img  = new GaleriaImg();
      $data = $galeria_img->countRows() ;
      if(!empty($data))
      {
          $this->item = $data["num_rows"] + 1;
      }
    }
    return $this->item;
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
