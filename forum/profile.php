<?php

session_start();
if ( empty($_SESSION['auth']) )
	die(header('Location: connexion.php?next=profile.php')); // "?next" passé en GET (connexion.php, le html) permet de renvoyer la page profile.php après la connexion
															// valable uniquement si l'utilsateur avait cliqué sur le lien "profile" dans le menu avant de se connecter
?>
<?php include('includes/top.php'); ?>
contenu de la page profile
<?php include('includes/bottom.php'); ?>