<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class TrasladosController
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
      $traslados  = new Traslados();

      $data = $traslados->getAll();

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
      $traslados  = new Traslados();
            
      $bean_traslados = new BeanTraslados();
            
      $bean_traslados->setEstado($estado);

      $data = $traslados->getByEstado($bean_traslados);

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

      $traslados  = new Traslados($this->cnx);

      $bean_traslados = new BeanTraslados();
            
      $bean_traslados->setTitulo($titulo);
      $bean_traslados->setImagen($imagen);
      $bean_traslados->setPresentacion($presentacion);
      $bean_traslados->setItem1($item1);
      $bean_traslados->setItem2($item2);
      $bean_traslados->setItem3($item3);
      $bean_traslados->setItem4($item4);
      $bean_traslados->setDescitem1($descitem1);
      $bean_traslados->setDescitem2($descitem2);
      $bean_traslados->setDescitem3($descitem3);
      $bean_traslados->setDescitem4($descitem4);
      $bean_traslados->setPromocion($promocion);
            
      $data = $traslados->save($bean_traslados) ;

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

      $traslados  = new Traslados($this->cnx);
      $bean_traslados = new BeanTraslados();
            
      $bean_traslados->setId($id);
      $bean_traslados->setTitulo($titulo);
      $bean_traslados->setImagen($imagen);
      $bean_traslados->setPresentacion($presentacion);
      $bean_traslados->setItem1($item1);
      $bean_traslados->setItem2($item2);
      $bean_traslados->setItem3($item3);
      $bean_traslados->setItem4($item4);
      $bean_traslados->setDescitem1($descitem1);
      $bean_traslados->setDescitem2($descitem2);
      $bean_traslados->setDescitem3($descitem3);
      $bean_traslados->setDescitem4($descitem4);
      $bean_traslados->setPromocion($promocion);

      $data = $traslados->update($bean_traslados) ;
            
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

      $traslados  = new Traslados($this->cnx);
            
      $bean_traslados = new BeanTraslados();
            
      $bean_traslados->setId($id);
      $bean_traslados->setEstado($estado);

      $data = $traslados->updateEstado($bean_traslados) ;
            
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
      $traslados  = new Traslados();

      $bean_traslados = new BeanTraslados();

      $bean_traslados->setId($id);

      $data = $traslados->find( $bean_traslados) ;
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

      $traslados  = new Traslados();

      $bean_traslados = new BeanTraslados();

      $bean_traslados->setId($id);

      $data = $traslados->deleteById( $bean_traslados ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
