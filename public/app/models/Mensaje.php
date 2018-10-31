<?php 
# Class Model Generada - ByPower @armandaepp 
class Mensaje extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM mensaje";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_mensaje)
    {
        try{
            $id = $bean_mensaje->getId();
            $titulo = $bean_mensaje->getTitulo();
            $imagen = $bean_mensaje->getImagen();
            $descripcion = $bean_mensaje->getDescripcion();
            $descripcion_2 = $bean_mensaje->getDescripcion2();
            $slogan = $bean_mensaje->getSlogan();
            $mision = $bean_mensaje->getMision();
            $vision = $bean_mensaje->getVision();
            $orden = $bean_mensaje->getOrden();
            $estado = $bean_mensaje->getEstado();
            $fecha = $bean_mensaje->getFecha();

            $this->query = "INSERT INTO mensaje
                            (
                                titulo,
                                imagen,
                                descripcion,
                                descripcion_2,
                                slogan,
                                mision,
                                vision,
                                orden,
                                estado,
                                fecha
                            )
                            VALUES(
                                '$titulo',
                                '$imagen',
                                '$descripcion',
                                '$descripcion_2',
                                '$slogan',
                                '$mision',
                                '$vision',
                                '$orden',
                                '$estado',
                                '$fecha'
                            )";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;


         }catch(exception $e){

             throw new Exception($e->getMessage());

         }
    }

    # Método Actualizar
    public function update($bean_mensaje)
    {
        try{
            $id = $bean_mensaje->getId();
            $titulo = $bean_mensaje->getTitulo();
            $imagen = $bean_mensaje->getImagen();
            $descripcion = $bean_mensaje->getDescripcion();
            $descripcion_2 = $bean_mensaje->getDescripcion2();
            $slogan = $bean_mensaje->getSlogan();
            $mision = $bean_mensaje->getMision();
            $vision = $bean_mensaje->getVision();
            $orden = $bean_mensaje->getOrden();
            $estado = $bean_mensaje->getEstado();
            $fecha = $bean_mensaje->getFecha();

            $this->query = "UPDATE mensaje SET 
                                titulo = '$titulo,
                                imagen = '$imagen,
                                descripcion = '$descripcion,
                                descripcion_2 = '$descripcion_2,
                                slogan = '$slogan,
                                mision = '$mision,
                                vision = '$vision,
                                orden = '$orden,
                                estado = '$estado,
                                fecha = '$fecha
                            WHERE id = '$id'
                            LIMIT 1 ";
            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

         }catch(exception $e){

            throw new Exception($e->getMessage());

         }
    }

    # Método Eliminar(Actualizar Estado)
    public function updateEstado($bean_mensaje)
    {
        try{
            $id = $bean_mensaje->getId();
            $estado = $bean_mensaje->getEstado();

            $this->query = "UPDATE mensaje SET 
                                estado = '$estado'
                            WHERE id='$id'
                            LIMIT 1 ";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Buscar por ID
    public function getById($bean_mensaje)
    {
        try{
            $id = $bean_mensaje->getId();

            $this->query = "SELECT * FROM mensaje WHERE id = '$id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_mensaje)
    {
        try{
            $id = $bean_mensaje->getId();

            $this->query = "DELETE FROM mensaje WHERE id = '$id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>