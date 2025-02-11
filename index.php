<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
	<title>Margot catalogo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
       
         <script src="js/libreriaJS.js"></script> 
<script>  /*nos permite marcar en el menu la pagina activa en donde se este    */
     
         window.onload = function() {
            document.getElementById("menuInicio").style.borderColor='#a5a7a1';
          };
          
</script>              
</head>
 <?php include("plantillaHeaderPublic.php"); ?> 
<body>
 	

  <main>
      <div class="titulo">
          <h1>PERFUMES MARGOT</h1>
          <h5>(CATALOGO)</h5>
      </div>
      
      <div id="contenedorArchivos">
                        
                         <div class="archivo" onclick="location.href='perfumes.php'">
                            <div class="carpeta">
                                <img src="imagenes/choferLiders.png" alt=""/>
                                <span class="tipo">PERFUMES</span>
                               
                                
                               
                             
                             </div> 
                         </div>
                         <div class="archivo" onclick="location.href='unidades.php'">
                            <div class="carpeta">
                                <img src="imagenes/unidadImagenLider.jpg" alt=""/>
                                <span class="tipo">LENTES</span>
                                
                            </div> 
        </div>
          <div class="archivo" onclick="location.href='organizaciones.php'">
                            <div class="carpeta">
                                <img src="imagenes/finanzas.png" alt=""/>
                                <span class="tipo">ACCESORIOS</span>
                               
                                
                                
                             
                             </div> 
                         </div>
        </div>
  </main> 
</body>
</html>