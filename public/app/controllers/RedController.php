<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class RedController
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
      $red  = new Red();

      $data = $red->getAll();
      $data = Serialize::unSerializeArray($data);


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

      $red  = new Red($this->cnx);

      $bean_red = new BeanRed();

      $bean_red->setTitulo($titulo);
      $bean_red->setSubtitulo($subtitulo);
      $bean_red->setTipo($tipo);
      $bean_red->setVacantes($vacantes);
      $bean_red->setRequisitos($requisitos);
      $bean_red->setConocimientos($conocimientos);
      $bean_red->setSalario($salario);
      $bean_red->setNombrecontacto($nombrecontacto);
      $bean_red->setTelefonocontacto($telefonocontacto);
      $bean_red->setEmailcontacto($emailcontacto);
      $bean_red->setOrden($orden);
      $bean_red->setFecha($fecha);

      $data = $red->save($bean_red) ;

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

      $red  = new Red($this->cnx);
      $bean_red = new BeanRed();

      $bean_red->setId($id);
      $bean_red->setTitulo($titulo);
      $bean_red->setSubtitulo($subtitulo);
      $bean_red->setTipo($tipo);
      $bean_red->setVacantes($vacantes);
      $bean_red->setRequisitos($requisitos);
      $bean_red->setConocimientos($conocimientos);
      $bean_red->setSalario($salario);
      $bean_red->setNombrecontacto($nombrecontacto);
      $bean_red->setTelefonocontacto($telefonocontacto);
      $bean_red->setEmailcontacto($emailcontacto);
      $bean_red->setOrden($orden);
      $bean_red->setFecha($fecha);

      $data = $red->update($bean_red) ;

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

      $red  = new Red($this->cnx);
      $bean_red = new BeanRed();

      $bean_red->setId($id);
      $bean_red->setEstado($estado);

      $data = $red->updateEstado($bean_red) ;

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
      $red  = new Red();

      $bean_red = new BeanRed();

      $bean_red->setId($id);

      $data = $red->find( $bean_red) ;
      $data = Serialize::unSerializeArray($data);


      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($params)
  {
    try
    {

      extract($params) ;

      $red  = new Red();

      $bean_red = new BeanRed();

      $bean_red->setId($id);

      $data = $red->deleteById( $bean_red ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }


/*   public function getByUpDate($num_day)
  {
    try
    {
      $red  = new Red();

      $new_date = HelperDate::dateNowDownDay(20) ;


      $data = $red->getByUpDate( $new_date) ;
      $data = Serialize::unSerializeArray($data);


      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  } */

  public function getCountRowByDate($num_day)
  {
    try
    {
      $red  = new Red();

      $new_date = HelperDate::dateNowDownDay($num_day) ;

      // echo "fecha new :" ;
    // print_r($new_date);
    // echo "<br>" ;


      $data = $red->getByUpDate( $new_date) ;
      $data = Serialize::unSerializeArray($data);

      $num_row = 0 ;

      if( is_array($data))
      {
        $num_row = count($data) ;
      }

      return $num_row;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
