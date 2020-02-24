<!DOCTYPE html>
<html>
	<head>
   		<meta charset="utf-8">
    	<title>Envoi d'un message par formulaire</title>
	</head>

	<body>
		<?php
    	$retour = mail('amandine.deniel@gmail.com', $_POST['sujet_message'], $_POST['message'], 'From : $_POST[email]');
    		if ($retour) //Envoi du message
    		{
        		echo '<p>Votre message a bien été envoyé.</p>';
        	}
        	else //Non envoyé
        	{
        		echo '<p>Votre message n\'a pas pu être envoyé</p>';
        	}
    	?>
	</body>
</html>