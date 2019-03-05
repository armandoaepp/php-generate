<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class CarreraController
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
      $carrera  = new Carrera();

      $data = $carrera->getAll();

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

      $carrera  = new Carrera();
            
      $bean_carrera = new BeanCarrera();
            
      $bean_carrera->setEstado($estado);

      $data = $carrera->getByEstado($bean_carrera);

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

      $carrera  = new Carrera($this->cnx);

      $bean_carrera = new BeanCarrera();
            
      $bean_carrera->setTitulo($titulo);
      $bean_carrera->setDescripcion($descripcion);
      $bean_carrera->setSlide($slide);
      $bean_carrera->setImagen($imagen);
      $bean_carrera->setPresentacion($presentacion);
      $bean_carrera->setPorque($porque);
      $bean_carrera->setDonde($donde);
      $bean_carrera->setCertificacion($certificacion);
      $bean_carrera->setTitulos($titulos);
      $bean_carrera->setInversion($inversion);
      $bean_carrera->setTitulacion($titulacion);
      $bean_carrera->setDuracion($duracion);
      $bean_carrera->setDia($dia);
      $bean_carrera->setHorario($horario);
      $bean_carrera->setLugar($lugar);
      $bean_carrera->setPrecio($precio);
      $bean_carrera->setEquipos($equipos);
      $bean_carrera->setConsultas($consultas);
      $bean_carrera->setDirigido($dirigido);
      $bean_carrera->setAquien($aquien);
      $bean_carrera->setTemas($temas);
      $bean_carrera->setUrl($url);
      $bean_carrera->setItem($item);
      $bean_carrera->setPublicar($publicar);
            
      $data = $carrera->save($bean_carrera) ;

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

      $carrera  = new Carrera($this->cnx);
      $bean_carrera = new BeanCarrera();
            
      $bean_carrera->setId($id);
      $bean_carrera->setTitulo($titulo);
      $bean_carrera->setDescripcion($descripcion);
      $bean_carrera->setSlide($slide);
      $bean_carrera->setImagen($imagen);
      $bean_carrera->setPresentacion($presentacion);
      $bean_carrera->setPorque($porque);
      $bean_carrera->setDonde($donde);
      $bean_carrera->setCertificacion($certificacion);
      $bean_carrera->setTitulos($titulos);
      $bean_carrera->setInversion($inversion);
      $bean_carrera->setTitulacion($titulacion);
      $bean_carrera->setDuracion($duracion);
      $bean_carrera->setDia($dia);
      $bean_carrera->setHorario($horario);
      $bean_carrera->setLugar($lugar);
      $bean_carrera->setPrecio($precio);
      $bean_carrera->setEquipos($equipos);
      $bean_carrera->setConsultas($consultas);
      $bean_carrera->setDirigido($dirigido);
      $bean_carrera->setAquien($aquien);
      $bean_carrera->setTemas($temas);
      $bean_carrera->setUrl($url);
      $bean_carrera->setItem($item);
      $bean_carrera->setPublicar($publicar);

      $data = $carrera->update($bean_carrera) ;
            
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

      $carrera  = new Carrera($this->cnx);
            
      $bean_carrera = new BeanCarrera();
            
      $bean_carrera->setId($id);
      $bean_carrera->setEstado($estado);

      $data = $carrera->updateEstado($bean_carrera) ;
            
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
      $carrera  = new Carrera();

      $bean_carrera = new BeanCarrera();

      $bean_carrera->setId($id);

      $data = $carrera->find( $bean_carrera) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($id)
  {
    try
    {

      $carrera  = new Carrera();

      $bean_carrera = new BeanCarrera();

      $bean_carrera->setId($id);

      $data = $carrera->deleteById( $bean_carrera ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function updatePublish($params = array())
  {
    try
    {
            
      extract($params) ; 

      $carrera  = new Carrera($this->cnx);
      $bean_carrera = new BeanCarrera();
            
      $bean_carrera->setId($id);
      $bean_carrera->setPublicar($publicar);

      $data = $carrera->updatePublish($bean_carrera) ;
            
      return $data;
    }
    catch (Exception $e)
    {
           throw new Exception($e->getMessage());
    }
  }

  public function getPublished($params = array())
  {
    try
    {
            
      extract($params) ; 

      $carrera  = new Carrera($this->cnx);
      $bean_carrera = new BeanCarrera();
            
      $bean_carrera->setPublicar($publicar);

      $data = $carrera->getPublished($bean_carrera) ;
      
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
