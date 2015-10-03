<?php
/*
*	Universidade Federal do Rio Grande do Sul - Centro de Biotecnologia
*
*	Desenvolvedores: 	Arthur Kalsing
*	Descrição: 			Banner e barra de navegação. (deve ser incluido em todas as páginas antes do content)
*
*/		

?>

			<div class="container_12">
					<div class="grid_12">
						<div class="socials">
							<a href="https://www.facebook.com/iecbiot" target="_blank" class="fa fa-facebook"></a>
							<?php if(stripos($_SERVER['REQUEST_URI'],"english")): ?> 
							<a href="../index.php" class="fa i-brflag"></a> <?php endif;?>
							<?php if(!stripos($_SERVER['REQUEST_URI'],"english")): ?> 
							<a href="english/index.php" class="fa i-usaflag"></a> <?php endif;?>
							
						</div>
						<h1>
							<a href="index.php">
								<img src="images/logo.png" class="logocenter">
							</a>
						</h1>
						<div class="menu_block">	
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"index.php")): ?> class="current" <?php endif;?>>
										<a href="index.php">Home</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"incubadora.php")): ?> class="current" <?php endif;?>>
										<a href="incubadora.php">A Incubadora</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"empresas.php")): ?> class="current" <?php endif;?>>
										<a href="empresas.php">Empresas</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"bancodeideias.php")): ?> class="current" <?php endif;?>>
										<a href="bancodeideias.php">Banco de Ideias</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"noticias.php")): ?> class="current" <?php endif;?>>
										<a href="noticias.php">Notícias</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"equipe.php")): ?> class="current" <?php endif;?>>
										<a href="equipe.php">Equipe</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"contato.php")): ?> class="current" <?php endif;?>>
										<a href="contato.php">Contato</a>
									</li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>