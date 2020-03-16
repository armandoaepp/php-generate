<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Reservacion extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM reservacion; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_reservacion)
  {
    try{

      $reserva_id = $bean_reservacion->getReservaId();
      $tipo_habitacion_id = $bean_reservacion->getTipoHabitacionId();
      $nombre = $bean_reservacion->getNombre();
      $apellidos = $bean_reservacion->getApellidos();
      $cantidad = $bean_reservacion->getCantidad();
      $cuidad_origen = $bean_reservacion->getCuidadOrigen();
      $fecha_llegada = $bean_reservacion->getFechaLlegada();
      $fecha_salida = $bean_reservacion->getFechaSalida();
      $telefono = $bean_reservacion->getTelefono();
      $email = $bean_reservacion->getEmail();
      $estado = $bean_reservacion->getEstado();

      $this->query = "INSERT INTO reservacion
                      (
                        tipo_habitacion_id,
                        nombre,
                        apellidos,
                        cantidad,
                        cuidad_origen,
                        fecha_llegada,
                        fecha_salida,
                        telefono,
                        email,
                        estado
                      )
                      VALUES(
                        '$tipo_habitacion_id',
                        '$nombre',
                        '$apellidos',
                        '$cantidad',
                        '$cuidad_origen',
                        '$fecha_llegada',
                        '$fecha_salida',
                        '$telefono',
                        '$email',
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
  public function update($bean_reservacion)
  {
    try{
      $reserva_id = $bean_reservacion->getReservaId();
      $tipo_habitacion_id = $bean_reservacion->getTipoHabitacionId();
      $nombre = $bean_reservacion->getNombre();
      $apellidos = $bean_reservacion->getApellidos();
      $cantidad = $bean_reservacion->getCantidad();
      $cuidad_origen = $bean_reservacion->getCuidadOrigen();
      $fecha_llegada = $bean_reservacion->getFechaLlegada();
      $fecha_salida = $bean_reservacion->getFechaSalida();
      $telefono = $bean_reservacion->getTelefono();
      $email = $bean_reservacion->getEmail();

      $this->query = "UPDATE reservacion SET 
                        tipo_habitacion_id = '$tipo_habitacion_id',
                        nombre = '$nombre',
                        apellidos = '$apellidos',
                        cantidad = '$cantidad',
                        cuidad_origen = '$cuidad_origen',
                        fecha_llegada = '$fecha_llegada',
                        fecha_salida = '$fecha_salida',
                        telefono = '$telefono',
                        email = '$email'
                      WHERE reserva_id = '$reserva_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_reservacion)
  {
    try{
      $reserva_id = $bean_reservacion->getReservaId();

      $this->query = "SELECT * FROM reservacion WHERE reserva_id = '$reserva_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_reservacion)
  {
    try{
      $reserva_id = $bean_reservacion->getReservaId();

      $this->query = "DELETE FROM reservacion
                      WHERE reserva_id = '$reserva_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_reservacion)
  {
    try{
      $estado = $bean_reservacion->getEstado() ;

      $this->query = "SELECT * FROM reservacion
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_reservacion)
  {
    try{
      $reserva_id = $bean_reservacion->getReservaId();
      $estado = $bean_reservacion->getEstado();

      $this->query = "UPDATE reservacion SET 
                        estado = '$estado'
                      WHERE reserva_id='$reserva_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
