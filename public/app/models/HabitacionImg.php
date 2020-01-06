<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class HabitacionImg extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM habitacion_img; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_habitacion_img)
  {
    try{

      $habitacion_img_id = $bean_habitacion_img->getHabitacionImgId();
      $habitacion_id = $bean_habitacion_img->getHabitacionId();
      $jerarquia = $bean_habitacion_img->getJerarquia();
      $imagen = $bean_habitacion_img->getImagen();
      $desc_img = $bean_habitacion_img->getDescImg();
      $estado = $bean_habitacion_img->getEstado();

      $this->query = "INSERT INTO habitacion_img
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
  public function update($bean_habitacion_img)
  {
    try{
      $habitacion_img_id = $bean_habitacion_img->getHabitacionImgId();
      $habitacion_id = $bean_habitacion_img->getHabitacionId();
      $jerarquia = $bean_habitacion_img->getJerarquia();
      $imagen = $bean_habitacion_img->getImagen();
      $desc_img = $bean_habitacion_img->getDescImg();

      $this->query = "UPDATE habitacion_img SET 
                        habitacion_id = '$habitacion_id',
                        jerarquia = '$jerarquia',
                        imagen = '$imagen',
                        desc_img = '$desc_img'
                      WHERE habitacion_img_id = '$habitacion_img_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_habitacion_img)
  {
    try{
      $habitacion_img_id = $bean_habitacion_img->getHabitacionImgId();

      $this->query = "SELECT * FROM habitacion_img WHERE habitacion_img_id = '$habitacion_img_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_habitacion_img)
  {
    try{
      $habitacion_img_id = $bean_habitacion_img->getHabitacionImgId();

      $this->query = "DELETE FROM habitacion_img
                      WHERE habitacion_img_id = '$habitacion_img_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_habitacion_img)
  {
    try{
      $estado = $bean_habitacion_img->getEstado() ;

      $this->query = "SELECT * FROM habitacion_img
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_habitacion_img)
  {
    try{
      $habitacion_img_id = $bean_habitacion_img->getHabitacionImgId();
      $estado = $bean_habitacion_img->getEstado();

      $this->query = "UPDATE habitacion_img SET 
                        estado = '$estado'
                      WHERE habitacion_img_id='$habitacion_img_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
