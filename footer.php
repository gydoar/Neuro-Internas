
<footer>
	<div class="container">
		<div class="ten columns offset-by-one">
			<p>Desarrollado por <img src="images/logo-celebrity.png" alt=""></p>
		</div>	
	</div>
</footer>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>

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
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
