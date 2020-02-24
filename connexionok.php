<!-- Page de vérification pour la connexion -->
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

                <?php $nav_en_cours = 'connexion'; ?>

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

//  Récupération de l'utilisateur et de son pass hashé
$reqpseudo = $bdd->prepare('SELECT id, pass FROM membre_photo WHERE pseudo = :pseudo');
$reqpseudo->execute(array(
    'pseudo' => $pseudo));
$resultat = $reqpseudo->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

if (!$resultat)
{
    echo '<p>Mauvais identifiant ou mot de passe !</p>';
}
else
{
    if ($isPasswordCorrect) 
    {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;

        echo '<p>Vous êtes connecté, bonjour à vous!</p>';  // Problème mise en page
    }
    else 
    {
        echo '<p>Mauvais identifiant ou mot de passe !</p>';
    }
}
?>

                    </div>  
                </article>
            </section>

            <?php include("pied_de_page.php"); ?>
        </div>

    </body>
</html>

