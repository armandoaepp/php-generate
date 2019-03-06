<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class TipoNoticia extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM tipo_noticia; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_tipo_noticia)
  {
    try{
      $estado = $bean_tipo_noticia->getEstado() ;

      $this->query = "SELECT * FROM tipo_noticia
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_tipo_noticia)
  {
    try{
      $bean_tipo_noticia->setCreatedUp( HelperDate::timestampsBd() );

      $tipo_noticia_id = $bean_tipo_noticia->getTipoNoticiaId();
      $nombre = $bean_tipo_noticia->getNombre();
      $url = $bean_tipo_noticia->getUrl();
      $imagen = $bean_tipo_noticia->getImagen();
      $publicar = $bean_tipo_noticia->getPublicar();
      $estado = $bean_tipo_noticia->getEstado();
      $created_up = $bean_tipo_noticia->getCreatedUp();

      $this->query = "INSERT INTO tipo_noticia
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

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_tipo_noticia)
  {
    try{
      $tipo_noticia_id = $bean_tipo_noticia->getTipoNoticiaId();
      $nombre = $bean_tipo_noticia->getNombre();
      $url = $bean_tipo_noticia->getUrl();
      $imagen = $bean_tipo_noticia->getImagen();
      $publicar = $bean_tipo_noticia->getPublicar();

      $this->query = "UPDATE tipo_noticia SET 
                        nombre = '$nombre',
                        url = '$url',
                        imagen = '$imagen',
                        publicar = '$publicar'
                      WHERE tipo_noticia_id = '$tipo_noticia_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
  public function updateEstado($bean_tipo_noticia)
  {
    try{
      $tipo_noticia_id = $bean_tipo_noticia->getTipoNoticiaId();
      $estado = $bean_tipo_noticia->getEstado();

      $this->query = "UPDATE tipo_noticia SET 
                        estado = '$estado'
                      WHERE tipo_noticia_id='$tipo_noticia_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_tipo_noticia)
  {
    try{
      $tipo_noticia_id = $bean_tipo_noticia->getTipoNoticiaId();

      $this->query = "SELECT * FROM tipo_noticia WHERE tipo_noticia_id = '$tipo_noticia_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_tipo_noticia)
  {
    try{
      $tipo_noticia_id = $bean_tipo_noticia->getTipoNoticiaId();

      $this->query = "DELETE FROM tipo_noticia
                      WHERE tipo_noticia_id = '$tipo_noticia_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method updatePublish
  public function updatePublish($bean_tipo_noticia)
  {
    try{
      $tipo_noticia_id = $bean_tipo_noticia->getTipoNoticiaId();
      $publicar = $bean_tipo_noticia->getPublicar() ;

      $this->query = "UPDATE tipo_noticia SET 
                        publicar = '$publicar'
                      WHERE tipo_noticia_id = '$tipo_noticia_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_tipo_noticia)
  {
    try{
      $publicar = $bean_tipo_noticia->getPublicar() ;

      $this->query = "SELECT * FROM tipo_noticia
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
