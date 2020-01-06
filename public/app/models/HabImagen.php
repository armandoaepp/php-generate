<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class HabImagen extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM hab_imagen; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_hab_imagen)
  {
    try{

      $hab_imagen_id = $bean_hab_imagen->getHabImagenId();
      $habitacion_id = $bean_hab_imagen->getHabitacionId();
      $jerarquia = $bean_hab_imagen->getJerarquia();
      $imagen = $bean_hab_imagen->getImagen();
      $desc_img = $bean_hab_imagen->getDescImg();
      $estado = $bean_hab_imagen->getEstado();

      $this->query = "INSERT INTO hab_imagen
                      (
                        habitacion_id,
                        jerarquia,
                        imagen,
                        desc_img,
                        estado
                      )
                      VALUES(
                        '$habitacion_id',
                        '$jerarquia',
                        '$imagen',
                        '$desc_img',
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
  public function update($bean_hab_imagen)
  {
    try{
      $hab_imagen_id = $bean_hab_imagen->getHabImagenId();
      $habitacion_id = $bean_hab_imagen->getHabitacionId();
      $jerarquia = $bean_hab_imagen->getJerarquia();
      $imagen = $bean_hab_imagen->getImagen();
      $desc_img = $bean_hab_imagen->getDescImg();

      $this->query = "UPDATE hab_imagen SET 
                        habitacion_id = '$habitacion_id',
                        jerarquia = '$jerarquia',
                        imagen = '$imagen',
                        desc_img = '$desc_img'
                      WHERE hab_imagen_id = '$hab_imagen_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_hab_imagen)
  {
    try{
      $hab_imagen_id = $bean_hab_imagen->getHabImagenId();

      $this->query = "SELECT * FROM hab_imagen WHERE hab_imagen_id = '$hab_imagen_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_hab_imagen)
  {
    try{
      $hab_imagen_id = $bean_hab_imagen->getHabImagenId();

      $this->query = "DELETE FROM hab_imagen
                      WHERE hab_imagen_id = '$hab_imagen_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_hab_imagen)
  {
    try{
      $estado = $bean_hab_imagen->getEstado() ;

      $this->query = "SELECT * FROM hab_imagen
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_hab_imagen)
  {
    try{
      $hab_imagen_id = $bean_hab_imagen->getHabImagenId();
      $estado = $bean_hab_imagen->getEstado();

      $this->query = "UPDATE hab_imagen SET 
                        estado = '$estado'
                      WHERE hab_imagen_id='$hab_imagen_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
