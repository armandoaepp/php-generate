<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class AmigosController
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
      $amigos  = new Amigos();

      $data = $amigos->getAll();

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
      $amigos  = new Amigos();
            
      $bean_amigos = new BeanAmigos();
            
      $bean_amigos->setEstado($estado);

      $data = $amigos->getByEstado($bean_amigos);

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

      $amigos  = new Amigos($this->cnx);

      $bean_amigos = new BeanAmigos();
            
      $bean_amigos->setTitulo($titulo);
      $bean_amigos->setImagen($imagen);
      $bean_amigos->setImagen2($imagen_2);
      $bean_amigos->setEmail($email);
      $bean_amigos->setOrden($orden);
      $bean_amigos->setFecha($fecha);
            
      $data = $amigos->save($bean_amigos) ;

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

      $amigos  = new Amigos($this->cnx);
      $bean_amigos = new BeanAmigos();
            
      $bean_amigos->setId($id);
      $bean_amigos->setTitulo($titulo);
      $bean_amigos->setImagen($imagen);
      $bean_amigos->setImagen2($imagen_2);
      $bean_amigos->setEmail($email);
      $bean_amigos->setOrden($orden);
      $bean_amigos->setFecha($fecha);

      $data = $amigos->update($bean_amigos) ;
            
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

      $amigos  = new Amigos($this->cnx);
            
      $bean_amigos = new BeanAmigos();
            
      $bean_amigos->setId($id);
      $bean_amigos->setEstado($estado);

      $data = $amigos->updateEstado($bean_amigos) ;
            
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
      $amigos  = new Amigos();

      $bean_amigos = new BeanAmigos();

      $bean_amigos->setId($id);

      $data = $amigos->find( $bean_amigos) ;
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

      $amigos  = new Amigos();

      $bean_amigos = new BeanAmigos();

      $bean_amigos->setId($id);

      $data = $amigos->deleteById( $bean_amigos ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
