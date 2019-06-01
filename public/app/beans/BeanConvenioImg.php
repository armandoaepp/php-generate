<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanConvenioImg{
  # Constructor
  public function __construct(){}

  # Atributos
  private $cnvenio_img_id;
  private $convenio_id;
  private $imagen = "" ;
  private $item;
  private $desc_img;
  private $estado = 1 ;

  #Auto Increment Item
  public $item_autoincrement = true;

  # METODOS
  public function setCnvenioImgId($cnvenio_img_id_)
  {
    $this->cnvenio_img_id = Validation::validate( $cnvenio_img_id_ );
  }

  public function getCnvenioImgId()
  {
    return $this->cnvenio_img_id;
  }

  public function setConvenioId($convenio_id_)
  {
    $this->convenio_id = Validation::validate( $convenio_id_ );
  }

  public function getConvenioId()
  {
    return $this->convenio_id;
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
      $convenio_img  = new ConvenioImg();
      $data = $convenio_img->countRows() ;
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
