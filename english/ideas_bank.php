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
<html lang="en">
	<head>
		<title>Business Incubator IECBiot</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" type="image/gif" href="../images/favicon.gif">
		<link rel="shortcut icon" href="../images/favicon.gif" />
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/form.css">
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
					<div class="grid_6">
						<h3>IECBiot Ideas Bank:</h3>
						<form id="form_bdi">
							<div class="success_wrapper">
								<div class="success-message">Idea successfully registered!</div>
							</div>
							<div class="field_label">Name: *</div>
							<label class="name">
								<input class="input" type="text" id="nome" placeholder="Full Name" data-constraints="@Required @JustLetters" />
								<span class="empty-message">*Name is necessary.</span>
								<span class="error-message">*Invalid Name.</span>
							</label>
							<div class="clear"></div>
							<div class="field_label">Email: *</div>
							<label class="email">
								<input class="input" type="text" id="email" placeholder="email@complete.domain" data-constraints="@Required @Email" />
								<span class="empty-message">*Email is necessary.</span>
								<span class="error-message">*Invalid Email.</span>
							</label>
							<div class="clear"></div>
							<div class="field_label">Educational Grade: *</div>
							<label class="formacao">
								<input class="input" type="text" id="formacao" placeholder="Doctor/Master/Engineer/Technician in ... " data-constraints="@Required @JustLetters" />
								<span class="empty-message">*Please, inform your educational grade.</span>
								<span class="error-message">*Invalid educational grade (only letters accepted).</span>
							</label>
							<div class="clear"></div>
							<div class="field_label">Phone:</div>
							<label class="phone">
								<input class="input" type="text" id="fone" placeholder="xx xxxx xxxx" data-constraints="@JustNumbers"/>
								<span class="empty-message">*A phone number is necessary.</span>
								<span class="error-message">*Invalid phone number (only numbers accepted).</span>
							</label>
							<div class="clear"></div>
							<div class="field_label_areas">Operation Areas: *</div>
							<label class="areas_interesse">
								<label class="area"><input type="checkbox" id="agr"/> Agribusiness </label>
								<label class="area"><input type="checkbox" id="bio"/> Bioinformatics </label>
								<label class="area"><input type="checkbox" id="ene"/> Energy </label>
								<label class="area"><input type="checkbox" id="ina"/> Food Industry </label>
								<label class="area"><input type="checkbox" id="inq"/> Chemical Industry </label>
								<label class="area"><input type="checkbox" id="amb"/> Environment </label>
								<label class="area"><input type="checkbox" id="vet"/> Animal Health </label>
								<label class="area"><input type="checkbox" id="sau"/> Human Health </label>
							</label>
							<div class="clear"></div>
							<div class="field_label_estimativa">Investment Estimate:</div>
							<label class="investimento">
								<input class="input_estimativa" type="text" id="investimento" placeholder="0" data-constraints="@JustNumbers"/>
								<span class="error-message">*Numbers only.</span>
							</label>
							<div class="clear"></div>
							<div class="field_label_ideia">Your idea: *</div>
							<label class="message">
								<textarea placeholder="Describe your idea: 
- Be precise;
- Inform if you will need any rights over technology or license;
- Describe what product/service you are willing to offer to the market;" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
								<span class="empty-message">*Empty textbox.</span>
								<span class="error-message">*This description is too short.</span>
							</label>
							<div class="clear"></div>
							<div class="field_label_ideia" style="padding-top: 25px;" >What is the innovation: *</div>
							<label class="message">
								<textarea placeholder="Describe what kind of innovation you are proposing: 
- What is the difference from what is existent;
- My idea is a bright idea because;" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
								<span class="empty-message">*Empty textbox.</span>
								<span class="error-message">*This description is too short.</span>
							</label>
							<div class="clear"></div>
							<div class="field_label_ideia" style="padding-top: 25px;">Who are your customers: *</div>
							<label class="message">
								<textarea placeholder="Describe, if possible, what is the market aimed for this project;" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
								<span class="empty-message">*Empty textbox.</span>
								<span class="error-message">*This description is too short.</span>
							</label>
							<div class="clear"></div>
							<div class="btns">
								<a href="#" data-type="reset" class="btn">Reset</a>
								<a href="#" data-type="submit" class="btn">Send</a>
							</div>
						</form>
					</div>
					<div class="grid_6">
						<h3>About the ideas bank</h3>
						
						<p>This ideas bank aims to motivate entrepreneurs and explore innovative ideas.
						The registered ideas go thought a review process where innovation and sustainability
						are taken into account. If the idea presents development potential in the incubator 
						the Incubator team contacts the authors If the author is not interested in developing
						his own idea, the incubator may also request permission to store it and deliver
						the product/service through other stakeholders.</p>
						
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