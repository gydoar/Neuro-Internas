
<footer>
	<div class="container">
		<div class="ten columns offset-by-one">
			<p>Desarrollado por <img src="images/logo-celebrity.png" alt=""></p>
		</div>	
	</div>
</footer>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-buttons.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/funciones.js"></script>

<script>
	$(document).on("ready", main);
	function main(){
		$("nav a").on("click", irA);
	}
	function irA(){
		var seccion = $(this).attr("href");
		$("body, html").animate({
			scrollTop: $(seccion).offset().top
		},1200);
		return false;
	}
</script>

<script>
	$(document).on("ready", main2);
	function main2(){
		$(".nombre-expositores a").on("click", irA2);
	}
	function irA2(){
		var seccion = $(this).attr("href");
		$("body, html").animate({
			scrollTop: $(seccion).offset().top
		},1200);
		return false;
	}
</script>

<script>
	$(document).on("ready", main3);
	function main3(){
		$(".call-to-action a").on("click", irA3);
	}
	function irA3(){
		var seccion = $(this).attr("href");
		$("body, html").animate({
			scrollTop: $(seccion).offset().top
		},1200);
		return false;
	}
</script>
<script>
	$(window).scroll(function(){

	  var scroll = $(window).scrollTop();

	  if (scroll > 0 ) {
	    $('header').addClass('scrolled');
	  }

	  if (scroll <= 0 ) {
	    $('header').removeClass('scrolled');
	 }

	});
</script>

<!-- Fancybox -->
<script>
	$(document).ready(function() {
		$(".various").fancybox({
			maxWidth	: 500,
			maxHeight	: 400,
			fitToView	: false,
			width		: '70%',
			height		: '70%',
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none'
		});
	});
</script>

<!-- mostrar texto con Ajax -->
<script>
$(document).ready(function(){
   $("#enlaceajax").click(function(evento){
      evento.preventDefault();
      $("#destino").load("contenido-ajax.php");

   });


})
</script>
<script>
$(document).ready(function(){
   $("#enlaceajax2").click(function(evento){
      evento.preventDefault();
      $("#destino").load("contenido-ajax.php");
   });

})
</script>
<script>
$(document).ready(function(){
   $("#enlaceajax3").click(function(evento){
      evento.preventDefault();
      $("#destino").load("contenido-ajax.php");
   });

})
</script>
<script>
	// jQuery
	$(document).ready(function(){ 
	  
	    $('#alternar-respuesta-ej1').toggle( 
	  
	        // Primer click
	        function(e){ 
	            $('#respuesta-ej1').slideDown();
	            $(this).text('CERRAR');
	            e.preventDefault();
	        }, // Separamos las dos funciones con una coma
	      
	        // Segundo click
	        function(e){ 
	            $('#respuesta-ej1').slideUp();
	            $(this).text('LEER MÁS');
	            e.preventDefault();
	        }
	  
	    );

	    $('#alternar-respuesta-ej2').toggle( 
	  
	        // Primer click
	        function(e){ 
	            $('#respuesta-ej2').slideDown();
	            $(this).text('CERRAR');
	            e.preventDefault();
	        }, // Separamos las dos funciones con una coma
	      
	        // Segundo click
	        function(e){ 
	            $('#respuesta-ej2').slideUp();
	            $(this).text('LEER MÁS');
	            e.preventDefault();
	        }
	  
	    );

	    $('#alternar-respuesta-ej3').toggle( 
	  
	        // Primer click
	        function(e){ 
	            $('#respuesta-ej3').slideDown();
	            $(this).text('CERRAR');
	            e.preventDefault();
	        }, // Separamos las dos funciones con una coma
	      
	        // Segundo click
	        function(e){ 
	            $('#respuesta-ej3').slideUp();
	            $(this).text('LEER MÁS');
	            e.preventDefault();
	        }
	  
	    );
	  
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
	    setTimeout(function() {
	        $("#result").fadeOut(1500);
	    },3000);
	});
</script>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
