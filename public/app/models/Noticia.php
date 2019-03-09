<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Noticia extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      // $this->query = "SELECT * FROM noticia; ";
      $this->query = "SELECT
                        noticia.* ,
                        tipo_noticia.nombre AS tipo_noticia
                      FROM noticia
                      INNER JOIN tipo_noticia ON tipo_noticia.tipo_noticia_id = noticia.tipo_noticia_id ; ";


      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_noticia)
  {
    try{
      $estado = $bean_noticia->getEstado() ;

      $this->query = "SELECT * FROM noticia
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_noticia)
  {
    try{
      $bean_noticia->setCreatedUp( HelperDate::timestampsBd() );

      $id              = $bean_noticia->getId();
      $tipo_noticia_id = $bean_noticia->getTipoNoticiaId();
      $titulo          = $bean_noticia->getTitulo();
      $descripcion     = $bean_noticia->getDescripcion();
      $imagen          = $bean_noticia->getImagen();
      $url             = $bean_noticia->getUrl();
      $item            = $bean_noticia->getItem();
      $glosa           = $bean_noticia->getGlosa();
      $publicar        = $bean_noticia->getPublicar();
      $estado          = $bean_noticia->getEstado();
      $created_up      = $bean_noticia->getCreatedUp();

      $this->query = "INSERT INTO noticia
                      (
                        titulo,
                        tipo_noticia_id,
                        descripcion,
                        imagen,
                        url,
                        item,
                        glosa,
                        publicar,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$titulo',
                        '$tipo_noticia_id',
                        '$descripcion',
                        '$imagen',
                        '$url',
                        '$item',
                        '$glosa',
                        '$publicar',
                        '$estado',
                        $created_up
                      ); ";

      $this->executeQuery();

      // $data = $this->status  ;
      $data = $this->lastInsertId() ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_noticia)
  {
    try{
      $id              = $bean_noticia->getId();
      $tipo_noticia_id = $bean_noticia->getTipoNoticiaId();
      $titulo          = $bean_noticia->getTitulo();
      $descripcion     = $bean_noticia->getDescripcion();
      $imagen          = $bean_noticia->getImagen();
      $url             = $bean_noticia->getUrl();
      // $item            = $bean_noticia->getItem();
      $glosa           = $bean_noticia->getGlosa();
      $publicar        = $bean_noticia->getPublicar();

      $this->query = "UPDATE noticia SET
                        titulo = '$titulo',
                        tipo_noticia_id = '$tipo_noticia_id',
                        descripcion = '$descripcion',
                        imagen = '$imagen',
                        url = '$url',
                        glosa = '$glosa',
                        publicar = '$publicar'
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
  public function updateEstado($bean_noticia)
  {
    try{
      $id = $bean_noticia->getId();
      $estado = $bean_noticia->getEstado();

      $this->query = "UPDATE noticia SET
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
  public function find($bean_noticia)
  {
    try{
      $id = $bean_noticia->getId();

      $this->query = "SELECT * FROM noticia WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_noticia)
  {
    try{
      $id = $bean_noticia->getId();

      $this->query = "DELETE FROM noticia
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method updatePublish
  public function updatePublish($bean_noticia)
  {
    try{
      $id = $bean_noticia->getId();
      $publicar = $bean_noticia->getPublicar() ;

      $this->query = "UPDATE noticia SET
                        publicar = '$publicar'
                      WHERE id = '$id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_noticia)
  {
    try{
      $publicar = $bean_noticia->getPublicar() ;

      /* $this->query = "SELECT * FROM noticia
                      WHERE publicar = '$publicar'
                      AND estado = 1 ; "; */

        $this->query = "SELECT noticia.*,
                          (SELECT noticia_img.imagen FROM noticia_img
                          WHERE noticia_img.noticia_id = noticia.id AND estado = 1
                          ORDER BY item  ASC limit 1) as imagen_det
                        FROM noticia
                      WHERE publicar = '$publicar'
                      AND estado = 1
                      ORDER BY id DESC ;";



      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método getActive
  public function getLastRow()
  {
    try{

      $this->query = "SELECT noticia.*,
      (SELECT noticia_img.imagen FROM noticia_img
                        WHERE noticia_img.noticia_id = noticia.id AND estado = 1
                        ORDER BY item  ASC limit 1) as imagen_det
        FROM noticia
        WHERE estado = 1 ORDER BY created_up DESC LIMIT 1";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method getPublished
  public function getPublishedByTipoNoticiaId($bean_noticia)
  {
    try{
      $publicar        = $bean_noticia->getPublicar() ;
      $tipo_noticia_id = $bean_noticia->getTipoNoticiaId() ;

      $this->query = "SELECT noticia.*,
                        (SELECT noticia_img.imagen FROM noticia_img
                        WHERE noticia_img.noticia_id = noticia.id AND estado = 1
                        ORDER BY item  ASC limit 1) as imagen_det
                      FROM noticia
                      WHERE publicar = '$publicar'
                      AND tipo_noticia_id = '$tipo_noticia_id'
                      AND estado = 1
                      ORDER BY id DESC ;";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }



}
