<?php
/*
*	Universidade Federal do Rio Grande do Sul - Centro de Biotecnologia
*
*	Desenvolvedores: 	Arthur Kalsing
*	Descrição: 			Página inicial do IECBiot (fotos banner, resumo das últimas notícias e apresentação)
*
*/		

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Business Incubator IECBiot</title>
		<meta name="description" content="Business Incubator of the UFRGS Biotechnology Center, IECBiot">
		<meta name="keywords" content="iecbiot, business, incubator, startup, research, development, R&D, biotechnology"/>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" type="image/gif" href="../images/favicon.gif">
		<link rel="shortcut icon" href="../images/favicon.gif" />
		<link rel="stylesheet" href="../css/style_common.css" />
		<link rel="stylesheet" href="../css/style4.css" />
		<link rel="stylesheet" href="../css/camera.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/gallery.css">
		
		<script src="../js/jquery.js"></script>
		<script src="../js/jquery-migrate-1.2.1.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/superfish.js"></script>
		<script src="../js/jquery.ui.totop.js"></script>
		<script src="../js/jquery.equalheights.js"></script>
		<script src="../js/jquery.mobilemenu.js"></script>
		<script src="../js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="../js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script>
			$(document).ready(function(){
				jQuery('#camera_wrap').camera({
					loader: false,
					pagination: false ,
					minHeight: '444',
					thumbnails: false,
					height: '27.86458333333333%',
					caption: true,
					navigation: true,
					fx: 'simpleFade'
				});
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
		<script src="../js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="../css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<?php include("header.php"); ?>
			</header>
			<div class="slider_wrapper">
				<div id="camera_wrap" class="">
					<div data-src="../images/slide1.jpg">
						<div class="caption fadeIn">
							Do you have a bright idea?
						</div>
					</div>
					<div data-src="../images/slide2.jpg">
						<div class="caption fadeIn">
							Don´t let it fade away!
						</div>
					</div>
					<div data-src="../images/slide3.jpg">
						<div class="caption fadeIn">
							Biotechnology Business Incubator
						</div>
					</div>
				</div>
			</div>
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
					<div class="grid_7">
						<h3>Welcome to IECBiot</h3>
						<img src="../images/biotinho.jpg" alt="" class="img_inner fleft" width="270" height="139">

						<div class="extra_wrapper">
							<p>The Biotechnology’s Center Business Incubator UFRGS (<b>IECBiot</b>)
							supports the establishment, development and consolidation of companies and technological projects
							in biotechnology and related sectors. </p>
							<p> IECBiot stimulates the creation and strengthening of companies, offering a suitable environment
							and providing them with technical and managerial training.</p>
						</div>
						<div class="clear sep__1"></div>
						<p> "An incubator is an organization that aims to support entrepreneurs so that they can develop innovative 
						ideas and turn them into successful enterprises. To fulfill this task, it offers infrastructure, training 
						and management support, guiding entrepreneurs on administrative, commercial, financial and legal, 
						among other issues essential to the development of a company" - Nacional Association of Organizations Promoting
						Innovative Enterprises (<a class="color1" href="http://www.anprotec.org.br/" target="_blank">Anprotec</a>).</p>
						<p><b>Expertise Areas:</b> genetics and molecular biology of microorganisms; biological control;
						molecular diagnosis of human diseases in animals and plants; animal health and reproduction;
						plant biotechnology; biochemistry and pharmacology of peptides and toxic proteins; production of enzymes;
						bio-monitoring of environmental pollution; toxicological genetics; </p>
						
						<iframe class="center" width="670" height="377" src="https://www.youtube.com/embed/X6TI64F_K3U?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="grid_4 prefix_1">
						<h3>Last News</h3>
						<!-- USAR A CHAMADA ABAIXO PARA OS EDITAIS -->
						<!--
						<div class="news">
							<p class="color1 destaque" ><a href="news.php#2015-09-02">Open Public Call:</a> 
							<a href="http://sgi.macropus.com.br/iecbiot/edital/" class="color1 destaque" target="_blank">Apply Now!</a>
							</p>
						</div>
						-->
						<div class="news">
							<time datetime="2015-18-05">18<span>MAY</span></time>
							<div class="extra_wrapper">
								<p class="color1"><a href="news.php#2015-18-05">New Institutional Video online!</a></p>
								Our first institutional video is online! Please check it out in the left (you may activate english subs)!
							</div>
						</div>
						<div class="news">
							<time datetime="2015-09-04">09<span>APR</span></time>
							<div class="extra_wrapper">
								<p class="color1"><a href="news.php#2015-09-04">CANVAS Workshop</a></p>
								This week the first stage of the Entrepreneur Mill was performed, the CANVAS Workshop.
								Participants planned the Canvas model for their own business ideas.
							</div>
						</div>
						<div class="news">
							<time datetime="2015-13-03">13<span>MAR</span></time>
							<div class="extra_wrapper">
								<p class="color1"><a href="news.php#2015-13-03">Entrepreneur Mill of IECBiot </a></p>
								IECBiot launched the "Entrepreneur Mill", an action within its entrepreneurship
								program which will make the participants to get in touch with the business world.
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_12">
						<div class="hor_separator"></div>
						<h3 class="head1 center">Come meet us!</h3>
					</div>
					<div class="clear"></div>
					<div class="clear"></div>
					<div class="grid_12">
						<center>
						<div class="grid_4 index_highlights"> 
							<div id="index_photo_container" style="background-image: url(../images/inicial_1.jpg);">
								<div class="index_photo_par1">
									<div class="index_photo_par2">
										<div class="index_photo_par3">
											Experts in Biotechnology
										</div>
									</div>
								</div>
							</div> 
						</div>
						<div class="grid_4 index_highlights">
							<div id="index_photo_container" style="background-image: url(../images/inicial_2.jpg);">
								<div class="index_photo_par1">
									<div class="index_photo_par2">
										<div class="index_photo_par3">
											The path to success!
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="grid_4 index_highlights">
							<div id="index_photo_container" style="background-image: url(../images/inicial_3.jpg);">
								<div class="index_photo_par1">
									<div class="index_photo_par2">
										<div class="index_photo_par3">
											Come meet us!
										</div>
									</div>
								</div>
							</div>
						</div>
						</center>
					</div>
					<div class="clear"></div>
					<div class="grid_12">
						<div class="hor_separator"></div>
						<h3 class="head1 center">Our Partners</h3>
					</div>
					<div class="grid_3">
						<div class="box">
							<div class="box_title">ANPROTEC</div>
							<div class="box_bot">
								<div class="maxheight">
									<a href="http://www.anprotec.org.br/" target="_blank"><img class="parceiros" src="../images/logo_anprotec.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="box">
							<div class="box_title">SEBRAE</div>
							<div class="box_bot">
								<div class="maxheight">
									<a href="http://www.sebrae.com.br/" target="_blank"><img class="parceiros" src="../images/logo_sebrae.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="box">
							<div class="box_title">FINEP</div>
							<div class="box_bot">
								<div class="maxheight">
									<a href="http://www.finep.gov.br/" target="_blank"><img class="parceiros" src="../images/logo_finep.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="box">
							<div class="box_title">CNPq</div>
							<div class="box_bot">
								<div class="maxheight">
									<a href="http://www.cnpq.br/" target="_blank"><img class="parceiros" src="../images/logo_cnpq.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<?php include("footer.php"); ?>
		</footer>
	</body>
</html>