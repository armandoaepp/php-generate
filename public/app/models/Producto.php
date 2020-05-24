<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Producto extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM producto; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_producto)
  {
    try{

      $producto_id = $bean_producto->getProductoId();
      $sub_categoria_id = $bean_producto->getSubCategoriaId();
      $categoria_id = $bean_producto->getCategoriaId();
      $codigo = $bean_producto->getCodigo();
      $nombre = $bean_producto->getNombre();
      $descripcion_corta = $bean_producto->getDescripcionCorta();
      $precio = $bean_producto->getPrecio();
      $descuento = $bean_producto->getDescuento();
      $precio_descuento = $bean_producto->getPrecioDescuento();
      $num_visitas = $bean_producto->getNumVisitas();
      $publicar = $bean_producto->getPublicar();
      $estado = $bean_producto->getEstado();
      $created_at = $bean_producto->getCreatedAt();

      $this->query = "INSERT INTO producto
                      (
                        sub_categoria_id,
                        categoria_id,
                        codigo,
                        nombre,
                        descripcion_corta,
                        precio,
                        descuento,
                        precio_descuento,
                        num_visitas,
                        publicar,
                        estado,
                        created_at
                      )
                      VALUES(
                        '$sub_categoria_id',
                        '$categoria_id',
                        '$codigo',
                        '$nombre',
                        '$descripcion_corta',
                        '$precio',
                        '$descuento',
                        '$precio_descuento',
                        '$num_visitas',
                        '$publicar',
                        '$estado',
                        $created_at
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_producto)
  {
    try{
      $producto_id = $bean_producto->getProductoId();
      $sub_categoria_id = $bean_producto->getSubCategoriaId();
      $categoria_id = $bean_producto->getCategoriaId();
      $codigo = $bean_producto->getCodigo();
      $nombre = $bean_producto->getNombre();
      $descripcion_corta = $bean_producto->getDescripcionCorta();
      $precio = $bean_producto->getPrecio();
      $descuento = $bean_producto->getDescuento();
      $precio_descuento = $bean_producto->getPrecioDescuento();
      $num_visitas = $bean_producto->getNumVisitas();
      $publicar = $bean_producto->getPublicar();

      $this->query = "UPDATE producto SET 
                        sub_categoria_id = '$sub_categoria_id',
                        categoria_id = '$categoria_id',
                        codigo = '$codigo',
                        nombre = '$nombre',
                        descripcion_corta = '$descripcion_corta',
                        precio = '$precio',
                        descuento = '$descuento',
                        precio_descuento = '$precio_descuento',
                        num_visitas = '$num_visitas',
                        publicar = '$publicar'
                      WHERE producto_id = '$producto_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_producto)
  {
    try{
      $producto_id = $bean_producto->getProductoId();

      $this->query = "SELECT * FROM producto WHERE producto_id = '$producto_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_producto)
  {
    try{
      $producto_id = $bean_producto->getProductoId();

      $this->query = "DELETE FROM producto
                      WHERE producto_id = '$producto_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_producto)
  {
    try{
      $estado = $bean_producto->getEstado() ;

      $this->query = "SELECT * FROM producto
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_producto)
  {
    try{
      $producto_id = $bean_producto->getProductoId();
      $estado = $bean_producto->getEstado();

      $this->query = "UPDATE producto SET 
                        estado = '$estado'
                      WHERE producto_id='$producto_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method updatePublish
  public function updatePublish($bean_producto)
  {
    try{
      $producto_id = $bean_producto->getProductoId();
      $publicar = $bean_producto->getPublicar() ;

      $this->query = "UPDATE producto SET 
                        publicar = '$publicar'
                      WHERE producto_id = '$producto_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_producto)
  {
    try{
      $publicar = $bean_producto->getPublicar() ;

      $this->query = "SELECT * FROM producto
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
