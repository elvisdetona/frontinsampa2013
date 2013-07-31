<? if(preg_match('/msie 8|msie 7/i',$_SERVER['HTTP_USER_AGENT'])) : $ieold=true; endif;?>

<!DOCTYPE html>
<!--[if lt IE 7]>	<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>		<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>		<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>FrontInSampa 2013 | 14 de Setembro de 2013</title>
<meta name="description" content="FrontInSampa 2013 - Evento focado em Desenvolvimento Front-end em São Paulo, dia 14 de setembro de 2013." />
<meta name="keywords" content="Frontend, Front-end, Frontend em São Paulo, eventos de frontend em São Paulo, FrontInSampa, FrontInSampa 2013" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta property="og:title" content="FrontInSampa 2013" />
<meta property="og:type" content="website"/>
<meta property="og:description" content="FrontInSampa 2013 - Evento focado em Desenvolvimento Front-end em São Paulo, dia 14 de setembro de 2013." />
<meta property="og:url" content="http://www.frontinsampa.com.br/"/>
<meta property="og:description" content="FrontInSampa 2013 - Evento focado em Desenvolvimento Front-end em São Paulo, dia 14 de setembro de 2013."/>
<meta property="og:image" content="http://www.frontinsampa.com.br/img/frontinsampa.jpg" />
<meta property="og:site_name" content="FrontInSampa"/>
<meta property="og:locale" content="pt_br" />
<link rel="apple-touch-icon" href="img/touch-icon-iphone.png" />
<link rel="apple-touch-icon" sizes="72x72" href="img/touch-icon-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="img/touch-icon-iphone-retina.png" />
<link rel="apple-touch-icon" sizes="144x144" href="img/touch-icon-ipad-retina.png" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">

<? if($ieold): ?>
	<script src="js/modernizr.min.js"></script>
<? endif; ?>
</head>

<body>
<div id="fb-root"></div>
<? if($ieold): ?>
	<p id="oldie">Pior do que você ouvir música do Latino, é você utilziar Internet Explorer <? preg_match('/msie 8/i',$_SERVER['HTTP_USER_AGENT']) ? print('8') : print('7');?>! Para sua alma ser salva, <a href="http://www.google.com/intl/pt-BR/chrome/browser/">baixe aqui algo descente para sua vida :D</a> #trollDev.</p>
<? endif; ?>
<header id="up" class="large" role="banner">
	<div class="share wrap ta-r">
		<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>
		<div class="g-plusone" data-size="medium"></div>
		<div class="fb-like" data-href="http://developers.facebook.com/docs/reference/plugins/like" data-send="false" data-layout="button_count" data-width="80" data-show-faces="false"></div>
	</div>
	<h1 class="logo _s va-m">FrontInSampa</h1>
	<nav class="nav ta-c" role="navigation">
		<ul>
			<li class="eq1 link tt-u"><a href="#">Home</a></li>
			<li class="eq2 link tt-u"><a href="#">Sobre o Evento</a></li>
			<li class="eq3 link tt-u"><a href="#">Palestrantes</a></li>
			<li class="eq4 link tt-u"><a href="#">Programação</a></li>
			<li class="eq5 link tt-u"><a href="#">Local</a></li>
			<li class="eq6 link tt-u"><a href="#">Blog</a></li>
			<li class="eq7 link tt-u"><a href="#">Contato</a></li>
		</ul>
	</nav>
	<h1 class="title ta-c tt-u">Erro 404</h1>
	<h2 class="subtitle ta-c">página não encontrada</h2>
	<div class="box-button ta-c">
		<a class="bt-signup d-ib">Voltar <i class="_s"></i></a>
	</div>
</header>


<div id="patrocina">
	<h3 class="title-middle ta-c tt-u">Patrocinadores</h3>
	<ul class="wrap">
		<li class="d-ib"><img src="img/temp/lg1.jpg" height="89" width="340" alt=""></li>
		<li class="d-ib"><img src="img/temp/lg2.jpg" height="89" width="180" alt=""></li>
		<li class="d-ib"><img src="img/temp/lg3.jpg" height="89" width="180" alt=""></li>
		<li class="d-ib"><img src="img/temp/lg4.jpg" height="89" width="180" alt=""></li>
		<li class="d-ib"><img src="img/temp/lg2.jpg" height="89" width="180" alt=""></li>
		<li class="d-ib"><img src="img/temp/lg1.jpg" height="89" width="340" alt=""></li>
		<li class="d-ib"><img src="img/temp/lg2.jpg" height="89" width="180" alt=""></li>
		<li class="d-ib"><img src="img/temp/lg3.jpg" height="89" width="180" alt=""></li>
		<li class="d-ib"><img src="img/temp/lg4.jpg" height="89" width="180" alt=""></li>
		<li class="d-ib"><img src="img/temp/lg2.jpg" height="89" width="180" alt=""></li>
	</ul>
</div>
<footer id="down" role="contentinfo">
	<div class="wrap">
		<div class="seja ta-c d-ib">
			<h4 class="title tt-u">Seja um patrocinador</h4>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry’s standard dummy.</p>
			<a href="#" class="link tt-u d-b">Saiba mais, entre em contato</a>
		</div>
		<form class="contato d-ib va-t" action="" method="post">
			<h4 class="title tt-u ta-c">Entre em contato</h4>
			<div class="inputs">
				<input type="text" name="" id="" class="box" placeholder="Nome" />
				<input type="text" name="" id="" class="box" placeholder="E-mail" />			
			</div>
			<textarea name="" id="" class="box textarea" placeholder="Mensagem"></textarea>
			<div class="ta-c">
				<input type="submit" class="send tt-u" value="Enviar">
			</div>
		</form>
		<div class="redes">
			<div class="follow d-ib">
				<strong>Acompanhe o Front In Sampa</strong> através das redes sociais: <a href="" class="tw _s va-m">Twitter</a> <a href="" class="fb _s va-m">Facebook</a>
			</div>
			<div class="share">
				<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>
				<div class="g-plusone" data-size="medium"></div>
				<div class="fb-like" data-href="http://developers.facebook.com/docs/reference/plugins/like" data-send="false" data-layout="button_count" data-width="80" data-show-faces="false"></div>
			</div>
		</div>
		<div class="sign">
			<div class="copyright">&copy; 2013 - Front in Sampa. Todos os direitos reservados.</div>
			<p class="lado-design">Design Diogo Rodrigues / Lado Design</p>
		</div>
	</div>
</footer>
<? if($ieold): ?>
	<script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.10.0.min.js"><\/script>')</script>
<? else: ?>
	<script src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.0.0.min.js"><\/script>')</script>
<? endif; ?>

<script>
$.fn.navmovin=function(){
	$(this).addClass('navmovin').prepend('<i>');
	$(this).children().hover(function(){
		w=$(this).width();
		l=$(this).position().left;
		$(this).siblings('i').stop().animate({left:l,width:w},200);
	});
}
$('#up .nav ul').navmovin();
</script>
<script>
window.___gcfg = {lang: 'pt-BR'};(function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://apis.google.com/js/plusone.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();
(function(d,s,id){var js,fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=173543772672417";fjs.parentNode.insertBefore(js,fjs);}(document,'script','facebook-jssdk'));
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>