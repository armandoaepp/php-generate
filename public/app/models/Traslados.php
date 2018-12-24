<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Traslados extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM traslados";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_traslados)
  {
    try{
      $id = $bean_traslados->getId();
      $titulo = $bean_traslados->getTitulo();
      $imagen = $bean_traslados->getImagen();
      $presentacion = $bean_traslados->getPresentacion();
      $item1 = $bean_traslados->getItem1();
      $item2 = $bean_traslados->getItem2();
      $item3 = $bean_traslados->getItem3();
      $item4 = $bean_traslados->getItem4();
      $descitem1 = $bean_traslados->getDescitem1();
      $descitem2 = $bean_traslados->getDescitem2();
      $descitem3 = $bean_traslados->getDescitem3();
      $descitem4 = $bean_traslados->getDescitem4();
      $promocion = $bean_traslados->getPromocion();

      $this->query = "INSERT INTO traslados
                      (
                        titulo,
                        imagen,
                        presentacion,
                        item1,
                        item2,
                        item3,
                        item4,
                        descitem1,
                        descitem2,
                        descitem3,
                        descitem4,
                        promocion
                      )
                      VALUES(
                        '$titulo',
                        '$imagen',
                        '$presentacion',
                        '$item1',
                        '$item2',
                        '$item3',
                        '$item4',
                        '$descitem1',
                        '$descitem2',
                        '$descitem3',
                        '$descitem4',
                        '$promocion'
                      ); ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Actualizar
  public function update($bean_traslados)
  {
    try{
      $id = $bean_traslados->getId();
      $titulo = $bean_traslados->getTitulo();
      $imagen = $bean_traslados->getImagen();
      $presentacion = $bean_traslados->getPresentacion();
      $item1 = $bean_traslados->getItem1();
      $item2 = $bean_traslados->getItem2();
      $item3 = $bean_traslados->getItem3();
      $item4 = $bean_traslados->getItem4();
      $descitem1 = $bean_traslados->getDescitem1();
      $descitem2 = $bean_traslados->getDescitem2();
      $descitem3 = $bean_traslados->getDescitem3();
      $descitem4 = $bean_traslados->getDescitem4();
      $promocion = $bean_traslados->getPromocion();

      $this->query = "UPDATE traslados SET 
                        titulo = '$titulo',
                        imagen = '$imagen',
                        presentacion = '$presentacion',
                        item1 = '$item1',
                        item2 = '$item2',
                        item3 = '$item3',
                        item4 = '$item4',
                        descitem1 = '$descitem1',
                        descitem2 = '$descitem2',
                        descitem3 = '$descitem3',
                        descitem4 = '$descitem4',
                        promocion = '$promocion'
                      WHERE id = '$id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Buscar por ID
  public function find($bean_traslados)
  {
    try{
      $id = $bean_traslados->getId();

      $this->query = "SELECT * FROM traslados WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_traslados)
  {
    try{
      $id = $bean_traslados->getId();

      $this->query = "DELETE FROM traslados
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
