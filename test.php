<?php
$bdd = new PDO('mysql:host=localhost;dbname=pouet;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$req = $bdd->prepare('INSERT INTO membre_phototest(pseudo, pass, email) VALUES(?, ?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['pass'], $_POST['email']));

echo '<p>Votre inscription est bonne</p>'


// Connexion à la base de données				try 			{					$bdd = new PDO('mysql:host=localhost;dbname=pouet;charset=utf8', 'root', ''); 					} 				catch (Exception $e) 				{					die('Erreur: '.$e->getMessage());					}

// Vérification de la validité des informations				$pseudo = $_POST['pseudo']; 				$pass = $_POST['pass'];				$email = $_POST['email'];


// Hachage du mot de passe 								$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);


// Insertion de l'inscription dans la bdd				$req = $bdd->prepare('INSERT INTO membre_phototest(pseudo, pass, email) VALUES('Linoa','pouet','gye@gmail.com')');


// Insertion de l'inscription dans la bdd				$req->execute(array( 					'pseudo' => $pseudo,					'pass' => $pass_hache, 					'email' => $email));

// Test écriture				echo '<p>Merci pour votre inscription. Vous pouvez dès à présent participer au forum.</p> ';				echo '<p>nom : ' . $pseudo . ' mdp : ' . $pass_hache . ' email: ' . $email . '.</p>';

// Redirection du visiteur vers la page d'accueil				header('Location: accueil.php');	
?>			