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
								<img src="../images/logo.png" class="logocenter">
							</a>
						</h1>
						<div class="menu_block">	
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"index.php")): ?> class="current" <?php endif;?>>
										<a href="index.php">Home</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"incubator.php")): ?> class="current" <?php endif;?>>
										<a href="incubator.php">The Incubator</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"incubated_business.php")): ?> class="current" <?php endif;?>>
										<a href="incubated_business.php">Incubated Business</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"ideas_bank.php")): ?> class="current" <?php endif;?>>
										<a href="ideas_bank.php">Ideas Bank</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"news.php")): ?> class="current" <?php endif;?>>
										<a href="news.php">News</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"team.php")): ?> class="current" <?php endif;?>>
										<a href="team.php">Team</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"contact.php")): ?> class="current" <?php endif;?>>
										<a href="contact.php">Contact</a>
									</li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>