 <nav id="menu">        
    <h3>MENU PRINCIPAL</h3>
    <div class="element_menu">    
        <ul>
            <li<?php if ($nav_en_cours == 'accueil') {echo ' class="current"';} ?>><a href="accueil.php">Accueil</a></li>
            <li<?php if ($nav_en_cours == 'presentation') {echo ' class="current"';} ?>><a href="presentation.php">Présentation</a></li>
            <li<?php if ($nav_en_cours == 'actualite') {echo ' class="current"';} ?>><a href="actualite.php">Actualité et sortie</a></li>
            <li<?php if ($nav_en_cours == 'programme') {echo ' class="current"';} ?>><a href="page4.html">Programme</a></li>
            <li<?php if ($nav_en_cours == 'expositions') {echo ' class="current"';} ?>><a href="page5.html">Expositions</a></li>
            <li<?php if ($nav_en_cours == 'photos') {echo ' class="current"';} ?>><a href="page6.html">Photos du club</a></li>
            <li<?php if ($nav_en_cours == 'membres') {echo ' class="current"';} ?>><a href="page7.html">Découvrez nos membres</a></li>
            <li<?php if ($nav_en_cours == 'inscriptiontest') {echo ' class="current"';} ?>><a href="inscriptiontest.php">Liens</a></li>
            <li<?php if ($nav_en_cours == 'inscription') {echo ' class="current"';} ?>><a href="inscription.php">Inscription</a></li>
            <li<?php if ($nav_en_cours == 'forum') {echo ' class="current"';} ?>><a href="page9.html">Forum</a></li>
            <li<?php if ($nav_en_cours == 'connexion') {echo ' class="current"';} ?>><a href="connexion.php">Connexion</a></li>
        </ul>

        <h3>NOUS CONTACTER</h3>
        <ul>
            <li<?php if ($nav_en_cours == 'contact') {echo ' class="current"';} ?>><a href="contact.php">Pour nous écrire</a></li>
        </ul>
    </div>    
</nav>
    
    
   