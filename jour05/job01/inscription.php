<?php


function connectPdo(){

	$servname = "localhost"; $dbname = "utilisateurs"; $user = "root"; $pass = "";

	try{
	$pdo = new PDO("mysql:host=$servname;dbname=$dbname", $user , $pass);
 	}
	catch(PDOException $e){
    	echo "Erreur : " . $e->getMessage();
    }

	return $pdo;
}

	if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["password"]))
	{
     /* if (!empty($db = connectPdo(); $sel = $db->prepare("select * from utilisateurs where prenom=? limit 1");$sel->execute($_POST["prenom"]);));*/
        $db = connectPdo();
		if(!empty($db->query("SELECT * FROM utilisateurs WHERE prenom = '".$_POST["prenom"]."'")->fetch())) //Si un ustilisateurs est dèjà enregistré
		{
			echo "er1";
		}elseif(!empty($db->query("SELECT * FROM utilisateurs WHERE nom= '".$_POST["nom"]."'")->fetch())) //Si un ustilisateurs est dèjà enregistré
		{
			echo "er2";
		}elseif(!empty($db->query("SELECT * FROM utilisateurs WHERE email= '".$_POST["email"]."'")->fetch())) //Si un ustilisateurs est dèjà enregistré
		{
			echo "er3";
		} else//Si c'est belle est bien un nouveaux utilisateurs
		{
			if ($db->query("INSERT INTO `utilisateurs`(`nom`, `prenom`, `email`, `password`) VALUES ('".$_POST["nom"]."', '".$_POST["prenom"]."', '".$_POST["email"]."', '".password_hash($_POST["password"], PASSWORD_BCRYPT)."')"))
			{
				echo "success";
			}
			else
			{
				echo "err";
			}
		}
	}
	else
	{
		echo "err";
	}
?>










?>

<!--<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body style="display: flex; justify-content: center;">


<h1>Inscription</h1>
<form style="display: flex; flex-direction: column; width: 20%; margin-top: 20%;">
    <label for="prenom">Prenom</label>
    <input type="text" id="prenom" name="prenom"/>


    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom"/>


    <label for="email">Email</label>
    <input type="email" id="email" name="email"/>

     <label for="password">Password</label>
     <input type="password" id="password" name="password"/>

    <label for="r_password">Confirmer password</label>
    <input type="password" id="r_password" name="r_password"/>

    <input type="submit" id="inscription" name="inscription" value="s'inscrire">
</form>

<a href="index.php">Index</a>





<script type="text/javascript" src="script.js"></script>
</body>
</html>-->

