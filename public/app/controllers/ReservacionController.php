<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class ReservacionController
{
  private $cnx;

  public function __construct($cnx = null)
  {
    $this->cnx = $cnx;
  }
    
  public function getAll()
  {
    try
    {
      $reservacion  = new Reservacion();

      $data = $reservacion->getAll();

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByEstado( $params = array() )
  {
    try
    {
            
      extract($params) ; 

      $reservacion  = new Reservacion();
            
      $bean_reservacion = new BeanReservacion();
            
      $bean_reservacion->setEstado($estado);

      $data = $reservacion->getByEstado($bean_reservacion);

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function save($params = array() )
  {
    try
    {
            
      extract($params) ; 

      $reservacion  = new Reservacion($this->cnx);

      $bean_reservacion = new BeanReservacion();
            
      $bean_reservacion->setTipoHabitacionId($tipo_habitacion_id);
      $bean_reservacion->setNombre($nombre);
      $bean_reservacion->setApellidos($apellidos);
      $bean_reservacion->setCantidad($cantidad);
      $bean_reservacion->setCuidadOrigen($cuidad_origen);
      $bean_reservacion->setFechaLlegada($fecha_llegada);
      $bean_reservacion->setFechaSalida($fecha_salida);
      $bean_reservacion->setTelefono($telefono);
      $bean_reservacion->setEmail($email);
            
      $data = $reservacion->save($bean_reservacion) ;

      return $data ;
    }
    catch (Exception $e)
    {
        throw new Exception($e->getMessage());
    }
  }

  public function update($params = array())
  {
    try
    {
            
      extract($params) ; 

      $reservacion  = new Reservacion($this->cnx);
      $bean_reservacion = new BeanReservacion();
            
      $bean_reservacion->setReservaId($reserva_id);
      $bean_reservacion->setTipoHabitacionId($tipo_habitacion_id);
      $bean_reservacion->setNombre($nombre);
      $bean_reservacion->setApellidos($apellidos);
      $bean_reservacion->setCantidad($cantidad);
      $bean_reservacion->setCuidadOrigen($cuidad_origen);
      $bean_reservacion->setFechaLlegada($fecha_llegada);
      $bean_reservacion->setFechaSalida($fecha_salida);
      $bean_reservacion->setTelefono($telefono);
      $bean_reservacion->setEmail($email);

      $data = $reservacion->update($bean_reservacion) ;
            
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function updateEstado($params = array())
  {
    try
    {
            
      extract($params) ; 

      $reservacion  = new Reservacion($this->cnx);
            
      $bean_reservacion = new BeanReservacion();
            
      $bean_reservacion->setReservaId($reserva_id);
      $bean_reservacion->setEstado($estado);

      $data = $reservacion->updateEstado($bean_reservacion) ;
            
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function find($id)
  {
    try
    {
      $reservacion  = new Reservacion();

      $bean_reservacion = new BeanReservacion();

      $bean_reservacion->setReservaId($id);

      $data = $reservacion->find( $bean_reservacion) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($reserva_id)
  {
    try
    {

      $reservacion  = new Reservacion();

      $bean_reservacion = new BeanReservacion();

      $bean_reservacion->setReservaId($reserva_id);

      $data = $reservacion->deleteById( $bean_reservacion ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
