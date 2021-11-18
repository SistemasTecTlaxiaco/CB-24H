<?php

    class ProductoModel extends Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($datos){
            //insertar datos en la BD Y PREPARAMOS EL QUERY DELA TABLA   
            try 
            {
                //Preparamos la informacion antes de mandarla para evitar SQL inyección LINE 12
                $query = $this->db->connect()->prepare('INSERT INTO PRODUCTOS(NOMBRE, INGREDIENTES, PRECIO) VALUES (:nombre, :ingredientes, :precio)');
                //mapeamos los datos del arreglo LINE 13
                $query->execute(['nombre' => $datos['nombre'],'ingredientes' => $datos['ingredientes'], 'precio' => $datos['precio']]);
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
