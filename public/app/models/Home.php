<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Home extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM home; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_home)
  {
    try{
      $estado = $bean_home->getEstado() ;

      $this->query = "SELECT * FROM home
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_home)
  {
    try{
      $id = $bean_home->getId();
      $titulo = $bean_home->getTitulo();
      $url = $bean_home->getUrl();
      $imagen = $bean_home->getImagen();
      $titulo_2 = $bean_home->getTitulo2();
      $url_2 = $bean_home->getUrl2();
      $imagen_2 = $bean_home->getImagen2();
      $titulo_3 = $bean_home->getTitulo3();
      $url_3 = $bean_home->getUrl3();
      $imagen_3 = $bean_home->getImagen3();
      $convenios = $bean_home->getConvenios();
      $orden = $bean_home->getOrden();
      $estado = $bean_home->getEstado();
      $fecha = $bean_home->getFecha();

      $this->query = "INSERT INTO home
                      (
                        titulo,
                        url,
                        imagen,
                        titulo_2,
                        url_2,
                        imagen_2,
                        titulo_3,
                        url_3,
                        imagen_3,
                        convenios,
                        orden,
                        estado,
                        fecha
                      )
                      VALUES(
                        '$titulo',
                        '$url',
                        '$imagen',
                        '$titulo_2',
                        '$url_2',
                        '$imagen_2',
                        '$titulo_3',
                        '$url_3',
                        '$imagen_3',
                        '$convenios',
                        '$orden',
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
  public function update($bean_home)
  {
    try{
      $id = $bean_home->getId();
      $titulo = $bean_home->getTitulo();
      $url = $bean_home->getUrl();
      $imagen = $bean_home->getImagen();
      $titulo_2 = $bean_home->getTitulo2();
      $url_2 = $bean_home->getUrl2();
      $imagen_2 = $bean_home->getImagen2();
      $titulo_3 = $bean_home->getTitulo3();
      $url_3 = $bean_home->getUrl3();
      $imagen_3 = $bean_home->getImagen3();
      $convenios = $bean_home->getConvenios();
      $orden = $bean_home->getOrden();
      $fecha = $bean_home->getFecha();

      $this->query = "UPDATE home SET 
                        titulo = '$titulo',
                        url = '$url',
                        imagen = '$imagen',
                        titulo_2 = '$titulo_2',
                        url_2 = '$url_2',
                        imagen_2 = '$imagen_2',
                        titulo_3 = '$titulo_3',
                        url_3 = '$url_3',
                        imagen_3 = '$imagen_3',
                        convenios = '$convenios',
                        orden = '$orden',
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
  public function updateEstado($bean_home)
  {
    try{
      $id = $bean_home->getId();
      $estado = $bean_home->getEstado();

      $this->query = "UPDATE home SET 
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
  public function find($bean_home)
  {
    try{
      $id = $bean_home->getId();

      $this->query = "SELECT * FROM home WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_home)
  {
    try{
      $id = $bean_home->getId();

      $this->query = "DELETE FROM home
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
