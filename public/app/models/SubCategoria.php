<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class SubCategoria extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT
                        sub_categoria.*,
                        categoria.cat_nombre
                      FROM sub_categoria
                      INNER JOIN categoria ON categoria.categoria_id = sub_categoria.categoria_id ; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_sub_categoria)
  {
    try{

      $sub_categoria_id = $bean_sub_categoria->getSubCategoriaId();
      $categoria_id = $bean_sub_categoria->getCategoriaId();
      $sc_nombre = $bean_sub_categoria->getScNombre();
      $sc_imagen = $bean_sub_categoria->getScImagen();
      $sc_publicar = $bean_sub_categoria->getScPublicar();
      $sc_estado = $bean_sub_categoria->getScEstado();

      $this->query = "INSERT INTO sub_categoria
                      (
                        categoria_id,
                        sc_nombre,
                        sc_imagen,
                        sc_publicar,
                        sc_estado
                      )
                      VALUES(
                        '$categoria_id',
                        '$sc_nombre',
                        '$sc_imagen',
                        '$sc_publicar',
                        '$sc_estado'
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_sub_categoria)
  {
    try{
      $sub_categoria_id = $bean_sub_categoria->getSubCategoriaId();
      $categoria_id = $bean_sub_categoria->getCategoriaId();
      $sc_nombre = $bean_sub_categoria->getScNombre();
      $sc_imagen = $bean_sub_categoria->getScImagen();
      $sc_publicar = $bean_sub_categoria->getScPublicar();

      $this->query = "UPDATE sub_categoria SET
                        categoria_id = '$categoria_id',
                        sc_nombre = '$sc_nombre',
                        sc_imagen = '$sc_imagen',
                        sc_publicar = '$sc_publicar'
                      WHERE sub_categoria_id = '$sub_categoria_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_sub_categoria)
  {
    try{
      $sub_categoria_id = $bean_sub_categoria->getSubCategoriaId();

      $this->query = "SELECT * FROM sub_categoria WHERE sub_categoria_id = '$sub_categoria_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_sub_categoria)
  {
    try{
      $sub_categoria_id = $bean_sub_categoria->getSubCategoriaId();

      $this->query = "DELETE FROM sub_categoria
                      WHERE sub_categoria_id = '$sub_categoria_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_sub_categoria)
  {
    try{
      $estado = $bean_sub_categoria->getScEstado() ;

      $this->query = "SELECT * FROM sub_categoria
                      WHERE sc_estado = '$estado'
                      ORDER BY sc_nombre ASC; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_sub_categoria)
  {
    try{
      $sub_categoria_id = $bean_sub_categoria->getSubCategoriaId();
      $estado = $bean_sub_categoria->getScEstado();

      $this->query = "UPDATE sub_categoria SET
                        sc_estado = '$estado'
                      WHERE sub_categoria_id='$sub_categoria_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method updatePublish
  public function updatePublish($bean_sub_categoria)
  {
    try{
      $sub_categoria_id = $bean_sub_categoria->getSubCategoriaId();
      $publicar = $bean_sub_categoria->getScPublicar() ;

      $this->query = "UPDATE sub_categoria SET
                        sc_publicar = '$publicar'
                      WHERE sub_categoria_id = '$sub_categoria_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_sub_categoria)
  {
    try{
      $publicar = $bean_sub_categoria->getScPublicar() ;

      $this->query = "SELECT * FROM sub_categoria
                      WHERE sc_publicar = '$publicar'
                      AND estado = 1 ; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
