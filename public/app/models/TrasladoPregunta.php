<?php 
# Class Model Generada - ByPower @armandaepp 
class TrasladoPregunta extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM traslado_pregunta";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_traslado_pregunta)
    {
        try{
            $id = $bean_traslado_pregunta->getId();
            $pregunta = $bean_traslado_pregunta->getPregunta();
            $respuesta = $bean_traslado_pregunta->getRespuesta();
            $orden = $bean_traslado_pregunta->getOrden();
            $estado = $bean_traslado_pregunta->getEstado();
            $fecha = $bean_traslado_pregunta->getFecha();

            $this->query = "INSERT INTO traslado_pregunta
                            (
                                pregunta,
                                respuesta,
                                orden,
                                estado,
                                fecha
                            )
                            VALUES(
                                '$pregunta',
                                '$respuesta',
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
    public function update($bean_traslado_pregunta)
    {
        try{
            $id = $bean_traslado_pregunta->getId();
            $pregunta = $bean_traslado_pregunta->getPregunta();
            $respuesta = $bean_traslado_pregunta->getRespuesta();
            $orden = $bean_traslado_pregunta->getOrden();
            $estado = $bean_traslado_pregunta->getEstado();
            $fecha = $bean_traslado_pregunta->getFecha();

            $this->query = "UPDATE traslado_pregunta SET 
                                pregunta = '$pregunta,
                                respuesta = '$respuesta,
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
    public function updateEstado($bean_traslado_pregunta)
    {
        try{
            $id = $bean_traslado_pregunta->getId();
            $estado = $bean_traslado_pregunta->getEstado();

            $this->query = "UPDATE traslado_pregunta SET 
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
    public function getById($bean_traslado_pregunta)
    {
        try{
            $id = $bean_traslado_pregunta->getId();

            $this->query = "SELECT * FROM traslado_pregunta WHERE id = '$id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_traslado_pregunta)
    {
        try{
            $id = $bean_traslado_pregunta->getId();

            $this->query = "DELETE FROM traslado_pregunta WHERE id = '$id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>