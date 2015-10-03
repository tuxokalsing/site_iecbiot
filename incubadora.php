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
<html lang="pt">
	<head>
		<title>Incubadora Empresarial IECBiot</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" type="image/gif" href="images/favicon.gif">
		<link rel="shortcut icon" href="images/favicon.gif" />
		
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/style_common.css" />
		<link rel="stylesheet" href="css/style4.css" />
		
		<link rel="stylesheet" href="css/gallery.css" />
		
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
					<div class="grid_6">
						<h3>A Incubadora</h3>
						<p>A Incubadora Empresarial do Centro de Biotecnologia apóia empresas nas áreas de saúde, 
						agroindústria e meio ambiente. Além disso, promove atividades de ensino e treinamento de 
						recursos humanos altamente qualificados na sua área de atuação. </p>
						<p> Inovação na IECBiot é: </p>
						<p class="areas center destaque">“Consolidação de ideias luminosas em biotecnologia”</p>
						<p>Visando cumprir sua missão de “Propiciar e apoiar o desenvolvimento de empreendimentos 
						na área de biotecnologia no Rio Grande do Sul”, a IECBiot oferece um ambiente apropriado 
						para desenvolvimento.</p>
						
						<p class="areas destaque">Documentação Oficial:</p>
						<u>
							<li><a href="documentos/Regulamento_Interno_IECBiot.pdf">Regulamento Interno</a></li>
							<li><a href="documentos/Modelo_de_Contrato_de_Incubacao.doc">Modelo de Contrato de Incubação</a></li>
							<li><a href="documentos/Plano_de_Negocios.pdf">Plano de Negócios</a></li>
							<li><a href="../documentos/Tabela_-_valores_de_servicos.pdf">Tabela de valores e serviços</a></li>
						</u>
						<br>
						<center><img src="images/incfrente.png" /></center>
						
					</div>
					<div class="grid_5 prefix_1">
						<h3>Áreas de atuação</h3>
						<div class="icon_grid"><span class="i-farm icon"></span></div>
						<div class="desc_grid"><p class="areas">Agronegócio</p></div>
						<div class="clear"></div>
						<div class="icon_grid"><span class="i-biotech icon"></span></div>
						<div class="desc_grid"><p class="areas">Bioinformática</p></div>
						<div class="clear"></div>
						<div class="icon_grid"><span class="i-bioenergy icon"></span></div>
						<div class="desc_grid"><p class="areas">Energia</p></div>
						<div class="clear"></div>
						<div class="icon_grid"><span class="i-foodindustry icon"></span></div>
						<div class="desc_grid"><p class="areas">Indústria de Alimentos</p></div>
						<div class="clear"></div>
						<div class="icon_grid"><span class="i-chemistry icon"></span></div>
						<div class="desc_grid"><p class="areas">Indústria Química</p></div>
						<div class="clear"></div>
						<div class="icon_grid"><span class="i-environment icon"></span></div>
						<div class="desc_grid"><p class="areas">Meio Ambiente</p></div>
						<div class="clear"></div>
						<div class="icon_grid"><span class="i-veterinary icon"></span></div>
						<div class="desc_grid"><p class="areas">Saúde Animal</p></div>
						<div class="clear"></div>
						<div class="icon_grid"><span class="i-health icon"></span></div>
						<div class="desc_grid"><p class="areas">Saúde Humana</p></div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
					<div class="hor_separator hor__1"></div>
					<div class="grid_6">
						<h3>Serviços</h3>
						<br>
						<p>
						<span class="i-check"></span> Suporte para elaboração do Plano de Negócios;<br>
						<span class="i-check"></span> Orientação para busca de financiamentos;<br>
						<span class="i-check"></span> Orientação no gerenciamento de projetos de PDI;<br>
						<span class="i-check"></span> Consultoria em Gestão Empresarial;<br>
						<span class="i-check"></span> Assessoria na busca de novas tecnologias;<br>
						<span class="i-check"></span> Incentivo na interação com fontes externas de capacitação e conhecimento;<br>
						<span class="i-check"></span> Serviços administrativos: secretaria, recepção, internet, limpeza; <br>
						<span class="i-check"></span> Acesso aos laboratórios de serviços biotecnológicos (<b>Labtech</b>):<br>
						<span class="i-lab"></span> <b>Lafer</b>: Lab. de fermentação com duas unidades de produção industriais.<br>
						<span class="i-lab"></span> <b>BioCel</b>: Lab. de Biologia Celular. <br>
						<span class="i-lab"></span> <b>BioMol</b>: Lab. de Biologia Molecular.
						</p>
					</div>
					<div class="grid_6">
						<h3>Infraestrutura</h3>
						<p>A IECBiot está instalada em 500m² de área, destinada para abrigar etapas da pesquisa, 
						desenvolvimento e inovação de até 08 empresas incubadas simultaneamente, oferecendo módulos 
						entre 25m² e 100m², conforme a necessidade de cada uma. Para uso compartilhado mediante 
						agendamento a IECBiot possibilita o uso de sala de reuniões para até 20 pessoas e um 
						anfiteatro para 100 pessoas.</p>
						<img src="images/infra.jpg"> 
					</div>
					<div class="clear"></div>
					<div class="hor_separator hor__1"></div>
					<div class="grid_12">
						<h3>Como Participar</h3>
						Os empreendedores interessados apresentam seus Planos de Negócios em resposta ao edital de Seleção.
						Não é necessário que a empresa já esteja constituída. Os Planos de Negócios são avaliados quanto a 
						sua viabilidade técnica, econômica e de mercado, se aprovado no processo seletivo ingressa na IECBiot 
						na modalidade de Pré-incubação.<br>
											
						<div class="graphic" style=" width: 130px;"><img src="images/grafico/1.png"></div>
						<div class="graphic" style=" width: 45px;"><img src="images/grafico/2.png"></div>
						<div class="graphic" style=" width: 250px;"><img src="images/grafico/3.png"></div>
						<div class="graphic" style=" width: 50px;"><img src="images/grafico/4.png"></div>
						<div class="graphic" style=" width: 205px;"><img src="images/grafico/5.png"></div>
						<div class="graphic" style=" width: 190px;"><img src="images/grafico/6.png"></div>
						<div class="graphic" style=" width: 40px;"><img src="images/grafico/7.png"></div>
						<div class="graphic" style=" width: 260px;"><img src="images/grafico/8.png"></div>
						<div class="graphic-subs" style=" width: 120px;"><p class="subs">Ideia</p></div>
						<div class="graphic-subs" style=" width: 50px;"></div>
						<div class="graphic-subs" style=" width: 255px;"><p class="subs">Edital</p></div>
						<div class="graphic-subs" style=" width: 40px;"></div>
						<div class="graphic-subs" style=" width: 140px;"><p class="subs">Pré-incubação</p></div>
						<div class="graphic-subs" style=" width: 90px;"></div>
						<div class="graphic-subs" style=" width: 165px;"><p class="subs">Incubação</p></div>
						<div class="graphic-subs" style=" width: 40px;"></div>
						<div class="graphic-subs" style=" width: 265px;"><p class="subs">Graduação</p></div>
					</div>
					<div class="clear"></div>
					<div class="hor_separator hor__1"></div>
					<div class="grid_6">
						<h3>Idéia</h3>
						<img src="images/ideia.png" class="img_inner fleft" style="margin-top: 30px;">
						<h1>Não deixe sua ideia no papel!</h1>
						<br>
						<p>Os novos empreendimentos iniciam pela concepção de ideias inovadoras, IECBiot acompanha 
						os empreendedores desde esta fase oferecendo cursos, palestras, oficinas preparando os 
						futuros empreendedores. Atua na sensibilização do público e prospecção de ideias.
						Se você tem uma ideia inovadora, venha participar do nosso <a href="bancodeideias.php" class="color1">Banco de Ideias</a>!</p>
					</div>
					<div class="grid_6">
						<h3>Edital</h3>
						<img src="images/edital.png" class="img_inner fleft" style="margin-top: 30px;">
						<h1>2 oportunidades por ano</h1>
						<br>
						<p>A IECBiot abre editais periodicamente e os proponentes devem mostrar o potencial do empreendimento através do plano de negócios.</p>
						<p>No Edital os proponentes participam através do cadastro online no sistema da incubadora e enviar seus planos 
						de negócios conforme as orientações do sistema. Após a avaliação e seleção serão realizadas entrevistas com os 
						proponentes. A empresa então ingressa na pré-incubação. Verifique as datas dos próximos editais na  
						<a href="http://sgi.macropus.com.br/iecbiot/edital" target="_blank" class="color1">página dos editais</a>.</p>
					</div>
					<div class="clear"></div>
					<div class="hor_separator hor__1"></div>
					<div class="grid_6">
						<h3>Pré-incubação</h3>
						<img src="images/preinc.png" class="img_inner fleft" style="margin-top: 30px;"> 
						<h1>Período de 3 a 6 meses</h1>
						<br>
						<p>O Plano de Negócios aprovado no processo seletivo ingressa na IECBiot na modalidade de Pré-incubação. 
						O período de Pré-incubação destina-se a aprimorar o Plano de Negócios, elaborando o planejamento detalhado 
						da empresa com apoio da Incubadora e também para constituir a empresa. Ao final de um período de seis meses 
						de pré-incubação o Plano de Negócios é avaliado quanto a sua viabilidade técnica, econômica e de mercado e 
						ingressa no estágio de Incubação de Empresa ou é desincubado caso não apresente viabilidade.</p>
					</div>
					<div class="grid_6">
						<h3>Incubação</h3>
						<img src="images/incubacao.png" class="img_inner fleft" style="margin-top: 30px;">
						<h1>Período de 3 anos prorrogável por mais 3 anos</h1>
						<br>
						<p>Durante esta fase a empresa aplica o planejamento nas dimensões do empreendedor, tecnologia, mercado, gestão e capital.</p>
					</div>
					<div class="clear"></div>
					<div class="hor_separator hor__1"></div>
					<div class="grid_6">
						<h3>Graduação</h3>
						<img src="images/gradua.png" class="img_inner fleft" style="margin-top: 30px;">
						<h1>Preparadas para o mercado!</h1>
						<br>
						<p>Na graduação a empresa deixa a incubadora instalando-se em área própria. 
						Entretanto, o contato com a incubadora não termina aí, a IECBiot continua 
						acompanhado as empresas graduadas.</p>
					</div>
					<div class="grid_6">
						<h3>Participe!</h3>
						<img src="images/participe.png" class="img_inner fleft" style="margin-top: 30px;">
						<h1>Ideias inovadoras?</h1>
						<br>
						<p>Você tem um perfil empreendedor? Você tem idéias inovadoras que gostaria de compartilhar o colocar em prática?
						Venha nos conhecer! Estamos sempre dispostos e abertos para uma conversa pessoal, pelo email ou telefone. Não deixe
						de participar do nosso <a href="bancodeideias.php" class="color1">Banco de Ideias</a>!</p></p>
					</div>
					<div class="clear"></div>
					<div class="hor_separator hor__1"></div>
					<div class="grid_12">
						<h3>Rumo à certificação CERNE-1</h3>
						Desde o primeiro semestre de 2014 a IECBiot vem trabalhando para certificar-se nas novas normas do CERNE (Anprotec),
						garantindo maior qualidade e grau de sucesso nos projetos de incubação. Leia mais sobre o modelo CERNE na 
						<a href="http://anprotec.org.br/cerne/" class="color1">página oficial do modelo</a>. <br><br>
						
						<img src="images/infocerne.png">
					</div>
					<div class="clear"></div>
					<div class="hor_separator hor__1"></div>			
					<div class="grid_12">
						<h3>Galeria</h3>
					</div>
					<div class="clear"></div>
					<!-- Primeira linha de fotos -->
					<div class="grid_3">
						<a href="images/gallery/entrada_campus.jpg" class="with-caption image-link" alt="" title="Entrada do campus do Vale no bairro Agronomia - POA">
							<div id="photo_container" style="background-image: url(images/gallery/entrada_campus_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Entrada do campus do Vale
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="images/gallery/entrada_cbiot.jpg" class="with-caption image-link" title="Entrada do CBiot onde encontra-se a Incubadora">
							<div id="photo_container" style="background-image: url(images/gallery/entrada_cbiot_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Entrada do Centro de Biotecnologia
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="images/gallery/monolito_centro.jpg" class="with-caption image-link" title="Centro de Biotecnologia">	
							<div id="photo_container" style="background-image: url(images/gallery/monolito_centro_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Centro de Biotecnologia
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="images/gallery/recepcao.jpg" class="with-caption image-link" title="Serviços de recepção">	
							<div id="photo_container" style="background-image: url(images/gallery/recepcao_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Serviços de recepção
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="clear gallery_division"></div>
					<!-- Segunda linha de fotos -->
					<div class="grid_3">
						<a href="images/gallery/corredores_incuabadora.jpg" class="with-caption image-link" title="Corredores da IECBiot">
							<div id="photo_container" style="background-image: url(images/gallery/corredores_incuabadora_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Corredores da incubadora
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="images/gallery/labo.jpg" class="with-caption image-link" title="Laboratórios equipados">
							<div id="photo_container" style="background-image: url(images/gallery/labo_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Laboratórios equipados
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="images/gallery/sala_reunioes.jpg" class="with-caption image-link" title="Sala de reuniões com espaço para 20 lugares">	
							<div id="photo_container" style="background-image: url(images/gallery/sala_reunioes_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Sala de reuniões
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="images/gallery/sala_incubada.jpg" class="with-caption image-link" title="Módulo de laboratório alocado por Ziel Biosciences">	
							<div id="photo_container" style="background-image: url(images/gallery/sala_incubada_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Módulo de laboratório Ziel
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="clear gallery_division"></div>
					<!-- Terceira linha de fotos -->
					<div class="grid_3">
						<a href="images/gallery/seminario_nanotec.jpg" class="with-caption image-link" title="Seminário Nanotecnologia apresentado pelo Professor Sergio Bampi">
							<div id="photo_container" style="background-image: url(images/gallery/seminario_nanotec_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Seminário Nanotecnologia 
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="images/gallery/alunos_ppgbc.jpg" class="with-caption image-link" title="Alunos do PPGBC assistindo ao seminário semanal">
							<div id="photo_container" style="background-image: url(images/gallery/alunos_ppgbc_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Alunos do PPGBC
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="images/gallery/visita_farmacia.jpg" class="with-caption image-link" title="Alunos do curso de Farmácia conhecendo a IECBiot">	
							<div id="photo_container" style="background-image: url(images/gallery/visita_farmacia_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Visita dos alunos da Farmácia
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="images/gallery/visita_equipe_parque.jpg" class="with-caption image-link" title="Equipe do Parque Tecnologico da UFRGS visita o IECBiot">	
							<div id="photo_container" style="background-image: url(images/gallery/visita_equipe_parque_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Visita da equipe do Parque 
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="clear gallery_division"></div>
					<!-- Quarta linha de fotos -->
					<div class="grid_3">
						<a href="images/gallery/equipe_incubadora.jpg" class="with-caption image-link" title="Reunião da equipe da incubadora da IECBiot">
							<div id="photo_container" style="background-image: url(images/gallery/equipe_incubadora_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Reunião da equipe administrativa
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="images/gallery/reuniao_comissao.jpg" class="with-caption image-link" title="Reunião da comissão supervisora do IECBiot">	
							<div id="photo_container" style="background-image: url(images/gallery/reuniao_comissao_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Reunião Comissão Supervisora
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="images/gallery/comissao.jpg" class="with-caption image-link" title="Profa. Marilene Vainstein (esq), Prof. Rafael Roesler e Vivian Mutti (dir), membros da comissão supervisora.">	
							<div id="photo_container" style="background-image: url(images/gallery/comissao_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											Membros da Comissão Supervisora 
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="grid_3">
						<a href="images/gallery/maratona.jpg" class="with-caption image-link" title="Vivian Mutti e Adriano Rossi (SEDETEC) prestigiando a cerimônia de encerramento da XV Maratona de Empreendedorismo da UFRGS.">
							<div id="photo_container" style="background-image: url(images/gallery/maratona_mini.jpg);">
								<div class="photo_par1">
									<div class="photo_par2">
										<div class="photo_par3">
											XV Maratona de Empreendedorismo
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