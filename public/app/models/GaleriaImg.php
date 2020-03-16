<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class GaleriaImg extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM galeria_img; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_galeria_img)
  {
    try{

      $galeria_img_id = $bean_galeria_img->getGaleriaImgId();
      $imagen = $bean_galeria_img->getImagen();
      $item = $bean_galeria_img->getItem();
      $estado = $bean_galeria_img->getEstado();

      $this->query = "INSERT INTO galeria_img
                      (
                        imagen,
                        item,
                        estado
                      )
                      VALUES(
                        '$imagen',
                        '$item',
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
  public function update($bean_galeria_img)
  {
    try{
      $galeria_img_id = $bean_galeria_img->getGaleriaImgId();
      $imagen = $bean_galeria_img->getImagen();
      $item = $bean_galeria_img->getItem();

      $this->query = "UPDATE galeria_img SET 
                        imagen = '$imagen',
                        item = '$item'
                      WHERE galeria_img_id = '$galeria_img_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_galeria_img)
  {
    try{
      $galeria_img_id = $bean_galeria_img->getGaleriaImgId();

      $this->query = "SELECT * FROM galeria_img WHERE galeria_img_id = '$galeria_img_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_galeria_img)
  {
    try{
      $galeria_img_id = $bean_galeria_img->getGaleriaImgId();

      $this->query = "DELETE FROM galeria_img
                      WHERE galeria_img_id = '$galeria_img_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_galeria_img)
  {
    try{
      $estado = $bean_galeria_img->getEstado() ;

      $this->query = "SELECT * FROM galeria_img
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_galeria_img)
  {
    try{
      $galeria_img_id = $bean_galeria_img->getGaleriaImgId();
      $estado = $bean_galeria_img->getEstado();

      $this->query = "UPDATE galeria_img SET 
                        estado = '$estado'
                      WHERE galeria_img_id='$galeria_img_id'
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

      $this->query = "SELECT count(*) AS num_rows FROM galeria_img;";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
