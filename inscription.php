<!-- Page d'Inscription -->
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
    			<?php $nav_en_cours = 'inscription'; ?>
    			<?php include("menu.php"); ?> 

    			<article>
    				<div class='news'>
    					<h1>Inscription</h1>
    					<p>Bonjour, merci de remplir les données ci dessous afin de valider votre isncription auprès du club photo d'Angers La Madeleine. Vous pourrez ainsi participer au forum et poster, si vous le souhaitez, certaines de vos photos. </p>

<!-- Création du formulaire d'inscition -->
						<form method='post' action='inscriptionok.php' id="myform1">
							<p>
							<label for='pseudo'>Pseudo* :</label><input type="text" name="pseudo" /><br />
							<label for='pass'>Mot de passe* :</label><input type="password" name="pass" /><br />
							<label for='pass_ok'>Confirmation du mot de passe* :</label><input type="password" name="pass_ok" /><br />
							<label for='email'>Email* :</label><input type="text" name="email" /><br />
							<input type="submit" name="Valider"><br />
							*Information requise
							</p>	
						</form>
					</div>
				</article>
			</section>

			<?php include("pied_de_page.php"); ?>
		</div>
	</body>
</html>		