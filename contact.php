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

    				<?php $nav_en_cours = 'contact'; ?>

    				<?php include("menu.php"); ?>

    				<article>
						<div class='news'>
							<h1>Nous contacter</h1>

							<p>Si vous voulez prendre contact avec nous ou simplement nous poser une question, n'hésitez pas : laissez-nous un petit message à notre adresse mail <a href="mailto:photomadeleineangers@free.fr">photomadeleineangers@free.fr</a> ou utilisez le formulaire ci-dessous. Nous essaierons de vous répondre dans les meilleurs délais.</p>

<!--Création du formulaire pour l'envoi des mails-->
							<form method='post' action='mail.php' id="myform2">
							<p>
								<label for='nom'>Votre nom :</label><input type="text" name="nom" /><br />
								<label for='prenom'>Votre prénom :</label><input type="text" name="prenom" /><br />
								<label for='email'>Votre adresse email* :</label><input type="text" name="email" /><br />
								<label for='sujet_message'>Sujet de votre message* :</label><input type="text" name="sujet_message"><br />
								<label for='message'>Votre message* :</label><textarea name="message" id="message" rows="10" cols="50"></textarea><br />
								<input type="submit" name="Valider"><br />
							</p>
							</form>	
							<p>*Information requise</p>

						</div>	
					</article>
				</section>	
				<?php include("pied_de_page.php"); ?>
			</div>
		</body>
	</html>