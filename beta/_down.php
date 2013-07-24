<div id="patrocina">
	<h3 class="title-middle ta-c tt-u">Patrocinadores</h3>
	<ul class="ta-c">
		<li class="d-ib"><a href="http://novatec.com.br/" target="_blank"><img src="img/temp/novatec.jpg" alt="Editora Novatec"></a></li>
		<li class="d-ib"><a href="http://www.caelum.com.br/" target="_blank"><img src="img/temp/caelum.jpg" alt="Caelum"></a></li>		
	</ul>   
</div>
<div id="patrocina" class="apoio">
	
    <h3 class="title-middle ta-c tt-u">Apoio</h3>
	<ul class="ta-c">
		<li class="d-ib"><a href="http://www.eventick.com.br" target="_blank"><img src="img/temp/eventick.jpg" alt="Eventick apoia o Frontinsampa"></a></li>
		<li class="d-ib"><a href="http://conferenciaweb.w3c.br/" target="_blank"><img src="img/temp/webbr.jpg" alt="Evento Web Br W3C Brasil"></a></li>
		<li class="d-ib"><a href="http://www.gravento.com.br/" target="_blank"><img src="img/temp/gravento.jpg" alt="Gravento apoia o Frontinsampa"></a></li>		
		<li class="d-ib"><a href="http://www.imasters.com.br/" target="_blank"><img src="img/temp/imasters.jpg" alt="iMasters apoia o Frontinsampa"></a></li>		
	</ul>
</div>
<footer id="contato" role="contentinfo">
	<div class="wrap">
		<div class="seja ta-c d-ib">
			<h4 class="title tt-u">Seja um patrocinador</h4>
			<a href="#" class="link tt-u d-b">Mais detalhes com:</a>
            <p>11 99491-9272 (Sergio/Elvis) <br /> 11 96454-2580 (Deivid Marques)</p>
		</div>
		<form id="form"  class="contato d-ib va-t" action="javascript:void(0);" method="post">
			<h4 class="title tt-u ta-c">Entre em contato</h4>
            
            <a href="mailto:frontinsampa@gmail.com" class="lnk-contact">frontinsampa@gmail.com</a>
           
		</form>
		<div class="redes">
			<div class="follow d-ib">
				<strong>Acompanhe o FRONTINSAMPA</strong> através das redes sociais<a href="https://twitter.com/frontinsp" target="_blank" class="tw _s va-m">Twitter</a> <a href="https://www.facebook.com/frontinsampa" target="_blank" class="fb _s va-m">Facebook</a>
			</div>
			<div class="share">
				<!-- AddThis Button BEGIN -->
				<span class="d-ib">
					<a class="addthis_button_tweet"></a>
					<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>  
					<a class="addthis_button_facebook_like"></a>
				</span>
				<!-- AddThis Button END -->
			</div>
		</div>
		<div class="sign">
			<div class="copyright">&copy; 2013 - FRONTINSAMPA. Todos os direitos reservados.</div>
			<p class="lado-design">Design Diogo Rodrigues / Lado Design</p>
		</div>
	</div>
</footer>
<? if($ieold): ?>
	<script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.10.0.min.js"><\/script>')</script>
<? else: ?>
	<!-- <script src="http://code.jquery.com/jquery-2.0.0.min.js"></script> -->
	<script>window.jQuery || document.write('<script src="js/jquery-2.0.0.min.js"><\/script>')</script>
<? endif; ?>
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> -->
<script>window.jQuery || document.write('<script src="js/jquery.easing.1.3.min.js"><\/script>')</script>
<script src="js/jquery.heroCarousel-1.3.min.js"></script>


<script>
$.fn.navmovin=function(){
	var t=$(this);
	$(t).addClass('navmovin').prepend('<i>');
	$('li',t).hover(function(){
		var t=$(this);
		w=$(t).width();
		l=$(t).position().left;
		$(t).siblings('i').stop().animate({left:l,width:w,opacity: 1},200);
	},function(){
		$(this).siblings('i').stop().animate({opacity: 0},400);
	}).click(function(e){
		e.preventDefault();
		var tag=e.target;
		id=$(tag).attr('href');
		$('li',t).removeClass('active');
		$(tag).parent().addClass('active');
		$('html, body').stop().animate({
			scrollTop: $(id).offset().top - 140 
		}, 1000);
	});
}
$('#home .nav ul, #up-fixed .nav ul').navmovin();
$('#programacao .ver-mais').click(function(e) {
	e.preventDefault();
	$(this).next().slideToggle().closest('.list').toggleClass('active');
});
$(window).scroll(function(){
	scrollY>=325 ? $('#up-fixed').slideDown() : $('#up-fixed').slideUp();
});
$('#fotos .slider').heroCarousel();
</script>

<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4e4d4fa27f4e70bd"></script>

</body>
</html>