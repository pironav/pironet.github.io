<!DOCTYPE html>

<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Margot perfumes</title>
  <link rel="shortcut icon" href="carritoComprasFavicon.ico" >
  <link rel="stylesheet" href="css/articulos.css"> 
 
  <!--     estaos aqui encerrados deben estar eb todas las paginas donde se invoque la pagina plantillaheader.php  ya que ella los utiliza -->
   <script src="js/libreriaJS.js"></script> 
     <script src="js/libreriaJqueyyAjax.js"></script>
    
    <link rel="stylesheet" href="css/autocompletar-ui.css">
    <link rel="stylesheet" href="css/preloader.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- El script creado por nosotros que maneja todo el carrito de compras -->
  <script src="js/funciones/carritoCompras.js"></script>
   <!--    .............................................................................................................................................................. -->
   <script src="js/jquery-ui.js"></script> <!-- para el imput autocompletar -->
   
 <script src="js/funciones/funcionesPHP/cargador.php"></script> 
 <meta name="theme-color" content="#FFF"> <!-- para cambiar color a la barra del navegador google crome -->
 <meta name="robots" content="noindex, nofollow" />
 
 


<script> 
 /*nos permite marcar la categoria en donde estemos    */
$(document).ready(function () {
    
    fetch('controladores/obtenerCategoriaSesion.php', {      // el archivo que se ejecutara y enviara el json
                 method: 'POST',
                 headers: {
                     'Content-Type': 'application/x-www-form-urlencoded'
                 },
                /* body: 'a=1&b=2' en caso mas parametros a pasar en la llamada */

             
             })
           
             
            .then(function(response) {
                 console.log('response =', response);

                 return response.json();


             })
             //y luego en esta otra promesa data es el json obtenido en la respuesta
             // y hacemos aqui lo que deseemos hacer con el json y agregar otras funcines que deseemos
             .then(function(data) {

                 //imprimimos la respuesta recibida
                 console.log('categoria = ', data);  // mostramos todo el json
                var categoriaSesion = data;
             
            // alert(categoriaSesion);
             var categoria = $('.'+categoriaSesion);
             //agregamos al boton categoria correspondiente la clase prueba 3 la cual contiene el css para marcar el borde
             console.log(categoria);
             categoria.addClass('prueba2');  
     })
            // lo que haremos si hay error en la conexion
             .catch(function(err) {
                 console.error('error no se encontro la categoria'+err);

             });
   
});
          
</script>   


<script type="text/javascript"> 
  // esta funcion nos permite agregar un articulo al carrito desde la ventana Modal
  function agregarArticuloModal(){
    //alert('ok');
    var id = $('#idArt').html();
    var nombre = $('#nomArt').html();
    var precio = $('#costoArt').html();
    //alert(nombre);
    agregarArticulo(id,nombre,precio);
 } 
 </script>   
 <script type="text/javascript"> 
//para limpiar el input que busca un articulo al dar clip en el     
$(document).ready(function() {
  $('#tag').click(function() {
    $('#tag').val('');
    $("#nomArt").html('');
    $("#idArt").html('');
    $("#costoArt").html('');
    
    $("#imgArt").attr("src","");
  });
});
</script> 
<script type="text/javascript">
//cargamos la imagen en el servidor    
function preloader($valor)   {  
    
   
    // Aquí el código que se tiene que ejecutar con retardo
    if ($valor === 'mostrar')
    {
     //   alert('ok mostrar');
     // -----cargamos el preloader -----------------
       $("#content").css("display", "block");
      $('#content').html('<div class="loader"></div>');
      //-----------------------------------------------
    }
    if ($valor === 'cerrar')
    {
    
      $("#content").css("display", "none"); 
      

         
    }
 
   
        
        
    } 

</script>

<script>
 
function cambiarCategoria($idCategoria) {
   
 //  alert ('ok');
  // alert($idCategoria);
  preloader('mostrar');
 
   fetch('controladores/cambiarIdCategoria.php', {     
                 method: 'POST',
                 headers: {
                     'Content-Type': 'application/x-www-form-urlencoded'
                 },
                /* body: 'a=1&b=2' en caso mas parametros a pasar en la llamada */

             body: 'categoria='+$idCategoria
             });
             
             
            
              
           
       // $('.prueba2').removeClass("prueba2");
       var botonAntiguo = document.getElementsByClassName("prueba2");
        for (var i = 0; i<botonAntiguo.length; i++) {
        botonAntiguo[i].classList.remove("prueba2");
       
       }
        
           var categoria = $('.'+$idCategoria);
             //agregamos al boton categoria correspondiente la clase prueba 3 la cual contiene el css para marcar el borde
            
             categoria.addClass('prueba2'); 
             
              // con esta expresion mandamos a recargar solo el contenedor y evitamos recargar la pagina 
            // completa por tanto mas rapides y mejor experiencia de usuario
            // ojo muy pendiente el espacio que hay que dejar despues del " sino refresca toda la pagina y la duplica
            // me volvio loco eso 
           //recargamos la sesion que carga la lista 
            $("#php").load(location.href + " #php");
           // recargamos la sesion que tiene los articulos dandole efecto de retardo con fadeToggle
         //  $(".container").fadeToggle(3000);
         
           $(".container").load(location.href + " .container");
           
          
           preloader('cerrar');
          //  asyncCall();
         //  $(".container").css("display", "block");
        //  $(".container").fadeToggle(3000);
          //  $(".container").fadeToggle(3000);
        
           //cerramos el preloader   
      //    preloader('cerrar');
         
 
 
 
}
</script> 
<script type="text/javascript"> 
  $(function () {

  let $win = $(window);
   
  //     alert("La resolución de tu pantalla es: " + resolucion + " x " + screen.height) 
  // definir mediente $pos la altura en píxeles desde el borde superior de la ventana del navegador y el elemento
  var $pos = $('.elementosFijos').offset().top;
  var $pos=$pos-70;
  //alert($pos);
   
  $win.scroll(function () {
   let resolucion = screen.width; // resolucion de pantalla del dispositivo conectado   
    
    
   if (resolucion < 750 )
   { 
    // $("header").css("position", "static"); 
     // le damos un pading igual o aproximado a la suma del aside mas el contenedor de categorias
     // para evitar salten bruscamente hacia arriba los articulos al fijar el asair
     $(".main").css("padding-top", "130px");   
     if ($win.scrollTop() >= $pos)
     {   
       $('.elementosFijos').addClass('menu-fixed');
       
        } 
     else {

       $('.elementosFijos').removeClass('menu-fixed');
         $(".main").css("padding-top", "70px");
     }
 }

   });

});

 
 </script> 
<script type="text/javascript">  
 $(document).ready(function(){

	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 500);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(200);
		} else {
			$('.ir-arriba').slideUp(200);
		}
	});

});
</script>      
 </head>    
  
  

 
   

  
<body>
    
<?php include("plantillaHeaderPublic.php"); ?>  <!-- Importamos el Header --> 
<span class="ir-arriba"><img src="imagenes/flechaArriba.png"></span>   
 
 <div class="main">
   
     
 
 
   
   
       <div id="php">
           
       
                       
                       <?php
                            
                             require_once("controladores/FuncionesAction.php");
                              $tiendas=new FuncionesAction();    // creamos una instancia de Tiendas
                              
                              $listaPerfumes=$tiendas->obtener_Perfumes();
                              //  imprime todo el arrays 
                               //  echo "<pre>";
                               //   print_r($listaPerfumes);
                               //      echo "</pre>";
                             
                          ?>        
            
          
           
          </div>  
      
    
         
     
        <div class="categorias">
        <?php
       //necesario para genera un numero aleatorio para cuando se redirija a la pagina categoriasTodasAdmin
       //el navegador no tome en cuenta la cache y se puedan ver los cambios que se hagan aqui
       $version=rand(1,999);
       //echo $version ;
      
?>       
          
           
           
           
         </div>
       
       <div class="elementosFijos">  
         <div class="aside">
          
           <div id="imagenCategoria">
                <img  src="imagenes/iconos-svg/viveresGrisOscuro.svg"  title="caja viveres">
            </div>
           <div class="selector">
              
               
               <input id="tag" placeholder="Buscar Perfume">
               <div class="contenedorPreloader">
                   <div id="content">
                                          
                   </div>
               </div>
               
               
  <script type="text/javascript">
                  
    $(document).ready(function () {
                            
    var items = <?= json_encode($arrayNombres) ?>; 
   var listaArticulos = <?= json_encode($listaArticulos) ?>;


    $("#tag").autocomplete({
            source: items,
            select: function (event, item) {

                    var params = {
                           //  listaArticulo:listaArticulos,
                            nombreArticulo: item.item.value

                    };
                // -----cargamos el preloader -----------------
                   $("#content").css("display", "block");
                  $('#content').html('<div class="loader"></div>');
                  //-----------------------------------------------
      $.get("controladores/obtenerArticuloAction.php", params, function (response) {

              var json = JSON.parse(response);
              console.log('response =', response);

              if (json.status === 200){
                      // ---------ocultamos el preloader------
                       $("#content").css("display", "none");
                      console.log("ok se encontro el articulo");
                      //llenamos el formulario de la ventana modal con los datos obtenidos
                       $("#nomArt").html(json.nombre_Art);
                        $("#idArt").html(json.id_Art);
                      $("#costoArt").html(json.precio_Art);
                      var idArt = json.id_Art;
                      $("#imgArt").attr("src","imagenes/articulos/"+idArt+".jpg");
                      //para abrir ventana modal con el articulo seleccionado
                      const open = document.getElementById('open');
                      const modal_container = document.getElementById('modal_container');
                       modal_container.classList.add('show'); 
                       // para el caso de movil ocultamos el teclado del movil despues de hacer la seleccion
                       //le damos el focus a un elemento el cual mantenemos oculto en el body
                       $('#hideKeyboard').focus();



              }else{
                  // ---------ocultamos el preloader------
                 $("#content").css("display", "none");
                 console.log('no se encontro articulo alguno');

              }
      }); // ajax

                }
        });
});
 </script>
 <script type="text/javascript">
 // para mostrar el modal pero solo al hacer clip en el boton con la lupa                 
    $(document).ready(function () {
    $('#botonTienda').click(function() {                        
    articulo= document.getElementById("tag").value;

   var params = {
    //aqui todos los parametros a pasar a la funcion   
    nombreArticulo: articulo
    //listaArticulo:listaArticulos,
       
   };
    // -----cargamos el preloader -----------------
       $("#content").css("display", "block");
      $('#content').html('<div class="loader"></div>');
      //-----------------------------------------------
    $.get("controladores/obtenerArticuloAction.php", params, function (response) {

            var json = JSON.parse(response);
            console.log('response =', response);

            if (json.status === 200){
                    // ---------ocultamos el preloader------
                     $("#content").css("display", "none");
                    console.log("ok se encontro el articulo");
                    //llenamos el formulario de la ventana modal con los datos obtenidos
                     $("#nomArt").html(json.nombre_Art);
                      $("#idArt").html(json.id_Art);
                    $("#costoArt").html(json.precio_Art);
                    var idArt = json.id_Art;
                    $("#imgArt").attr("src","imagenes/articulos/"+idArt+".jpg");
                    //para abrir ventana modal con el articulo seleccionado
                    const open = document.getElementById('open');
                    const modal_container = document.getElementById('modal_container');
                     modal_container.classList.add('show'); 
                     // para el caso de movil ocultamos el teclado del movil despues de hacer la seleccion
                     //le damos el focus a un elemento el cual mantenemos oculto en el body
                     $('#hideKeyboard').focus();



            }else{
                // ---------ocultamos el preloader------
               $("#content").css("display", "none");
               console.log('no se encontro articulo alguno');
               //alert ('Articulo no existencia')

            }
    }); // ajax
                                                
                                        
   });                            
                        });
                </script>               
                <button  id="botonTienda"><img border="0" src="imagenes/iconos-svg/lupaBlanca.svg" width="30" height="20" title="Buscar" onclick="mostrarArticuloModal()"></button>     
           </div>
           
           
           
            
       </div> 
      </div>   
       <div id="franjaSuperior">
             <div class="contenedorPreloader">
                <div id="content2">
                  <!-- aqui se mostrara el preloader --> 
                </div>
             </div>          
          </div>    
       <div class="container"> 
           
         
         <article>
       
               
                     <?php foreach ($listaPerfumes as $perfume):?>   
                          <div class="articulo">
                            
                            <div class="foto" style="position: relative; left: 0; top: 0;">
                             <!--    <img src="imagenes/articulos/<?php echo $perfume['codigo_perfume']?>.jpg?version=<?php echo $version;?>" alt=""> -->
                                 <img src="imagenes/articulos/<?php echo $perfume['codigo_perfume']?>.jpg?version=<?php echo $version?>" alt="">
                             </div>
                             <div class="informacion">
                                 <div id="idArticulo" hidden="">
                                     <?php  echo $perfume['codigo_perfume']?>
                                 </div>
                                 <div id="detalles">
                                     
                                     <span> <?php echo $perfume['nombre_perfume']?></span> 
                                     
                                     
                                  </div>
                                 <span id="descripcion" hidden=""><?php echo $elemento['descripcion_Art']?></span>
                                  <span class="separador">  ***** </span>
                                  <span id="precio"> <?php echo $perfume['precio_perfume']?> $</span>   
                             </div>
                             
                        </div> 
                           
                      <?php endforeach; ?> 
              
          
        </article> 
       
        
        
      
    </div>
  <button id="open">
  
</button>

<div id="modal_container" class="modal-container">
  <div class="modal">
    
      <input id="close" type="image" src="imagenes/iconos-svg/multiplicarGris.svg"  height="25" width="25"/> 

    
  
    
    <div class="imagenModal">
        <img id="imgArt" src="">
    </div>
    <div class="infModal">
       <span id="nomArt"></span>
       <span id="idArt" hidden></span>
       <span id="espaciador">  ***** </span>
       <div>
           <span id="costoArt"></span><span style="color:#000;">&nbsp $</span>  
       </div>
    </div>
    
     <div id="compras">
         <button type="button"  id="botonCarrito"  onclick="agregarArticuloModal()"><span class="ico"><img id="imagen1" border="0" src="imagenes/iconos-svg/carroComprasNaranja.svg" width="20" height="20" ><img id="imagen2" border="0" src="imagenes/iconos-svg/carroComprasBlanco.svg" width="20" height="20" ></span>&nbsp AGREGAR AL CARRITO</button>
     </div>
    
  </div>
</div>
<script type="text/javascript"> 
const open = document.getElementById('open');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');



open.addEventListener('click', () => {
   
  modal_container.classList.add('show');  
});

close.addEventListener('click', () => {
   
   modal_container.classList.remove('show');
   
     
});
    
</script> 


</div>
   
 <input id="hideKeyboard" style="position: absolute; left: 0px; top: -20px; z-index: -1;" type="text" name="hideKeyboard" readonly="readonly" />
 

 <footer>
      <?php include("plantillaFooter.php"); ?>  <!-- Importamos el Footer --> 
 </footer>
    
 
</body>

</html>