<?php
/*
*	Universidade Federal do Rio Grande do Sul - Centro de Biotecnologia
*
*	Desenvolvedores: 	Arthur Kalsing
*	Descrição: 			Página do banco de idéias.
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
		<link rel="stylesheet" href="css/form.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/TMForm.js"></script>
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
						<h3>Banco de ideias IECBiot:</h3>
						<form id="form_bdi">
							<div class="success_wrapper">
								<div class="success-message">Idéia registrada com sucesso!</div>
							</div>
							<div class="field_label">Nome: *</div>
							<label class="name">
								<input class="input" type="text" id="nome" placeholder="Nome Completo" data-constraints="@Required @JustLetters" />
								<span class="empty-message">*Nome necessário.</span>
								<span class="error-message">*Nome inválido.</span>
							</label>
							<div class="clear"></div>
							<div class="field_label">Email: *</div>
							<label class="email">
								<input class="input" type="text" id="email" placeholder="email@dominio.completo" data-constraints="@Required @Email" />
								<span class="empty-message">*Email necessário para contato.</span>
								<span class="error-message">*Email inválido.</span>
							</label>
							<div class="clear"></div>
							<div class="field_label">Formação: *</div>
							<label class="formacao">
								<input class="input" type="text" id="formacao" placeholder="Doutor/Mestre/Engenheiro/Técnico em ... " data-constraints="@Required @JustLetters" />
								<span class="empty-message">*Por favor, informe sua formação.</span>
								<span class="error-message">*Formação Inválida (apenas letras).</span>
							</label>
							<div class="clear"></div>
							<div class="field_label">Fone:</div>
							<label class="phone">
								<input class="input" type="text" id="fone" placeholder="xx xxxx xxxx" data-constraints="@JustNumbers"/>
								<span class="empty-message">*Fone para contato necessário.</span>
								<span class="error-message">*Fone inválido.</span>
							</label>
							<div class="clear"></div>
							<div class="field_label_areas">Áreas de interesse: *</div>
							<label class="areas_interesse">
								<label class="area"><input type="checkbox" id="agr"/> Agronegócio </label>
								<label class="area"><input type="checkbox" id="bio"/> Bioinformática </label>
								<label class="area"><input type="checkbox" id="ene"/> Energia </label>
								<label class="area"><input type="checkbox" id="ina"/> Indústria de Alimentos </label>
								<label class="area"><input type="checkbox" id="inq"/> Indústria Química </label>
								<label class="area"><input type="checkbox" id="amb"/> Meio Ambiente </label>
								<label class="area"><input type="checkbox" id="vet"/> Saúde Animal </label>
								<label class="area"><input type="checkbox" id="sau"/> Saúde Humana </label>
							</label>
							<div class="clear"></div>
							<div class="field_label_estimativa">Estimativa de investimento:</div>
							<label class="investimento">
								<input class="input_estimativa" type="text" id="investimento" placeholder="0" data-constraints="@JustNumbers"/>
								<span class="error-message">*Apenas números por favor.</span>
							</label>
							<div class="clear"></div>
							<div class="field_label_ideia">Sua ideia: *</div>
							<label class="message">
								<textarea placeholder="Descreva sua idéia: 
- Seja preciso;
- Informe se acredita na necessidade de alguma patente e/ou licença;
- Descreva que produto/serviço você deseja ofertar ao mercado;" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
								<span class="empty-message">*Mensagem em branco.</span>
								<span class="error-message">*Esta mensagem é muito curta.</span>
							</label>
							<div class="clear"></div>
							<div class="field_label_ideia" style="padding-top: 25px;" >Qual é a inovação: *</div>
							<label class="message">
								<textarea placeholder="Descreva que tipo de inovação você está propondo: 
- Qual é o diferencial em relação ao que já existe;
- Minha idéia é uma ótima idéia porque;" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
								<span class="empty-message">*Informação em branco.</span>
								<span class="error-message">*Esta informação é muito curta.</span>
							</label>
							<div class="clear"></div>
							<div class="field_label_ideia" style="padding-top: 25px;">Quem são os consumidores: *</div>
							<label class="message">
								<textarea placeholder="Descreva, se possível, qual é o nicho de mercado objetivado por este projeto:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
								<span class="empty-message">*Informação em branco.</span>
								<span class="error-message">*Esta informação é muito curta.</span>
							</label>
							<div class="clear"></div>
							<div class="btns">
								<a href="#" data-type="reset" class="btn">Limpar</a>
								<a href="#" data-type="submit" class="btn">Enviar</a>
							</div>
						</form>
					</div>
					<div class="grid_6">
						<h3>Sobre o banco de idéias</h3>
						
						<p>O Banco de Ideias visa motivar empreendedores e prospectar ideias. 
						As ideias registradas passam por um processo de avaliação onde a inovação 
						e a viabilidade são levadas em conta. A IECBiot entrará em contato com os 
						autores se a ideia apresentar potencial de desenvolvimento na incubadora. 
						Caso o autor não esteja interessado em viabilizar sua ideia, a IECBiot 
						também poderá solicitar permissão para armazená-la e disponibilizar o 
						produto/serviço através de outras partes interessadas.
						</p>
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