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
      $cat_codigo = $bean_categoria->getCatCodigo();
      $cat_nombre = $bean_categoria->getCatNombre();
      $cat_imagen = $bean_categoria->getCatImagen();
      $cat_publiciar = $bean_categoria->getCatPubliciar();
      $cat_estado = $bean_categoria->getCatEstado();

      $this->query = "INSERT INTO categoria
                      (
                        cat_codigo,
                        cat_nombre,
                        cat_imagen,
                        cat_publiciar,
                        cat_estado
                      )
                      VALUES(
                        '$cat_codigo',
                        '$cat_nombre',
                        '$cat_imagen',
                        '$cat_publiciar',
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
      $cat_codigo = $bean_categoria->getCatCodigo();
      $cat_nombre = $bean_categoria->getCatNombre();
      $cat_imagen = $bean_categoria->getCatImagen();
      $cat_publiciar = $bean_categoria->getCatPubliciar();
      $cat_estado = $bean_categoria->getCatEstado();

      $this->query = "UPDATE categoria SET 
                        cat_codigo = '$cat_codigo',
                        cat_nombre = '$cat_nombre',
                        cat_imagen = '$cat_imagen',
                        cat_publiciar = '$cat_publiciar',
                        cat_estado = '$cat_estado'
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

}
