<?php
/*
*	Universidade Federal do Rio Grande do Sul - Centro de Biotecnologia
*
*	Desenvolvedores: 	Arthur Kalsing
*	Descrição: 			Página das notícias.
*
*/		

?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Incubadora Empresarial IECBiot</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" type="image/gif" href="images/favicon.gif">
		<link rel="shortcut icon" href="images/favicon.gif" />
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/gallery.css">
		
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		
		<!-- Magnific Popup core CSS file -->
		<link rel="stylesheet" href="css/magnific-popup.css"> 

		<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 

		<!-- Magnific Popup core JS file -->
		<script src="js/jquery.magnific-popup.js"></script> 
		
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<?php include("header.php"); ?>
			</header>
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
					<div class="grid_12">
						<div class="news_page">
							<time datetime="2014-01-01">09<span>JUN</span></time>
							<div class="extra_wrapper">
								<h3><a href="#">XV Maratona de Empreendedorismo</a></h3>
								<p>A Secretaria de Desenvolvimento Tecnológico da UFRGS realiza, 
								no período de 07 de agosto a 02 de dezembro de 2014, 
								a XV Maratona de Empreendedorismo da UFRGS.</p>
								<p><a href="#" class="color1" target="_blank">Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.</a> 
								Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, 
								aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar 
								pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. 
								Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. 
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, 
								non scelerisque augue. Aenean justo massa.</p>
								<p>Casamentiss faiz malandris se pirulitá, Nam liber tempor cum soluta nobis eleifend option 
								congue nihil imperdiet doming id quod mazim placerat facer possim assum. 
								Lorem ipsum dolor sit amet, consectetuer Ispecialista im mé intende tudis nuam golada, 
								vinho, uiski, carirí, rum da jamaikis, só num pode ser mijis. 
								Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
								aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation 
								ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<center>			
						<div class="grid_3_5 prefix_1"> 
							<a href="images/page1_img5.jpg" class="with-caption image-link" title="foto 1 noticia">
							<div id="news_photo_container" style="background-image: url(images/page1_img5.jpg);">
								<div class="news_photo_par1">
									<div class="news_photo_par2">
										<div class="news_photo_par3">
											foto 1 noticia
										</div>
									</div>
								</div>
							</div>
							</a>								
						</div>
						<div class="grid_3_5">
							<a href="images/page1_img6.jpg" class="with-caption image-link" title="foto 2 noticia">
							<div id="news_photo_container" style="background-image: url(images/page1_img6.jpg);">
								<div class="news_photo_par1">
									<div class="news_photo_par2">
										<div class="news_photo_par3">
											foto 2 noticia
										</div>
									</div>
								</div>
							</div>
							</a>
						</div>
						<div class="grid_3_5">
							<a href="images/page1_img7.jpg" class="with-caption image-link" title="foto 3 noticia">
							<div id="news_photo_container" style="background-image: url(images/page1_img7.jpg);">
								<div class="news_photo_par1">
									<div class="news_photo_par2">
										<div class="news_photo_par3">
											foto 3 noticia
										</div>
									</div>
								</div>
							</div>
							</a>
						</div>
					</center>
					<div class="clear"></div>
					<div class="grid_12">
						<div class="news_page">
							<time datetime="2014-01-01">29<span>MAI</span></time>
							<div class="extra_wrapper">
								<h3><a href="#">Workshop sobre o CERNE teve participação da IECBiot </a></h3>
								<p>No dia 29 de maio, encerrou-se o Workshop de Nivelamento CERNE – Curso de Implantação CERNE 1,
								em Porto Alegre. Promovido pela Rede Gaúcha de Incubadoras de Empresas e Parques Tecnológicos (Reginp) 
								em parceria com a Anprotec, o curso teve, exclusivamente, participantes que trabalham diretamente 
								nas incubadoras tecnológicas do Estado do Rio Grande do Sul.</p>
							</div>
						</div>
					</div>
					<center>
						<div class="grid_5_5 prefix_1"> 
							<a href="images/page1_img5.jpg" class="with-caption image-link" title="foto 1 noticia">
							<div id="news_photo_container" style="background-image: url(images/page1_img5.jpg);">
								<div class="news_photo_par1">
									<div class="news_photo_par2">
										<div class="news_photo_par3">
											foto 1 noticia
										</div>
									</div>
								</div>
							</div>
							</a>								
						</div>
						<div class="grid_5_5">
							<a href="images/page1_img6.jpg" class="with-caption image-link" title="foto 2 noticia">
							<div id="news_photo_container" style="background-image: url(images/page1_img6.jpg);">
								<div class="news_photo_par1">
									<div class="news_photo_par2">
										<div class="news_photo_par3">
											foto 2 noticia
										</div>
									</div>
								</div>
							</div>
							</a>
						</div>
					</center>
					<div class="clear"> </div>
					<div class="grid_12">	
						<div class="news_page">
							<time datetime="2014-01-01">31<span>FEV</span></time>
							<div class="extra_wrapper">
								<h3><a href="#">Jogo da dupla empreendedora! </a></h3>
								<p>O jogo esta disponível neste 
								<a href="http://www.josedornelas.com.br/jogo-dupla-empreendedora/" class="color1"> link</a>.
								<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. 
								Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. 
								Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. 
								Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. 
								Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
								<p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. 
								Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, 
								aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar 
								pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. 
								Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. 
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, 
								non scelerisque augue. Aenean justo massa.</p>
								<p>Casamentiss faiz malandris se pirulitá, Nam liber tempor cum soluta nobis eleifend option 
								congue nihil imperdiet doming id quod mazim placerat facer possim assum. 
								Lorem ipsum dolor sit amet, consectetuer Ispecialista im mé intende tudis nuam golada, 
								vinho, uiski, carirí, rum da jamaikis, só num pode ser mijis. 
								Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
								aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation 
								ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
					</div>
					<center>
						<div class="grid_11 prefix_1"> 
							<a href="images/page1_img5.jpg" class="with-caption image-link" title="foto 1 noticia">
							<div id="news_photo_container" style="background-image: url(images/page1_img5.jpg);">
								<div class="news_photo_par1">
									<div class="news_photo_par2">
										<div class="news_photo_par3">
											foto 1 noticia
										</div>
									</div>
								</div>
							</div>
							</a>								
						</div>
					</center>
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<?php include("footer.php"); ?>
		</footer>
		<script type="text/javascript">
		  $('.with-caption').magnificPopup({
			  type: 'image',
			  closeOnContentClick: true,
			  closeBtnInside: false,
			  mainClass: 'mfp-with-zoom mfp-img-mobile',
			  image: {
				verticalFit: true,
				titleSrc: function(item) {
				  return item.el.attr('title');
				}
			  }
			});
		</script>
	</body>
</html>