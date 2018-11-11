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

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM categoria";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_categoria)
  {
    try{
      $bean_categoria->setCreatedUp( HelperDate::timestampsBd() );

      $idcategoria = $bean_categoria->getIdcategoria();
      $nombre = $bean_categoria->getNombre();
      $url = $bean_categoria->getUrl();
      $imagen = $bean_categoria->getImagen();
      $publicar = $bean_categoria->getPublicar();
      $estado = $bean_categoria->getEstado();
      $created_up = $bean_categoria->getCreatedUp();

      $this->query = "INSERT INTO categoria
                      (
                        nombre,
                        url,
                        imagen,
                        publicar,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$nombre',
                        '$url',
                        '$imagen',
                        '$publicar',
                        '$estado',
                        $created_up
                      ); ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Actualizar
  public function update($bean_categoria)
  {
    try{
      $idcategoria = $bean_categoria->getIdcategoria();
      $nombre = $bean_categoria->getNombre();
      $url = $bean_categoria->getUrl();
      $imagen = $bean_categoria->getImagen();
      $publicar = $bean_categoria->getPublicar();

      $this->query = "UPDATE categoria SET 
                        nombre = '$nombre',
                        url = '$url',
                        imagen = '$imagen',
                        publicar = '$publicar'
                      WHERE idcategoria = '$idcategoria'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Eliminar(Actualizar Estado)
  public function updateEstado($bean_categoria)
  {
    try{
      $idcategoria = $bean_categoria->getIdcategoria();
      $estado = $bean_categoria->getEstado();

      $this->query = "UPDATE categoria SET 
                        estado = '$estado'
                      WHERE idcategoria='$idcategoria'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método getList
  public function getList()
  {
    try{

      $this->query = "SELECT * FROM categoria WHERE estado = 1 ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Método Buscar por ID
  public function find($bean_categoria)
  {
    try{
      $idcategoria = $bean_categoria->getIdcategoria();

      $this->query = "SELECT * FROM categoria WHERE idcategoria = '$idcategoria' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_categoria)
  {
    try{
      $idcategoria = $bean_categoria->getIdcategoria();

      $this->query = "DELETE FROM categoria
                      WHERE idcategoria = '$idcategoria' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Método updatePublish
  public function updatePublish($bean_categoria)
  {
    try{
      $idcategoria = $bean_categoria->getIdcategoria();
      $publicar = $bean_categoria->getPublicar() ;

      $this->query = "UPDATE categoria SET 
                        publicar = '$publicar'
                      WHERE idcategoria = '$idcategoria'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Método getPublished
  public function getPublished($bean_categoria)
  {
    try{
      $publicar = $bean_categoria->getPublicar() ;

      $this->query = "SELECT * FROM categoria
                      WHERE publicar = '$publicar'
                      AND estado = 1 ; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
