<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class TallerController
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
      $taller  = new Taller();

      $data = $taller->getAll();

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByEstado()
  {
    try
    {
      $taller  = new Taller();
            
      $bean_taller = new BeanTaller();
            
      $bean_taller->setEstado($estado);

      $data = $taller->getByEstado($bean_taller);

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

      $taller  = new Taller($this->cnx);

      $bean_taller = new BeanTaller();
            
      $bean_taller->setChefId($chef_id);
      $bean_taller->setTitulo($titulo);
      $bean_taller->setDescripcion($descripcion);
      $bean_taller->setImagen($imagen);
      $bean_taller->setCertificacion($certificacion);
      $bean_taller->setTitulos($titulos);
      $bean_taller->setTitulacion($titulacion);
      $bean_taller->setDuracion($duracion);
      $bean_taller->setDia($dia);
      $bean_taller->setHorario($horario);
      $bean_taller->setLugar($lugar);
      $bean_taller->setPrecio($precio);
      $bean_taller->setDirigido($dirigido);
      $bean_taller->setSesiones($sesiones);
      $bean_taller->setTemas($temas);
      $bean_taller->setUrl($url);
      $bean_taller->setItem($item);
      $bean_taller->setGlosa($glosa);
      $bean_taller->setPublicar($publicar);
            
      $data = $taller->save($bean_taller) ;

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

      $taller  = new Taller($this->cnx);
      $bean_taller = new BeanTaller();
            
      $bean_taller->setId($id);
      $bean_taller->setChefId($chef_id);
      $bean_taller->setTitulo($titulo);
      $bean_taller->setDescripcion($descripcion);
      $bean_taller->setImagen($imagen);
      $bean_taller->setCertificacion($certificacion);
      $bean_taller->setTitulos($titulos);
      $bean_taller->setTitulacion($titulacion);
      $bean_taller->setDuracion($duracion);
      $bean_taller->setDia($dia);
      $bean_taller->setHorario($horario);
      $bean_taller->setLugar($lugar);
      $bean_taller->setPrecio($precio);
      $bean_taller->setDirigido($dirigido);
      $bean_taller->setSesiones($sesiones);
      $bean_taller->setTemas($temas);
      $bean_taller->setUrl($url);
      $bean_taller->setItem($item);
      $bean_taller->setGlosa($glosa);
      $bean_taller->setPublicar($publicar);

      $data = $taller->update($bean_taller) ;
            
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

      $taller  = new Taller($this->cnx);
            
      $bean_taller = new BeanTaller();
            
      $bean_taller->setId($id);
      $bean_taller->setEstado($estado);

      $data = $taller->updateEstado($bean_taller) ;
            
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
      $taller  = new Taller();

      $bean_taller = new BeanTaller();

      $bean_taller->setId($id);

      $data = $taller->find( $bean_taller) ;
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

      $taller  = new Taller();

      $bean_taller = new BeanTaller();

      $bean_taller->setId($id);

      $data = $taller->deleteById( $bean_taller ) ;

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

      $taller  = new Taller($this->cnx);
      $bean_taller = new BeanTaller();
            
      $bean_taller->setId($id);
      $bean_taller->setPublicar($publicar);

      $data = $taller->updatePublish($bean_taller) ;
            
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

      $taller  = new Taller($this->cnx);
      $bean_taller = new BeanTaller();
            
      $bean_taller->setPublicar($publicar);

      $data = $taller->getPublished($bean_taller) ;
      
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
