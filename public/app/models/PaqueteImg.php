<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class PaqueteImg extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM paquete_img; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_paquete_img)
  {
    try{

      $id = $bean_paquete_img->getId();
      $paquete_id = $bean_paquete_img->getPaqueteId();
      $imagen = $bean_paquete_img->getImagen();
      $item = $bean_paquete_img->getItem();
      $estado = $bean_paquete_img->getEstado();

      $this->query = "INSERT INTO paquete_img
                      (
                        paquete_id,
                        imagen,
                        item,
                        estado
                      )
                      VALUES(
                        '$paquete_id',
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
  public function update($bean_paquete_img)
  {
    try{
      $id = $bean_paquete_img->getId();
      $paquete_id = $bean_paquete_img->getPaqueteId();
      $imagen = $bean_paquete_img->getImagen();
      $item = $bean_paquete_img->getItem();

      $this->query = "UPDATE paquete_img SET
                        paquete_id = '$paquete_id',
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

  # Method Buscar por ID
  public function find($bean_paquete_img)
  {
    try{
      $id = $bean_paquete_img->getId();

      $this->query = "SELECT * FROM paquete_img WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_paquete_img)
  {
    try{
      $id = $bean_paquete_img->getId();

      $this->query = "DELETE FROM paquete_img
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method getByEstado
  public function getByEstado($bean_paquete_img)
  {
    try{
      $estado = $bean_paquete_img->getEstado() ;

      $this->query = "SELECT * FROM paquete_img
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
  public function updateEstado($bean_paquete_img)
  {
    try{
      $id = $bean_paquete_img->getId();
      $estado = $bean_paquete_img->getEstado();

      $this->query = "UPDATE paquete_img SET
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

  # Method getPublished
  public function countRows()
  {
    try{

      $this->query = "SELECT count(*) AS num_rows FROM paquete_img;";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method getBypaqueId
  public function getByPaqueId($bean_paquete_img)
  {
    try{
      $paquete_id = $bean_paquete_img->getPaqueteId() ;

      $this->query = "SELECT * FROM paquete_img
                      WHERE paquete_id = '$paquete_id'
                      AND estado = 1
                      ORDER BY item, id ASC; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
  public function updateItem($bean_paquete_img)
  {
    try{
      $id = $bean_paquete_img->getId();
      $item = $bean_paquete_img->getItem();

      $this->query = "UPDATE paquete_img SET
                        item = '$item'
                      WHERE id='$id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
