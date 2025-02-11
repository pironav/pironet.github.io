<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <title></title>
        <meta charset="UTF-8">
        
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <style>
        *{
            padding: 0;
            margin: 0;
            box-shadow: 0;
        }
        #headerAdmin {
           
           
          /*  background-color:#0074d9;*/
            display: flex;
            justify-content: space-between;
            align-items: center;
           padding-left: 15px;
           border-width: 1px 0px 1px 0px ;
           border-color: #0074d9;
           border-style:solid;
           height: 70px;
        }
        
        #headerAdmin #logo img{
           width: 125px;
           height: 65px;
        }
        
       #headerAdmin  #menuAdmin  {
         /*  background-color: yellow;*/
            margin-right: 25px;
           display: flex;
           flex-basis: 600px;
           justify-content: space-between;
          
        }
        
      #headerAdmin  #menuAdmin a {
          background-color: #FFF;
          height: 30px;
          
          display: flex;
         align-items: flex-start;
         
            color:#7B7D7B;
        }
        
        #headerAdmin  #menuAdmin a span{
        
        margin-right: 5px;
        display: flex;
       
        
        }
        @media screen and (max-width: 759px) {
            
     #headerAdmin {
           
           
         
           padding-left: 5px;
          
           height: 70px;
        }

 #headerAdmin #logo img{
           width: 100px;
           height: 50px;
        }        
    
    #headerAdmin  #menuAdmin a .vinculo{
        
        display: none;
       
        
        }  
        
         #headerAdmin  #menuAdmin  {
         /*  background-color: yellow;*/
            margin-left: 25px;
            margin-right: 20px;
          
          
        }
       
}   
    </style>
    </head>
    
    <body>
       <div id="headerAdmin">
           <div id="logo">
               <img src="imagenes/logoMargot.jpg"  alt="">
               
           </div>
           <div id="menuAdmin">
               <a href="index.php"><span class="icono"><img src="imagenes/iconos-svg/casa20pxGris.svg" width="20" height="20"></span><span class="vinculo">Inicio</span></a>
               <a href="transportistas.php"><span class="icono"><img src="imagenes/conduciendo.png" width="20" height="20"></span><span class="vinculo">Transportistas</span></a>
               <a href="unidades.php"><span class="icono"><img src="imagenes/iconos-svg/taxi2.svg" width="20" height="20"></span><span class="vinculo">Unidades</span></a>
               <a href="unidades.php"><span class="icono"><img src="imagenes/iconos-svg/edificioBanco.svg" width="20" height="20"></span><span class="vinculo">Finanzas</span></a>
               <a href="salir.php"><span class="icono"><img src="imagenes/iconos-svg/salida.svg" width="20" height="20"></span><span class="vinculo">Salir</span></a>
              
           </div>
        </div>
    </body>
</html>
