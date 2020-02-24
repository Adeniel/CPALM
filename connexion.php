<!-- Page de connexion, à transformer et à intégrer dans la page d'accueil après -->
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
    					<h1>Club Photo Angers - Connexion</h1>
    					
						
<!-- Création du formulaire d'inscition -->
						<form method='post' action='connexionok.php' id="myform3">				
							<p>
							<label for='pseudo'>Pseudo* :</label><input type="text" name="pseudo" /><br />
							<label for='pass'>Mot de passe* :</label><input type="password" name="pass" /><br />
							<label for='connexionauto'>Connexion automatique :</label><input type="button" name="connexionauto" /><br />
							<input type="submit" name="Valider" value="Se connecter"><br />
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