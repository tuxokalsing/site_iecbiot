<?php
/*
*	Universidade Federal do Rio Grande do Sul - Centro de Biotecnologia
*
*	Desenvolvedores: 	Arthur Kalsing
*	Descrição: 			Página com informações sobre a incubadora.
*
*/		

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Business Incubator IECBiot</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" type="image/gif" href="../images/favicon.gif">
		<link rel="shortcut icon" href="../images/favicon.gif" />
		<link rel="stylesheet" href="../css/style.css">
		<script src="../js/jquery.js"></script>
		<script src="../js/jquery-migrate-1.2.1.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/superfish.js"></script>
		<script src="../js/jquery.ui.totop.js"></script>
		<script src="../js/jquery.equalheights.js"></script>
		<script src="../js/jquery.mobilemenu.js"></script>
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
			<script src="../js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="../css/ie.css">
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
						<div class="grid_12">
							<h3 class="">Administration Staff</h3>
						</div>
						<div class="grid_5">
							<div class="grid_foto alpha"><img src="../images/equipe/marilene.jpg" alt=""></div>
							<div class="grid_info omega">
								<h1><a href="http://lattes.cnpq.br/1152828531273019" target="_blank">Dra. Marilene Henning Vainstein</a></h1>
								Academic Coordinator <br>
								<a href="mailto:mhv@cbiot.ufrgs.br" class="mail_link"><span class="fa fa-envelope"></span> mhv@cbiot.ufrgs.br</a>
							</div>
						</div>
						<div class="grid_5 prefix_1">
							<div class="grid_foto alpha"><img src="../images/equipe/vivian.jpg" alt=""></div>
							<div class="grid_info omega">
								<h1><a href="http://lattes.cnpq.br/7630608167375647" target="_blank">Vivian Mutti</a></h1>
								Incubator Manager <br>
								<a href="mailto:vivian.mutti@ufrgs.br" class="mail_link"><span class="fa fa-envelope"></span> vivian.mutti@ufrgs.br</a>
							</div>
						</div>
						<div class="clear"></div>
						<br>
						<div class="grid_5">
							<div class="grid_foto alpha"><img src="../images/equipe/grasiela.jpg" alt=""></div>
							<div class="grid_info omega">
								<h1>Grasiela Barbosa</h1>
								Biotechnology Center Secretary <br>
								<a href="mailto:gbramos@cbiot.ufrgs.br" class="mail_link"><span class="fa fa-envelope"></span> gbramos@cbiot.ufrgs.br</a>
							</div>
						</div>
						<div class="grid_5 prefix_1">
							<div class="grid_foto alpha"><img src="../images/equipe/natalia.jpg" alt=""></div>
							<div class="grid_info omega">
								<h1>Natália Gabron</h1>
								Administration Support <br>
								<a href="mailto:nataliagabron@cbiot.ufrgs.br" class="mail_link"><span class="fa fa-envelope"></span> nataliagabron@cbiot.ufrgs.br</a>
							</div>
						</div>
						<div class="clear"></div>
						<br>
						<div class="grid_5">
							<div class="grid_foto alpha"><img src="../images/equipe/arthurk.jpg" alt=""></div>
							<div class="grid_info omega">
								<h1>Arthur Kalsing</h1>
								IT Manager <br>
								<a href="mailto:akalsing@cbiot.ufrgs.br" class="mail_link"><span class="fa fa-envelope"></span> akalsing@cbiot.ufrgs.br</a>
							</div>
						</div>
						<div class="clear"></div>
						<div class="grid_12">
							<h3 class="">Supervisor Team</h3>
						</div>
						<div class="grid_5">
							<div class="grid_foto alpha"><img src="../images/equipe/arnaldo.jpg" alt=""></div>
							<div class="grid_info omega">
								<h1><a href="http://lattes.cnpq.br/5464243969092412" target="_blank">Dr. Arnaldo Zaha</a></h1>
								CBiot Director - UFRGS<br>
								Area: Molecular Biology<br>
								<a href="mailto:zaha@cbiot.ufrgs.br" class="mail_link"><span class="fa fa-envelope"></span> zaha@cbiot.ufrgs.br</a>
							</div>
						</div>
						<div class="grid_5 prefix_1">
							<div class="grid_foto alpha"><img src="../images/equipe/arthurf.jpg" alt=""></div>
							<div class="grid_info omega">
								<h1><a href="http://lattes.cnpq.br/6760789832926234" target="_blank">Dr. Arthur Germano Fett Neto</a></h1>
								Full Professor of CBiot - UFRGS<br>
								Area: Plant Physiology
								<br>
								<a href="mailto:fettneto@cbiot.ufrgs.br" class="mail_link"><span class="fa fa-envelope"></span> fettneto@cbiot.ufrgs.br</a>
							</div>
						</div>
						<div class="clear"></div>
						<br>
						<div class="grid_5">
							<div class="grid_foto alpha"><img src="../images/equipe/charley.jpg" alt=""></div>
							<div class="grid_info omega">
								<h1><a href="http://lattes.cnpq.br/6238654594421708" target="_blank">Dr. Charley Christian Staats</a></h1>
								Adjunct Professor of CBiot - UFRGS<br>
								Area: Molecular Biology
								<br>
								<a href="mailto:staats@cbiot.ufrgs.br" class="mail_link"><span class="fa fa-envelope"></span> staats@cbiot.ufrgs.br</a>
							</div>
						</div>
						<div class="grid_5 prefix_1">
							<div class="grid_foto alpha"><img src="../images/equipe/rafael.jpg" alt=""></div>
							<div class="grid_info omega">
								<h1><a href="http://lattes.cnpq.br/6516219295405539" target="_blank">Dr. Rafael Roesler</a></h1>
								Associate Prof. of Pharmacology Department, ICBS - UFRGS
								Coordinator of PPGCB: Pharmacology and Therapeutic - UFRGS
								Coordinator of Cancer Researches Lab. - HCPA
								<br>
								<a href="mailto:rafael.roesler@pq.cnpq.br" class="mail_link"><span class="fa fa-envelope"></span> rafael.roesler@pq.cnpq.br</a>
							</div>
						</div>
						<div class="clear"></div>
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