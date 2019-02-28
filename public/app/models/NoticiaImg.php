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

      $this->query = "SELECT * FROM noticia_img";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

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
      $id = $bean_noticia_img->getId();
      $noticia_id = $bean_noticia_img->getNoticiaId();
      $imagen = $bean_noticia_img->getImagen();
      $jerarquia = $bean_noticia_img->getJerarquia();
      $estado = $bean_noticia_img->getEstado();
      $fecha = $bean_noticia_img->getFecha();

      $this->query = "INSERT INTO noticia_img
                      (
                        noticia_id,
                        imagen,
                        jerarquia,
                        estado,
                        fecha
                      )
                      VALUES(
                        '$noticia_id',
                        '$imagen',
                        '$jerarquia',
                        '$estado',
                        '$fecha'
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
      $jerarquia = $bean_noticia_img->getJerarquia();
      $fecha = $bean_noticia_img->getFecha();

      $this->query = "UPDATE noticia_img SET 
                        noticia_id = '$noticia_id',
                        imagen = '$imagen',
                        jerarquia = '$jerarquia',
                        fecha = '$fecha'
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

}
