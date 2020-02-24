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
						<?php 

// Connexion à la base de données
				try 
				{
					$bdd = new PDO('mysql:host=localhost;dbname=pouet;charset=utf8', 'root', ''); 	
				} 
				catch (Exception $e) 
				{
					die('Erreur: '.$e->getMessage());		
				}				

// Définitions des variables
				$pseudo = $_POST['pseudo'];
				$pass = $_POST['pass'];
				$email = $_POST['email'];

// Vérification que tous les champs sont remplis
if (!empty($_POST['pseudo']) AND !empty($_POST['pass']) AND !empty($_POST['pass_ok']) AND !empty($_POST['email']))
{
// Vérification que le pseudo n'existe pas déjà dans la bdd
	$reqpseudo = $bdd->prepare('SELECT COUNT(*) FROM membre_photo WHERE pseudo = :pseudo');
	$reqpseudo->execute(array('pseudo' => $_POST['pseudo']));
	$pseudoexist = $reqpseudo ->fetch();

	if ($pseudoexist[0] == 0) // pseudo disponible 
	{
// Vérification que le mail n'existe pas déjà dans la bdd
		$reqemail = $bdd->prepare('SELECT COUNT(*) FROM membre_photo WHERE email = :email');
		$reqemail->execute(array('email' => $_POST['email']));
		$emailexist = $reqemail ->fetch();

		if ($emailexist[0] == 0) // mail disponible
		{
// Vérification REGEX de l'email
			if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
			{	
// Vérification correspondance des deux mots de passe
				if ($_POST['pass'] == $_POST['pass_ok'])
				{
	// Hachage du mot de passe 			
				$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

	// Insertion de l'inscription dans la bdd
					$insertmbr = $bdd->prepare('INSERT INTO membre_photo(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURRENT_TIMESTAMP())');
					$insertmbr->execute(array(
						'pseudo' => $pseudo,
						'pass' => $pass_hache, 
						'email' => $email));

					echo '<p>Merci pour votre inscription. Vous pouvez dès à présent participer au forum.</p> ';
				}
				else
				{
				echo '<p>Les mots de passes fournis ne sont pas identiques, merci de remplir à nouveau le formulaire avec les bonnes données.<br />
				<form><input type="button" value="Retour au formulaire d\'inscription" onclick="history.go(-1)"></form></p>';
				}	
			}
			else
			{
			echo '<p>L\'adresse mail que vous avez transmise n\'est pas valide. Veuillez remplir à nouveau le formulaire et fournir une nouvelle adresse mail. Merci.<br />
			<form><input type="button" value="Retour au formulaire d\'inscription" onclick="history.go(-1)"></form></p>';
			}
		}		
		else
		{
		echo '<p>L\'adresse mail que vous avez transmise est déjà utilisée. Veuillez remplir à nouveau le formulaire et fournir une nouvelle adresse mail. Merci.<br />
		<form><input type="button" value="Retour au formulaire d\'inscription" onclick="history.go(-1)"></form></p>';
		}	
	}
	else
	{
		echo '<p>Le pseudo que vous avez transmis est déjà utilisé par un autre membre. Veuillez remplir à nouveau le formulaire et transmettre un nouveau pseudo. Merci.<br />
		<form><input type="button" value="Retour au formulaire d\'inscription" onclick="history.go(-1)"></form></p>';
	}	
}
else
{
	echo '<p>Merci de remplir tous les champs demandés dans le formulaire.<br />
	<form><input type="button" value="Retour au formulaire d\'inscription" onclick="history.go(-1)"></form></p>';
}				



// Redirection du visiteur vers la page d'accueil				header('Location: accueil.php');				
?>
					</div>	
				</article>
			</section>

			<?php include("pied_de_page.php"); ?>
		</div>

	</body>
</html>


