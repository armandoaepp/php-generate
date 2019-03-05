<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Carrera extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM carrera; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_carrera)
  {
    try{
      $estado = $bean_carrera->getEstado() ;

      $this->query = "SELECT * FROM carrera
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_carrera)
  {
    try{
      $bean_carrera->setCreatedUp( HelperDate::timestampsBd() );

      $id = $bean_carrera->getId();
      $titulo = $bean_carrera->getTitulo();
      $descripcion = $bean_carrera->getDescripcion();
      $slide = $bean_carrera->getSlide();
      $imagen = $bean_carrera->getImagen();
      $presentacion = $bean_carrera->getPresentacion();
      $porque = $bean_carrera->getPorque();
      $donde = $bean_carrera->getDonde();
      $certificacion = $bean_carrera->getCertificacion();
      $titulos = $bean_carrera->getTitulos();
      $inversion = $bean_carrera->getInversion();
      $titulacion = $bean_carrera->getTitulacion();
      $duracion = $bean_carrera->getDuracion();
      $dia = $bean_carrera->getDia();
      $horario = $bean_carrera->getHorario();
      $lugar = $bean_carrera->getLugar();
      $precio = $bean_carrera->getPrecio();
      $equipos = $bean_carrera->getEquipos();
      $consultas = $bean_carrera->getConsultas();
      $dirigido = $bean_carrera->getDirigido();
      $aquien = $bean_carrera->getAquien();
      $temas = $bean_carrera->getTemas();
      $url = $bean_carrera->getUrl();
      $item = $bean_carrera->getItem();
      $publicar = $bean_carrera->getPublicar();
      $estado = $bean_carrera->getEstado();
      $created_up = $bean_carrera->getCreatedUp();

      $this->query = "INSERT INTO carrera
                      (
                        titulo,
                        descripcion,
                        slide,
                        imagen,
                        presentacion,
                        porque,
                        donde,
                        certificacion,
                        titulos,
                        inversion,
                        titulacion,
                        duracion,
                        dia,
                        horario,
                        lugar,
                        precio,
                        equipos,
                        consultas,
                        dirigido,
                        aquien,
                        temas,
                        url,
                        item,
                        publicar,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$titulo',
                        '$descripcion',
                        '$slide',
                        '$imagen',
                        '$presentacion',
                        '$porque',
                        '$donde',
                        '$certificacion',
                        '$titulos',
                        '$inversion',
                        '$titulacion',
                        '$duracion',
                        '$dia',
                        '$horario',
                        '$lugar',
                        '$precio',
                        '$equipos',
                        '$consultas',
                        '$dirigido',
                        '$aquien',
                        '$temas',
                        '$url',
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
  public function update($bean_carrera)
  {
    try{
      $id = $bean_carrera->getId();
      $titulo = $bean_carrera->getTitulo();
      $descripcion = $bean_carrera->getDescripcion();
      $slide = $bean_carrera->getSlide();
      $imagen = $bean_carrera->getImagen();
      $presentacion = $bean_carrera->getPresentacion();
      $porque = $bean_carrera->getPorque();
      $donde = $bean_carrera->getDonde();
      $certificacion = $bean_carrera->getCertificacion();
      $titulos = $bean_carrera->getTitulos();
      $inversion = $bean_carrera->getInversion();
      $titulacion = $bean_carrera->getTitulacion();
      $duracion = $bean_carrera->getDuracion();
      $dia = $bean_carrera->getDia();
      $horario = $bean_carrera->getHorario();
      $lugar = $bean_carrera->getLugar();
      $precio = $bean_carrera->getPrecio();
      $equipos = $bean_carrera->getEquipos();
      $consultas = $bean_carrera->getConsultas();
      $dirigido = $bean_carrera->getDirigido();
      $aquien = $bean_carrera->getAquien();
      $temas = $bean_carrera->getTemas();
      $url = $bean_carrera->getUrl();
      $item = $bean_carrera->getItem();
      $publicar = $bean_carrera->getPublicar();

      $this->query = "UPDATE carrera SET 
                        titulo = '$titulo',
                        descripcion = '$descripcion',
                        slide = '$slide',
                        imagen = '$imagen',
                        presentacion = '$presentacion',
                        porque = '$porque',
                        donde = '$donde',
                        certificacion = '$certificacion',
                        titulos = '$titulos',
                        inversion = '$inversion',
                        titulacion = '$titulacion',
                        duracion = '$duracion',
                        dia = '$dia',
                        horario = '$horario',
                        lugar = '$lugar',
                        precio = '$precio',
                        equipos = '$equipos',
                        consultas = '$consultas',
                        dirigido = '$dirigido',
                        aquien = '$aquien',
                        temas = '$temas',
                        url = '$url',
                        item = '$item',
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
  public function updateEstado($bean_carrera)
  {
    try{
      $id = $bean_carrera->getId();
      $estado = $bean_carrera->getEstado();

      $this->query = "UPDATE carrera SET 
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
  public function find($bean_carrera)
  {
    try{
      $id = $bean_carrera->getId();

      $this->query = "SELECT * FROM carrera WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_carrera)
  {
    try{
      $id = $bean_carrera->getId();

      $this->query = "DELETE FROM carrera
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method updatePublish
  public function updatePublish($bean_carrera)
  {
    try{
      $id = $bean_carrera->getId();
      $publicar = $bean_carrera->getPublicar() ;

      $this->query = "UPDATE carrera SET 
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
  public function getPublished($bean_carrera)
  {
    try{
      $publicar = $bean_carrera->getPublicar() ;

      $this->query = "SELECT * FROM carrera
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
