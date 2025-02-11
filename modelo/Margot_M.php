<?php
	
require 'db/margot_DB.php';

class Margot_M 

{
 
    
     public function obtener_Perfumes(){

     $tienda = new Margot_DB(); 
     $perfumes=$tienda->obtener_Perfumes();  

       return $perfumes;        
    }
    
    
 
  
  
    
    
    

	}

?>