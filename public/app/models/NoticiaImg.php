<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class NoticiaImg extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM noticia_img; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method getByNoticiaId
  public function getByNoticiaId($bean_noticia_img)
  {
    try{
      $noticia_id = $bean_noticia_img->getNoticiaId();

      $this->query = "SELECT * FROM noticia_img
                      WHERE estado = 1
                      AND noticia_id = '$noticia_id'
                      ORDER BY item, id ASC ";

      $this->executeQuery();

      $rows = $this->rows ;

      return $rows;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }

  }

  # Method getByEstado
  public function getByEstado($bean_noticia_img)
  {
    try{
      $estado = $bean_noticia_img->getEstado() ;

      $this->query = "SELECT * FROM noticia_img
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_noticia_img)
  {
    try{
      $bean_noticia_img->setCreatedUp( HelperDate::timestampsBd() );

      $id = $bean_noticia_img->getId();
      $noticia_id = $bean_noticia_img->getNoticiaId();
      $imagen = $bean_noticia_img->getImagen();
      $item = $bean_noticia_img->getItem();
      $estado = $bean_noticia_img->getEstado();
      $created_up = $bean_noticia_img->getCreatedUp();

      $this->query = "INSERT INTO noticia_img
                      (
                        noticia_id,
                        imagen,
                        item,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$noticia_id',
                        '$imagen',
                        '$item',
                        '$estado',
                        $created_up
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_noticia_img)
  {
    try{
      $id = $bean_noticia_img->getId();
      $noticia_id = $bean_noticia_img->getNoticiaId();
      $imagen = $bean_noticia_img->getImagen();
      $item = $bean_noticia_img->getItem();

      $this->query = "UPDATE noticia_img SET
                        noticia_id = '$noticia_id',
                        imagen = '$imagen',
                        item = '$item'
                      WHERE id = '$id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
  public function updateEstado($bean_noticia_img)
  {
    try{
      $id = $bean_noticia_img->getId();
      $estado = $bean_noticia_img->getEstado();

      $this->query = "UPDATE noticia_img SET
                        estado = '$estado'
                      WHERE id='$id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_noticia_img)
  {
    try{
      $id = $bean_noticia_img->getId();

      $this->query = "SELECT * FROM noticia_img WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_noticia_img)
  {
    try{
      $id = $bean_noticia_img->getId();

      $this->query = "DELETE FROM noticia_img
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  public function updateItem($bean_noticia_img){

    try{

      $id   = $bean_noticia_img->getId();
      $item = $bean_noticia_img->getItem();

      $this->query = "UPDATE noticia_img
                      SET item = '$item'
                      WHERE id = '$id';";

      $this->executeQuery();

      $status = $this->status ;

      return $status;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }

  }

}
