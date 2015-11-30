<?php include('includes/top.php'); ?>
contenu de la page index
<br />

<?php

session_start();
if ( !empty($_SESSION['auth']) ) {
?>

Vous êtes connecté.
<br />
<a href="deconnexion.php">deconnexion</a>


<?php
} else {
?>

Vous n'êtes pas connecté.
<br />
<a href="connexion.php">connexion</a>


<?php
}

include('includes/bottom.php');
?>