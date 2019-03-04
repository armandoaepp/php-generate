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
      $detalleduracion = $bean_carrera->getDetalleduracion();
      $detalledia = $bean_carrera->getDetalledia();
      $detallehorario = $bean_carrera->getDetallehorario();
      $detallelugar = $bean_carrera->getDetallelugar();
      $detalleprecio = $bean_carrera->getDetalleprecio();
      $detalleequipos = $bean_carrera->getDetalleequipos();
      $detalleconsultas = $bean_carrera->getDetalleconsultas();
      $detalledirigido = $bean_carrera->getDetalledirigido();
      $aquien = $bean_carrera->getAquien();
      $temas = $bean_carrera->getTemas();
      $nombreseo = $bean_carrera->getNombreseo();
      $orden = $bean_carrera->getOrden();
      $estado = $bean_carrera->getEstado();
      $fecha = $bean_carrera->getFecha();

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
                        detalleduracion,
                        detalledia,
                        detallehorario,
                        detallelugar,
                        detalleprecio,
                        detalleequipos,
                        detalleconsultas,
                        detalledirigido,
                        aquien,
                        temas,
                        nombreseo,
                        orden,
                        estado,
                        fecha
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
                        '$detalleduracion',
                        '$detalledia',
                        '$detallehorario',
                        '$detallelugar',
                        '$detalleprecio',
                        '$detalleequipos',
                        '$detalleconsultas',
                        '$detalledirigido',
                        '$aquien',
                        '$temas',
                        '$nombreseo',
                        '$orden',
                        '$estado',
                        '$fecha'
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
      $detalleduracion = $bean_carrera->getDetalleduracion();
      $detalledia = $bean_carrera->getDetalledia();
      $detallehorario = $bean_carrera->getDetallehorario();
      $detallelugar = $bean_carrera->getDetallelugar();
      $detalleprecio = $bean_carrera->getDetalleprecio();
      $detalleequipos = $bean_carrera->getDetalleequipos();
      $detalleconsultas = $bean_carrera->getDetalleconsultas();
      $detalledirigido = $bean_carrera->getDetalledirigido();
      $aquien = $bean_carrera->getAquien();
      $temas = $bean_carrera->getTemas();
      $nombreseo = $bean_carrera->getNombreseo();
      $orden = $bean_carrera->getOrden();
      $fecha = $bean_carrera->getFecha();

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
                        detalleduracion = '$detalleduracion',
                        detalledia = '$detalledia',
                        detallehorario = '$detallehorario',
                        detallelugar = '$detallelugar',
                        detalleprecio = '$detalleprecio',
                        detalleequipos = '$detalleequipos',
                        detalleconsultas = '$detalleconsultas',
                        detalledirigido = '$detalledirigido',
                        aquien = '$aquien',
                        temas = '$temas',
                        nombreseo = '$nombreseo',
                        orden = '$orden',
                        fecha = '$fecha'
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

}
