<?php
require 'modelo/Margot_M.php'; 	


class FuncionesAction 

{
  
    
    
    
    
 

		
   public function obtener_Perfumes()
  {
   $tienda=new Margot_M();    // creamos una instancia de Tiendas
  $perfumes=$tienda->obtener_Perfumes(); 
  
  return $perfumes;  
 } 
 

 
 
  }
        
        

