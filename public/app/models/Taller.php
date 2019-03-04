<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Taller extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM taller; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_taller)
  {
    try{
      $estado = $bean_taller->getEstado() ;

      $this->query = "SELECT * FROM taller
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_taller)
  {
    try{
      $bean_taller->setCreatedUp( HelperDate::timestampsBd() );

      $id = $bean_taller->getId();
      $chef_id = $bean_taller->getChefId();
      $titulo = $bean_taller->getTitulo();
      $descripcion = $bean_taller->getDescripcion();
      $imagen = $bean_taller->getImagen();
      $certificacion = $bean_taller->getCertificacion();
      $titulos = $bean_taller->getTitulos();
      $titulacion = $bean_taller->getTitulacion();
      $duracion = $bean_taller->getDuracion();
      $dia = $bean_taller->getDia();
      $horario = $bean_taller->getHorario();
      $lugar = $bean_taller->getLugar();
      $precio = $bean_taller->getPrecio();
      $dirigido = $bean_taller->getDirigido();
      $sesiones = $bean_taller->getSesiones();
      $temas = $bean_taller->getTemas();
      $url = $bean_taller->getUrl();
      $item = $bean_taller->getItem();
      $glosa = $bean_taller->getGlosa();
      $publicar = $bean_taller->getPublicar();
      $estado = $bean_taller->getEstado();
      $created_up = $bean_taller->getCreatedUp();

      $this->query = "INSERT INTO taller
                      (
                        chef_id,
                        titulo,
                        descripcion,
                        imagen,
                        certificacion,
                        titulos,
                        titulacion,
                        duracion,
                        dia,
                        horario,
                        lugar,
                        precio,
                        dirigido,
                        sesiones,
                        temas,
                        url,
                        item,
                        glosa,
                        publicar,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$chef_id',
                        '$titulo',
                        '$descripcion',
                        '$imagen',
                        '$certificacion',
                        '$titulos',
                        '$titulacion',
                        '$duracion',
                        '$dia',
                        '$horario',
                        '$lugar',
                        '$precio',
                        '$dirigido',
                        '$sesiones',
                        '$temas',
                        '$url',
                        '$item',
                        '$glosa',
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
  public function update($bean_taller)
  {
    try{
      $id = $bean_taller->getId();
      $chef_id = $bean_taller->getChefId();
      $titulo = $bean_taller->getTitulo();
      $descripcion = $bean_taller->getDescripcion();
      $imagen = $bean_taller->getImagen();
      $certificacion = $bean_taller->getCertificacion();
      $titulos = $bean_taller->getTitulos();
      $titulacion = $bean_taller->getTitulacion();
      $duracion = $bean_taller->getDuracion();
      $dia = $bean_taller->getDia();
      $horario = $bean_taller->getHorario();
      $lugar = $bean_taller->getLugar();
      $precio = $bean_taller->getPrecio();
      $dirigido = $bean_taller->getDirigido();
      $sesiones = $bean_taller->getSesiones();
      $temas = $bean_taller->getTemas();
      $url = $bean_taller->getUrl();
      $item = $bean_taller->getItem();
      $glosa = $bean_taller->getGlosa();
      $publicar = $bean_taller->getPublicar();

      $this->query = "UPDATE taller SET 
                        chef_id = '$chef_id',
                        titulo = '$titulo',
                        descripcion = '$descripcion',
                        imagen = '$imagen',
                        certificacion = '$certificacion',
                        titulos = '$titulos',
                        titulacion = '$titulacion',
                        duracion = '$duracion',
                        dia = '$dia',
                        horario = '$horario',
                        lugar = '$lugar',
                        precio = '$precio',
                        dirigido = '$dirigido',
                        sesiones = '$sesiones',
                        temas = '$temas',
                        url = '$url',
                        item = '$item',
                        glosa = '$glosa',
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
  public function updateEstado($bean_taller)
  {
    try{
      $id = $bean_taller->getId();
      $estado = $bean_taller->getEstado();

      $this->query = "UPDATE taller SET 
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
  public function find($bean_taller)
  {
    try{
      $id = $bean_taller->getId();

      $this->query = "SELECT * FROM taller WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_taller)
  {
    try{
      $id = $bean_taller->getId();

      $this->query = "DELETE FROM taller
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method updatePublish
  public function updatePublish($bean_taller)
  {
    try{
      $id = $bean_taller->getId();
      $publicar = $bean_taller->getPublicar() ;

      $this->query = "UPDATE taller SET 
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
  public function getPublished($bean_taller)
  {
    try{
      $publicar = $bean_taller->getPublicar() ;

      $this->query = "SELECT * FROM taller
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
