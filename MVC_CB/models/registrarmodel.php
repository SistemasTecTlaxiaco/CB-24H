<?php

    class RegistrarModel extends Model{
        public function __construct(){
            parent::__construct();
        }

        public function insert($datos){
            //insertar datos en la BD Y PREPARAMOS EL QUERY DELA TABLA   
            try {
                //Preparamos la informacion antes de mandarla para evitar SQL inyección LINE 12
                $query = $this->db->connect()->prepare('INSERT INTO CLIENTES(NOMBRE, USERNAME, SEGURIDAD, NEGOCIO, DESCRIPCION, UBICACION) VALUES (:nombre, :username, :seguridad, :negocio, :descripcion, :ubicacion)');
                //mapeamos los datos del arreglo LINE 13
                $query->execute(['nombre' => $datos['nombre'],'username' => $datos['username'], 'seguridad' => $datos['seguridad'], 'negocio' => $datos['negocio'],'descripcion' => $datos['descripcion'],'ubicacion' => $datos['ubicacion']]);
                    //echo "Dato Insertado";
                    return true;
                
            } catch(PDOException $e)
            {
                //echo "Ya existe ese usuario";
                return false;
            }
            
            
        }
    }
?>
