<?php

session_start();
if ( empty($_SESSION['auth']) )
	die(header('Location: connexion.php?next=topics.php'));  // "?next" passé en GET (connexion.php, le html) permet de renvoyer la page topics.php après la connexion
															// valable uniquement si l'utilsateur avait cliqué sur le lien "topics" dans le menu avant de se connecter
?>
<?php include('libs/topics.php'); ?>
<?php include('includes/top.php'); ?>
<form method="POST" action="topics.add.php">
		ajouter un topic :<br />
		<input type="text" name="title" />
		<br />
		<input type="submit" />
</form>
<br />
<br />
<br />
<table border="1">
	<thead>
		<tr>
			<th>id</th>
			<th>title</th>
		</tr>
	</thead>
	<tbody>
	<?= build_html_topics(include('data/topics.php')); ?>
	</tbody>
</table>
<?php include('includes/bottom.php'); ?>