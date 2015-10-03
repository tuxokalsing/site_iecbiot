<?php
/*
*	Universidade Federal do Rio Grande do Sul - Centro de Biotecnologia
*
*	Desenvolvedores: 	Arthur Kalsing
*	Descrição: 			Página com informações sobre a incubadora.
*						Galeria
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
		<link rel="stylesheet" href="../css/camera.css">
		<link rel="stylesheet" href="../css/style_common.css" />
		<link rel="stylesheet" href="../css/style4.css" />
		
		<link rel="stylesheet" href="../css/gallery.css" />
		
		<script src="../js/jquery.js"></script>
		<script src="../js/jquery-migrate-1.2.1.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/superfish.js"></script>
		<script src="../js/jquery.ui.totop.js"></script>
		<script src="../js/jquery.equalheights.js"></script>
		<script src="../js/jquery.mobilemenu.js"></script>
		
		<!-- Magnific Popup core CSS file -->
		<link rel="stylesheet" href="../css/magnific-popup.css"> 

		<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 

		<!-- Magnific Popup core JS file -->
		<script src="../js/jquery.magnific-popup.js"></script> 
		
		<script src="../js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="../js/jquery.mobile.customized.min.js"></script>
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
					<div class="grid_6">
						<h3>The Incubator</h3>
						<p> The Biotechnology Center's Business Incubator supports companies in the areas of health,
						agribusiness and environmental. It also promotes teaching and training of highly qualified
						human resources in their expertise area.</p>
						
						<p> Innovation in IECBiot is: </p>
						<p class="areas center destaque">“The consolidation of bright ideas in biotechnology”</p>
						<p>Aimed at fulfilling its mission to "To bolster and support the development of enterprises 
						in the area of biotechnology in Rio Grande do Sul", our incubator offers a suitable environment 
						for development.</p>
						
						<p class="areas destaque">Official Documentation (Portuguese):</p>
						<u>
							<li><a href="../documentos/Regulamento_Interno_IECBiot.pdf">Regulamento Interno</a></li>
							<li><a href="../documentos/Modelo_de_Contrato_de_Incubacao.doc">Modelo de Contrato de Incubação</a></li>
							<li><a href="../documentos/Plano_de_Negocios.pdf">Plano de Negócios</a></li>
							<li><a href="../documentos/Tabela_-_valores_de_servicos.pdf">Tabela de valores e serviços</a></li>
						</u>
						<br>
						
						<center><img src="../images/incfrente.png" /></center>
						
					</div>
					<div class="grid_5 prefix_1">
						<h3>Areas of Operation</h3>
						<div class="icon_grid"><span class="i-farm icon"></span></div>
						<div class="desc_grid"><p class="areas">Agribusiness</p></div>
						<div class="clear"></div>
						<div class="icon_grid"><span class="i-biotech icon"></span></div>
						<div class="desc_grid"><p class="areas">Bioinformatics</p></div>
						<div class="clear"></div>
						<div class="icon_grid"><span class="i-bioenergy icon"></span></div>
						<div class="desc_grid"><p class="areas">Energy</p></div>
						<div class="clear"></div>
						<div class="icon_grid"><span class="i-foodindustry icon"></span></div>
						<div class="desc_grid"><p class="areas">Food Industry</p></div>
						<div class="clear"></div>
						<div class="icon_grid"><span class="i-chemistry icon"></span></div>
						<div class="desc_grid"><p class="areas">Chemical Industry</p></div>
						<div class="clear"></div>
						<div class="icon_grid"><span class="i-environment icon"></span></div>
						<div class="desc_grid"><p class="areas">Environment</p></div>
						<div class="clear"></div>
						<div class="icon_grid"><span class="i-veterinary icon"></span></div>
						<div class="desc_grid"><p class="areas">Animal Health</p></div>
						<div class="clear"></div>
						<div class="icon_grid"><span class="i-health icon"></span></div>
						<div class="desc_grid"><p class="areas">Human Health</p></div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
					<div class="hor_separator hor__1"></div>
					<div class="grid_6">
						<h3>Services</h3>
						<br>
						<p>
						<span class="i-check"></span> Support to prepare the Business Plan Support;<br>
						<span class="i-check"></span> Guidance for securing financing;<br>
						<span class="i-check"></span> Support in the management of R&D projects;<br>
						<span class="i-check"></span> Consultancy in business management;<br>
						<span class="i-check"></span> Consultancy in the search for new technologies;<br>
						<span class="i-check"></span> Encouragement in interaction with external sources of training and expertise;<br>
						<span class="i-check"></span> Administrative support services: secretary, reception, wi-fi, cleaning service;<br>
						<span class="i-check"></span> Access to the Biotechnologies Services Laboratory (<b>Labtech</b>):<br>
						<span class="i-lab"></span> <b>Lafer</b>: Fermentation Laboratory with two industrial-scale production units. <br>
						<span class="i-lab"></span> <b>BioCel</b>: Cellular Biology biotechnological service laboratory. <br>
						<span class="i-lab"></span> <b>BioMol</b>: Molecular Biology biotechnological service laboratory.

						</p>
					</div>
					<div class="grid_6">
						<h3>Infrastructure</h3>
						<p>The IECBiot facilities occupy on 500m², intended to house research stages,
						development and innovation for up to 8 incubated business simultaneously, offering
						modules from 25m² up to 100m², as required. Our Incubator also offers meeting rooms
						for up to 20 people, an auditorium with the capacity of 100 people, leisure area,
						restrooms and loading/unloading bay.</p>
						<img src="../images/infra.jpg"> 
					</div>
					<div class="clear"></div>
					<div class="hor_separator hor__1"></div>
					<div class="grid_12">
						<h3>How to participate</h3>
						Entrepreneurs may present their business plans in response to the public call. 
						The business plans are assessed considering the aspects: technical, economic, 
						marketing, management and entrepreneurial profile. If approved, the business 
						can be housed at the incubator in pre-incubation stage. 

						<br><br>
											
						<div class="graphic" style=" width: 130px;"><img src="../images/grafico/1.png"></div>
						<div class="graphic" style=" width: 45px;"><img src="../images/grafico/2.png"></div>
						<div class="graphic" style=" width: 250px;"><img src="../images/grafico/3.png"></div>
						<div class="graphic" style=" width: 50px;"><img src="../images/grafico/4.png"></div>
						<div class="graphic" style=" width: 205px;"><img src="../images/grafico/5.png"></div>
						<div class="graphic" style=" width: 190px;"><img src="../images/grafico/6.png"></div>
						<div class="graphic" style=" width: 40px;"><img src="../images/grafico/7.png"></div>
						<div class="graphic" style=" width: 260px;"><img src="../images/grafico/8.png"></div>
						<div class="graphic-subs" style=" width: 120px;"><p class="subs">Idea</p></div>
						<div class="graphic-subs" style=" width: 50px;"></div>
						<div class="graphic-subs" style=" width: 255px;"><p class="subs">Public Call</p></div>
						<div class="graphic-subs" style=" width: 40px;"></div>
						<div class="graphic-subs" style=" width: 140px;"><p class="subs">Pre-Incubation</p></div>
						<div class="graphic-subs" style=" width: 92px;"></div>
						<div class="graphic-subs" style=" width: 165px;"><p class="subs">Incubation</p></div>
						<div class="graphic-subs" style=" width: 40px;"></div>
						<div class="graphic-subs" style=" width: 265px;"><p class="subs">Graduation</p></div>
					</div>
					<div class="clear"></div>
					<div class="hor_separator hor__1"></div>
					<div class="grid_6">
						<h3>Idea</h3>
						<img src="../images/ideia.png" class="img_inner fleft" style="margin-top: 30px;">
						<h1>Don't let your idea fade away!</h1>
						<br>
						<p>New projects start with the design of innovative ideas and your innovative ideas 
						can be included in the IE-CBiot Ideas Bank. The ideas proposed are analyzed by IECBiot 
						team that will contact the entrepreneur to develop. If the idea does not present 
						immediate viability it remains integrating the portfolio of IEBiot Ideas Bank and 
						may be subject to future interest, or draw attention from potential partners. If you have
						an innovative idea you are invited to participate in our <a href="ideas_bank.php" class="color1">Ideas Bank</a>!</p>
					</div>
					<div class="grid_6">
						<h3>Public Call</h3>
						<img src="../images/edital.png" class="img_inner fleft" style="margin-top: 30px;">
						<h1>You have 2 opportunities a year</h1>
						<br>
						<p>IECBiot opens public calls twice a year and applicants can show the potential 
						of their projects through the business plan.</p>
						<p>Proponents must apply to the public call through on-line registration on the incubator online system
						and send their business plans according to the system guidelines. After proper evaluation, 
						the selected proponents are invited to take interviews within the incubator. The
						new business plans join the incubator in pre-incubation stage. You can check the dates of upcoming public calls
						on the incubator's <a href="http://sgi.macropus.com.br/iecbiot/edital" target="_blank" class="color1">public calls page</a>.</p>
					</div>
					<div class="clear"></div>
					<div class="hor_separator hor__1"></div>
					<div class="grid_6">
						<h3>Pre-Incubation</h3>
						<img src="../images/preinc.png" class="img_inner fleft" style="margin-top: 30px;"> 
						<h1>From 3 to 6 months of operation</h1>
						<br>
						<p>The approved business plan enters IECBiot in pre-incubation stage. The pre-incubation stage
						is intended to enhance the business plan of the entrepreneur, developing a detailed planning
						of the company with support from the incubator and also to constitute the company.  After six-month 
						of pre-incubation the business plan is again evaluated for its viability, updating
						his status to incubation stage.</p>
					</div>
					<div class="grid_6">
						<h3>Incubation</h3>
						<img src="../images/incubacao.png" class="img_inner fleft" style="margin-top: 30px;">
						<h1>From 3 to 6 years</h1>
						<br>
						<p>During this stage the company applies the planning in the dimensions of entrepreneur,
						technology, marketing, management, and capital. Receives training, consultancy, qualifications 
						and is monitored periodically to accompany it’s evolution.</p>
					</div>
					<div class="clear"></div>
					<div class="hor_separator hor__1"></div>
					<div class="grid_6">
						<h3>Graduation</h3>
						<img src="../images/gradua.png" class="img_inner fleft" style="margin-top: 30px;">
						<h1>Ready for market!</h1>
						<br>
						<p>Upon graduation the company leaves the incubator settling in its own infrastructure.
						However, the contact with the incubator does not end yet, IECBiot keeps supporting 
						graduated companies.</p>
					</div>
					<div class="grid_6">
						<h3>Come join us!</h3>
						<img src="../images/participe.png" class="img_inner fleft" style="margin-top: 30px;">
						<h1>Do you have bright ideas?</h1>
						<br>
						<p>Do you have an entrepreneurial profile? Do you have innovative ideas that you would
						like to share and put into practice? Come meet us! We are willing and open for a personal
						conversation, email exchange or phone call. Don't forget to
						participate in our <a href="ideas_bank.php" class="color1">Ideas Bank</a>!</p>
					</div>
					<div class="clear"></div>
					<div class="hor_separator hor__1"></div>
					<div class="grid_12">
						<h3>Toward CERNE-1 certification</h3>
						Since the first half of 2014 our incubator has been working to become certified
						within CERNE (Anprotec) standards, ensuring higher quality and degree of success 
						in incubation projects. More information about CERNE model can be fond in model's
						<a href="http://anprotec.org.br/cerne/" class="color1">official website</a>. <br><br>
						
						<img src="../images/infocerneeng.png">
					</div>
					<div class="clear"></div>
					<div class="hor_separator hor__1"></div>			
					<div class="grid_12">
						<h3>Gallery</h3>
					</div>
					<div class="clear"></div>
					<!-- Primeira linha de fotos -->
					<div class="grid_3">
						<a href="../images/gallery/entrada_campus.jpg" class="with-caption image-link" alt="" title="The entrance to UFRGS campus at Porto Alegre - Brazil">
							<div id="photo_container" style="background-image: url(../images/gallery/entrada_campus_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											UFRGS campus
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="../images/gallery/entrada_cbiot.jpg" class="with-caption image-link" title="Biotechnology Center, the incubators site">
							<div id="photo_container" style="background-image: url(../images/gallery/entrada_cbiot_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Biotechnology Center
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="../images/gallery/monolito_centro.jpg" class="with-caption image-link" title="Biotechnology Center">	
							<div id="photo_container" style="background-image: url(../images/gallery/monolito_centro_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Biotechnology Center
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="../images/gallery/recepcao.jpg" class="with-caption image-link" title="Reception services">	
							<div id="photo_container" style="background-image: url(../images/gallery/recepcao_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Reception services
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="clear gallery_division"></div>
					<!-- Segunda linha de fotos -->
					<div class="grid_3">
						<a href="../images/gallery/corredores_incuabadora.jpg" class="with-caption image-link" title="IECBiot aisles">
							<div id="photo_container" style="background-image: url(../images/gallery/corredores_incuabadora_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											IECBiot aisles
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="../images/gallery/labo.jpg" class="with-caption image-link" title="Equipped Laboratories">
							<div id="photo_container" style="background-image: url(../images/gallery/labo_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Equipped Laboratories
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="../images/gallery/sala_reunioes.jpg" class="with-caption image-link" title="Meeting room for up to 20 people">	
							<div id="photo_container" style="background-image: url(../images/gallery/sala_reunioes_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Meeting rooms
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="../images/gallery/sala_incubada.jpg" class="with-caption image-link" title="Ziel Biosciences Laboratory">	
							<div id="photo_container" style="background-image: url(../images/gallery/sala_incubada_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Ziel Biosciences Lab.
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="clear gallery_division"></div>
					<!-- Terceira linha de fotos -->
					<div class="grid_3">
						<a href="../images/gallery/seminario_nanotec.jpg" class="with-caption image-link" title="Nanotechnology Seminar">
							<div id="photo_container" style="background-image: url(../images/gallery/seminario_nanotec_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Nanotechnology Seminar
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="../images/gallery/alunos_ppgbc.jpg" class="with-caption image-link" title="Masters and PhD students at the weekly seminar">
							<div id="photo_container" style="background-image: url(../images/gallery/alunos_ppgbc_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Masters and PhD students 
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="../images/gallery/visita_farmacia.jpg" class="with-caption image-link" title="Pharmacy students visiting the incubator">	
							<div id="photo_container" style="background-image: url(../images/gallery/visita_farmacia_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Pharmacy students visit
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="../images/gallery/visita_equipe_parque.jpg" class="with-caption image-link" title="Tech Park staff visiting the incubator">	
							<div id="photo_container" style="background-image: url(../images/gallery/visita_equipe_parque_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Tech Park staff
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="clear gallery_division"></div>
					<!-- Quarta linha de fotos -->
					<div class="grid_3">
						<a href="../images/gallery/equipe_incubadora.jpg" class="with-caption image-link" title="Administrative team meeting">
							<div id="photo_container" style="background-image: url(../images/gallery/equipe_incubadora_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Administrative team meeting
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="../images/gallery/reuniao_comissao.jpg" class="with-caption image-link" title="Supervisor Team meeting">	
							<div id="photo_container" style="background-image: url(../images/gallery/reuniao_comissao_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Supervisor Team meeting
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="../images/gallery/comissao.jpg" class="with-caption image-link" title="Prof. Marilene Vainstein (left), Prof. Rafael Roesler e Vivian Mutti (right), Supervisor Team Members">	
							<div id="photo_container" style="background-image: url(../images/gallery/comissao_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Supervisor Team Members
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="../images/gallery/maratona.jpg" class="with-caption image-link" title="Vivian Mutti e Adriano Rossi (SEDETEC) at the XV Entrepreneurship Marathon">
							<div id="photo_container" style="background-image: url(../images/gallery/maratona_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											XV Entrepreneurship Marathon
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
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