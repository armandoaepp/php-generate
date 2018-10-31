<?php 
# Class Model Generada - ByPower @armandaepp 
class BuzonContacto extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM buzon_contacto";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_buzon_contacto)
    {
        try{
            $id = $bean_buzon_contacto->getId();
            $nombre = $bean_buzon_contacto->getNombre();
            $dni = $bean_buzon_contacto->getDni();
            $email = $bean_buzon_contacto->getEmail();
            $telefono = $bean_buzon_contacto->getTelefono();
            $fecha = $bean_buzon_contacto->getFecha();

            $this->query = "INSERT INTO buzon_contacto
                            (
                                nombre,
                                dni,
                                email,
                                telefono,
                                fecha
                            )
                            VALUES(
                                '$nombre',
                                '$dni',
                                '$email',
                                '$telefono',
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
    public function update($bean_buzon_contacto)
    {
        try{
            $id = $bean_buzon_contacto->getId();
            $nombre = $bean_buzon_contacto->getNombre();
            $dni = $bean_buzon_contacto->getDni();
            $email = $bean_buzon_contacto->getEmail();
            $telefono = $bean_buzon_contacto->getTelefono();
            $fecha = $bean_buzon_contacto->getFecha();

            $this->query = "UPDATE buzon_contacto SET 
                                nombre = '$nombre,
                                dni = '$dni,
                                email = '$email,
                                telefono = '$telefono,
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
    public function updateEstado($bean_buzon_contacto)
    {
        try{
            $id = $bean_buzon_contacto->getId();
            $estado = $bean_buzon_contacto->getEstado();

            $this->query = "UPDATE buzon_contacto SET 
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
    public function getById($bean_buzon_contacto)
    {
        try{
            $id = $bean_buzon_contacto->getId();

            $this->query = "SELECT * FROM buzon_contacto WHERE id = '$id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_buzon_contacto)
    {
        try{
            $id = $bean_buzon_contacto->getId();

            $this->query = "DELETE FROM buzon_contacto WHERE id = '$id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>