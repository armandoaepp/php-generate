<?php 
# Class Model Generada - ByPower @armandaepp 
class Facultad extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM facultad";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_facultad)
    {
        try{
            $id = $bean_facultad->getId();
            $titulo = $bean_facultad->getTitulo();
            $descripcion = $bean_facultad->getDescripcion();
            $imagen = $bean_facultad->getImagen();
            $orden = $bean_facultad->getOrden();
            $estado = $bean_facultad->getEstado();
            $fecha = $bean_facultad->getFecha();
            $activo = $bean_facultad->getActivo();

            $this->query = "INSERT INTO facultad
                            (
                                titulo,
                                descripcion,
                                imagen,
                                orden,
                                estado,
                                fecha,
                                activo
                            )
                            VALUES(
                                '$titulo',
                                '$descripcion',
                                '$imagen',
                                '$orden',
                                '$estado',
                                '$fecha',
                                '$activo'
                            )";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;


         }catch(exception $e){

             throw new Exception($e->getMessage());

         }
    }

    # Método Actualizar
    public function update($bean_facultad)
    {
        try{
            $id = $bean_facultad->getId();
            $titulo = $bean_facultad->getTitulo();
            $descripcion = $bean_facultad->getDescripcion();
            $imagen = $bean_facultad->getImagen();
            $orden = $bean_facultad->getOrden();
            $estado = $bean_facultad->getEstado();
            $fecha = $bean_facultad->getFecha();
            $activo = $bean_facultad->getActivo();

            $this->query = "UPDATE facultad SET 
                                titulo = '$titulo,
                                descripcion = '$descripcion,
                                imagen = '$imagen,
                                orden = '$orden,
                                estado = '$estado,
                                fecha = '$fecha,
                                activo = '$activo
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
    public function updateEstado($bean_facultad)
    {
        try{
            $id = $bean_facultad->getId();
            $estado = $bean_facultad->getEstado();

            $this->query = "UPDATE facultad SET 
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
    public function getById($bean_facultad)
    {
        try{
            $id = $bean_facultad->getId();

            $this->query = "SELECT * FROM facultad WHERE id = '$id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_facultad)
    {
        try{
            $id = $bean_facultad->getId();

            $this->query = "DELETE FROM facultad WHERE id = '$id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>