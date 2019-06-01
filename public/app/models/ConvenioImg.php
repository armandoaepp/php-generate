<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class ConvenioImg extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM convenio_img; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_convenio_img)
  {
    try{

      $cnvenio_img_id = $bean_convenio_img->getCnvenioImgId();
      $convenio_id = $bean_convenio_img->getConvenioId();
      $imagen = $bean_convenio_img->getImagen();
      $item = $bean_convenio_img->getItem();
      $desc_img = $bean_convenio_img->getDescImg();
      $estado = $bean_convenio_img->getEstado();

      $this->query = "INSERT INTO convenio_img
                      (
                        convenio_id,
                        imagen,
                        item,
                        desc_img,
                        estado
                      )
                      VALUES(
                        '$convenio_id',
                        '$imagen',
                        '$item',
                        '$desc_img',
                        '$estado'
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_convenio_img)
  {
    try{
      $cnvenio_img_id = $bean_convenio_img->getCnvenioImgId();
      $convenio_id = $bean_convenio_img->getConvenioId();
      $imagen = $bean_convenio_img->getImagen();
      $item = $bean_convenio_img->getItem();
      $desc_img = $bean_convenio_img->getDescImg();

      $this->query = "UPDATE convenio_img SET 
                        convenio_id = '$convenio_id',
                        imagen = '$imagen',
                        item = '$item',
                        desc_img = '$desc_img'
                      WHERE cnvenio_img_id = '$cnvenio_img_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_convenio_img)
  {
    try{
      $cnvenio_img_id = $bean_convenio_img->getCnvenioImgId();

      $this->query = "SELECT * FROM convenio_img WHERE cnvenio_img_id = '$cnvenio_img_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_convenio_img)
  {
    try{
      $cnvenio_img_id = $bean_convenio_img->getCnvenioImgId();

      $this->query = "DELETE FROM convenio_img
                      WHERE cnvenio_img_id = '$cnvenio_img_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_convenio_img)
  {
    try{
      $estado = $bean_convenio_img->getEstado() ;

      $this->query = "SELECT * FROM convenio_img
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_convenio_img)
  {
    try{
      $cnvenio_img_id = $bean_convenio_img->getCnvenioImgId();
      $estado = $bean_convenio_img->getEstado();

      $this->query = "UPDATE convenio_img SET 
                        estado = '$estado'
                      WHERE cnvenio_img_id='$cnvenio_img_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method getPublished
  public function countRows()
  {
    try{

      $this->query = "SELECT count(*) AS num_rows FROM convenio_img;";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
