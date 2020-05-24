<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Categoria extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM categoria; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_categoria)
  {
    try{

      $categoria_id = $bean_categoria->getCategoriaId();
      $cat_nombre = $bean_categoria->getCatNombre();
      $cat_imagen = $bean_categoria->getCatImagen();
      $cat_publicar = $bean_categoria->getCatPublicar();
      $cat_estado = $bean_categoria->getCatEstado();

      $this->query = "INSERT INTO categoria
                      (
                        cat_nombre,
                        cat_imagen,
                        cat_publicar,
                        cat_estado
                      )
                      VALUES(
                        '$cat_nombre',
                        '$cat_imagen',
                        '$cat_publicar',
                        '$cat_estado'
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_categoria)
  {
    try{
      $categoria_id = $bean_categoria->getCategoriaId();
      $cat_nombre = $bean_categoria->getCatNombre();
      $cat_imagen = $bean_categoria->getCatImagen();
      $cat_publicar = $bean_categoria->getCatPublicar();

      $this->query = "UPDATE categoria SET
                        cat_nombre = '$cat_nombre',
                        cat_imagen = '$cat_imagen',
                        cat_publicar = '$cat_publicar'
                      WHERE categoria_id = '$categoria_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_categoria)
  {
    try{
      $categoria_id = $bean_categoria->getCategoriaId();

      $this->query = "SELECT * FROM categoria WHERE categoria_id = '$categoria_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_categoria)
  {
    try{
      $categoria_id = $bean_categoria->getCategoriaId();

      $this->query = "DELETE FROM categoria
                      WHERE categoria_id = '$categoria_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_categoria)
  {
    try{
      $estado = $bean_categoria->getCatEstado() ;

      $this->query = "SELECT * FROM categoria
                      WHERE cat_estado = '$estado'
                      ORDER BY cat_nombre ASC; ";

      // echo $this->query ."<br>" ;

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_categoria)
  {
    try{
      $categoria_id = $bean_categoria->getCategoriaId();
      $estado = $bean_categoria->getCatEstado();

      $this->query = "UPDATE categoria SET
                        cat_estado = '$estado'
                      WHERE categoria_id='$categoria_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method updatePublish
  public function updatePublish($bean_categoria)
  {
    try{
      $categoria_id = $bean_categoria->getCategoriaId();
      $publicar = $bean_categoria->getCatPublicar() ;

      $this->query = "UPDATE categoria SET
                        cat_publicar = '$publicar'
                      WHERE categoria_id = '$categoria_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_categoria)
  {
    try{
      $publicar = $bean_categoria->getCatPublicar() ;

      $this->query = "SELECT * FROM categoria
                      WHERE cat_publicar = '$publicar'
                      AND estado = 1 ; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
