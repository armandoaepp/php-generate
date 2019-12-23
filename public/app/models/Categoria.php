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
      $desc_categoria = $bean_categoria->getDescCategoria();
      $estado = $bean_categoria->getEstado();

      $this->query = "INSERT INTO categoria
                      (
                        desc_categoria,
                        estado
                      )
                      VALUES(
                        '$desc_categoria',
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
  public function update($bean_categoria)
  {
    try{
      $categoria_id = $bean_categoria->getCategoriaId();
      $desc_categoria = $bean_categoria->getDescCategoria();

      $this->query = "UPDATE categoria SET 
                        desc_categoria = '$desc_categoria'
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
      $estado = $bean_categoria->getEstado() ;

      $this->query = "SELECT * FROM categoria
                      WHERE estado = '$estado'; ";

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
      $estado = $bean_categoria->getEstado();

      $this->query = "UPDATE categoria SET 
                        estado = '$estado'
                      WHERE categoria_id='$categoria_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
