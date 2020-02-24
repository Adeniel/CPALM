<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Club Photo Angers - La Madeleine</title>
		<link href="style_cpalm.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div class="bloc_page">
			<?php include("entete.php"); ?>
    
    		<section>
    			<?php $nav_en_cours = 'inscriptiontest'; ?>
    			<?php include("menu.php"); ?> 

    			<article>
    				<div class='news'>
    					<h1>Inscription</h1>
    					<p>Bonjour, Merci de remplir les données ci dessous afin de valider votre isncription auprès du club photo d'Angers La Madeleine. Vous pourrez ainsi participer au forum et poster, si vous le souhaitez, certaines de vos photos. </p>

<!-- Création du formulaire d'inscition -->
						<form method='post' action='test.php' id="myform1">
							<p>
							<label for='pseudo'>Pseudo :</label><input type="text" name="pseudo" /><br />
							<label for='pass'>Mot de passe :</label><input type="password" name="pass" /><br />
							<label for='email'>Email :</label><input type="text" name="email" /><br />
							<input type="submit" name="Valider"><br />
							</p>	
						</form>
					</div>
				</article>
			</section>

			<?php include("pied_de_page.php"); ?>
		</div>
	</body>
</html>		