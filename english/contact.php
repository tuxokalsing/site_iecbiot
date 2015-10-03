<?php
/*
*	Universidade Federal do Rio Grande do Sul - Centro de Biotecnologia
*
*	Desenvolvedores: 	Arthur Kalsing
*	Descrição: 			Página de contato com telefones úteis, form de contato e localização.
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
		<link rel="stylesheet" href="../css/form.css">
		<link rel="stylesheet" href="../css/style.css">
		<script src="../js/jquery.js"></script>
		<script src="../js/jquery-migrate-1.2.1.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/superfish.js"></script>
		<script src="../js/jquery.ui.totop.js"></script>
		<script src="../js/jquery.equalheights.js"></script>
		<script src="../js/jquery.mobilemenu.js"></script>
		<script src="../js/TMForm.js"></script>
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
						<h3>Where we are</h3>
						<div class="map">
							<figure class="">
								<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1726.4544235747032!2d-51.12051494216587!3d-30.068147207757345!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1415119167108" width="600" height="450" frameborder="0" style="border:0"" style="border:0"></iframe>
							</figure>
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_5">
						<h3>Contact</h3>
						<div class="text1">The Business Incubator is open from monday to friday between 9:00 and 17:00.</div>
						Incubadora Empresarial do Centro de Biotecnologia - IECBiot <br>
						Av. Bento Gonçalves, 9500 <br>
						Prédio 43421 - Setor IV <br>
						Campus do Vale da UFRGS <br>
						Bairro Agronomia <br>
						CEP 91501-970 <br>
						Porto Alegre - RS <br> <br>
						
						Phone: +55 51 3308-6088 <br>
						Fax : +55 51 3308-7309 <br>
						E-mail: <span class="color1"><a href="mailto:incubadora@cbiot.ufrgs.br">incubadora@cbiot.ufrgs.br</a></span>
					</div>
					<div class="grid_6 prefix_1">
						<h3>Contact Form</h3>
						<form id="form" action="contato.php" method="post" accept-charset="UTF-8">
							<div class="success_wrapper">
								<div class="success-message">Message sent!</div>
							</div>
							<label class="name">
								<input type="text" placeholder="Nome:" data-constraints="@Required @JustLetters" />
								<span class="empty-message">*Name is necessary.</span>
								<span class="error-message">*Invalid name.</span>
							</label>
							<label class="email">
								<input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
								<span class="empty-message">*An email is necessary for contact.</span>
								<span class="error-message">*Invalid email.</span>
							</label>
							<label class="phone">
								<input type="text" placeholder="Fone:" data-constraints="@JustNumbers"/>
								<span class="empty-message">*A phone is necessary for contact.</span>
								<span class="error-message">*Invalid phone number.</span>
							</label>
							<label class="message">
								<textarea placeholder="Mensagem:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
								<span class="empty-message">*The message is empty.</span>
								<span class="error-message">*This message is too short.</span>
							</label>
							<div>
								<div class="clear"></div>
								<div class="btns">
									<a href="#" data-type="reset" class="btn">Reset</a>
									<a href="#" data-type="submit" class="btn">Send</a>
								</div>
							</div>
						</form>
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