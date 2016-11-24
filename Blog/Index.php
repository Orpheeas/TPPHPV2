<?php
	session_start();

	$_SESSION['pseudo'] = 'Moriarty';
	$_SESSION['mdp'] = 'Sherlock';

?>

<pre>
	<?php
		print_r($_SESSION);
	?>
</pre>


<!DOCTYPE html>
<html lang='fr'>
<head>
	<meta charset="utf-8">
	<title>Facebook like</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	
	<h1>Login</h1>

	<form action="#" method="POST"> >

		<label for="pseudo"> Pseudo : </label><input type="text" name="pseudo" /><br/>
		<label for="motdepasse"> mot de passe : </label><input type="text" name="mdp" /> <br/>

		<input type="submit" value="Connexion" />

	</form>

	<?php 

		$file= "log.txt";
		$fileopen=(fopen("$file",'a+'));
		fwrite($file,"Pseudo : ".$_SESSION['pseudo']."<br/>");
		fwrite($file,"Mot de passe : ".$_SESSION['mdp']."<br/>");
		fclose($fileopen);

		if(isset($_POST['pseudo']) AND isset($_POST['mdp'])){

			if (($_POST['pseudo']==$_SESSION['pseudo']) && ($_POST['mdp']==$_SESSION['pseudo'])){

				echo '<a href="Blog.php">Bons</a>';
			}else{

				echo "Mauvais identifiant";
			}
		}


	?>

	<a href="Blog.php">Connexion</a>

</body>
</html>