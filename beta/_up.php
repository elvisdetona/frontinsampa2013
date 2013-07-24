<? if(preg_match('/msie 8|msie 7/i',$_SERVER['HTTP_USER_AGENT'])) : $ieold=true; endif;?>

<!DOCTYPE html>
<!--[if lt IE 7]>	<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>		<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>		<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-BR"> <!--<![endif]-->
<head>
<title>FrontInSampa 2013 | 14 de Setembro de 2013</title>
<meta charset="utf-8">
<meta name="description" content="FrontInSampa 2013 - Evento focado em Desenvolvimento Front-end em São Paulo, dia 14 de setembro de 2013." />
<meta name="keywords" content="Frontend, Front-end, Frontend em São Paulo, eventos de frontend em São Paulo, FrontInSampa, FrontInSampa 2013" />
<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
<meta property="og:type" content="website"/>
<meta property="og:locale" content="pt-br" />
<meta property="og:title" content="FrontInSampa 2013" />
<meta property="og:site_name" content="FrontInSampa"/>
<meta property="og:description" content="FrontInSampa 2013 - Evento focado em Desenvolvimento Front-end em São Paulo, dia 14 de setembro de 2013."/>
<meta property="og:url" content="http://www.frontinsampa.com.br/"/>
<meta property="og:image" content="http://www.frontinsampa.com.br/img/frontinsampa.jpg" />
<link rel="apple-touch-icon" href="img/touch-icon-iphone.png" />
<link rel="apple-touch-icon" sizes="72x72" href="img/touch-icon-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="img/touch-icon-iphone-retina.png" />
<link rel="apple-touch-icon" sizes="144x144" href="img/touch-icon-ipad-retina.png" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/jquery.heroCarousel.css">
<link rel="stylesheet" href="css/style.css">



<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-32925160-1']);
	  _gaq.push(['_trackPageview']);
	  _gaq.push(['_trackPageLoadTime']);
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<script type="text/javascript">
		function recordOutboundLink(link, category, action) {
		try {
		var pageTracker=_gat._getTracker("UA-32925160-1");
		pageTracker._trackEvent(category, action);
		setTimeout('document.location = "' + link.href + '"', 100)
		}catch(err){}
		}
	</script>

<? if($ieold): ?>
	<script src="js/modernizr.min.js"></script>
<? endif; ?>
</head>

<body>
<div id="fb-root"></div>

<? if($ieold): ?>
 <p id="oldie">Pior do que você ouvir música do Latino, é você utilziar Internet Explorer <? preg_match('/msie 8/i',$_SERVER['HTTP_USER_AGENT']) ? print('8') : print('7');?>! Para sua alma ser salva, <a href="http://www.google.com/intl/pt-BR/chrome/browser/" target="_blank">baixe aqui algo descente para sua vida :D</a> #trollDev.</p>
<? endif; ?>

<header id="up-fixed" class="d-n" role="banner">
	
    <a href="http://www.eventick.com.br/frontinsampa2013" onclick="recordOutboundLink(this, 'Inscricoes', 'MenuFix'); return false;" class="bt-signup d-ib">INSCREVA-SE <i class="_s"></i></a>
	<nav class="nav ta-c" role="navigation">
		<ul>
			<li class="eq1 link tt-u"><a href="#home">Home</a></li>
			<li class="eq2 link tt-u"><a href="#sobre-o-evento">Sobre o Evento</a></li>
			<li class="eq3 link tt-u"><a href="#palestrantes">Palestrantes</a></li>
			<li class="eq4 link tt-u"><a href="#programacao">Programação</a></li>
			<li class="eq5 link tt-u"><a href="#localizacao">Local</a></li>
			<li class="eq7 link tt-u"><a href="#contato">Contato</a></li>
		</ul>
	</nav>
</header>