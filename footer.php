
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

   $('#cerrar').on('click',function(){
      $('contenido-ajax.php').toggle();
      $('#cerrar').fadeIn(2000);
   });

})
</script>
<script>
$(document).ready(function(){
   $("#enlaceajax2").click(function(evento){
      evento.preventDefault();
      $("#destino").load("contenido-ajax.php");
   });
   $('#cerrar2').on('click',function(){
      $('contenido-ajax.php').toggle();
      $('#cerrar2').fadeIn(2000);
   });
})
</script>

<script>
$(document).ready(function(){
   $("#enlaceajax3").click(function(evento){
      evento.preventDefault();
      $("#destino").load("contenido-ajax.php");
   });
   $('#cerrar3').on('click',function(){
      $('contenido-ajax.php').toggle();
      $('#cerrar3').fadeIn(2000);
   });
})
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
