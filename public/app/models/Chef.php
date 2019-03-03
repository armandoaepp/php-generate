<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Chef extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM chef; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_chef)
  {
    try{
      $estado = $bean_chef->getEstado() ;

      $this->query = "SELECT * FROM chef
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_chef)
  {
    try{
      $bean_chef->setCreatedUp( HelperDate::timestampsBd() );

      $id          = $bean_chef->getId();
      $nombre      = $bean_chef->getNombre();
      $apellidos   = $bean_chef->getApellidos();
      $cargo       = $bean_chef->getCargo();
      $resumen     = $bean_chef->getResumen();
      $descripcion = $bean_chef->getDescripcion();
      $imagen      = $bean_chef->getImagen();
      $item        = $bean_chef->getItem();
      $publicar    = $bean_chef->getPublicar();
      $estado      = $bean_chef->getEstado();
      $created_up  = $bean_chef->getCreatedUp();

      $this->query = "INSERT INTO chef
                      (
                        nombre,
                        apellidos,
                        cargo,
                        resumen,
                        descripcion,
                        imagen,
                        item,
                        publicar,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$nombre',
                        '$apellidos',
                        '$cargo',
                        '$resumen',
                        '$descripcion',
                        '$imagen',
                        '$item',
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
  public function update($bean_chef)
  {
    try{
      $id          = $bean_chef->getId();
      $nombre      = $bean_chef->getNombre();
      $apellidos   = $bean_chef->getApellidos();
      $cargo       = $bean_chef->getCargo();
      $resumen     = $bean_chef->getResumen();
      $descripcion = $bean_chef->getDescripcion();
      $imagen      = $bean_chef->getImagen();
      // $item        = $bean_chef->getItem();
      $publicar    = $bean_chef->getPublicar();

      $this->query = "UPDATE chef SET 
                        nombre = '$nombre',
                        apellidos = '$apellidos',
                        cargo = '$cargo',
                        resumen = '$resumen',
                        descripcion = '$descripcion',
                        imagen = '$imagen',                        
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
  public function updateEstado($bean_chef)
  {
    try{
      $id = $bean_chef->getId();
      $estado = $bean_chef->getEstado();

      $this->query = "UPDATE chef SET 
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
  public function find($bean_chef)
  {
    try{
      $id = $bean_chef->getId();

      $this->query = "SELECT * FROM chef WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_chef)
  {
    try{
      $id = $bean_chef->getId();

      $this->query = "DELETE FROM chef
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method updatePublish
  public function updatePublish($bean_chef)
  {
    try{
      $id = $bean_chef->getId();
      $publicar = $bean_chef->getPublicar() ;

      $this->query = "UPDATE chef SET 
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
  public function getPublished($bean_chef)
  {
    try{
      $publicar = $bean_chef->getPublicar() ;

      $this->query = "SELECT * FROM chef
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
