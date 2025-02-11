<?php

require 'conexiones/db_conect.php';

class Margot_DB extends Db_conect       // ESTA ES LA CLASE QUE accede a la base de datos y obtiene los datos 
{                                               // vemos que es una herencia de la clase conexion
                                                // con eso tenemos acceso a las variables y metodos(funciones)// que esten definidas en la clase Conexion
   
    
    public function Conectar()      // el metodo constructor de la clase conexionl
    {
                                 // llamanos con esta instrucion al metodo constructor de la clase padre, es decir de la que se hereda en este caso de
                                 // la clase Conexion    
      parent::__construct();    
    }
    
    
     public function obtener_Perfumes()
    {
      
 //$cedula2='V-15.423.997';
      $sql= " SElECT * from perfumes";
 
  
    
    $sentencia= $this->conexion->prepare($sql); //preparamosla consulta llamando al metodo prepare del objeto conexion_db
// de la clase Conexion al cual tenemos acceso gracias a la herencia y nos devuelve un objeto que llamaremos sentencia
 
  
   
   $sentencia->execute();  // ejecutamos la sentencia invocando al metodo execute del objeto sentencia

//
   $resultado=$sentencia->fetchall(PDO::FETCH_ASSOC);//  utilizamos el metodo fetcall del objeto sentencia para guardar
   // los registros obtenidos al ejecutar la sentencia y lo guardamos en un arrays de tipo asociativo

  // $sentencia->closeCursor;  //cerramos la sentencia
   
  $this->conexion=NULL;


  return $resultado;  
    }
    
   
    
  
 }
?>