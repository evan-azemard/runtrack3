<?php
	if(!isset($_SESSION["id"]))
	{
		if(isset($_POST["prenom"]) && isset($_POST["password"]))
		{

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

        $db = connectPdo();

            $useur = $db->query("SELECT * FROM utilisateurs WHERE nom = '".$_POST["nom"]."'")->fetch(PDO::FETCH_ASSOC); //Mes dans un tableaux le select

            if(password_verify($_POST["password"], $useur["password"]))
			{
				echo json_encode($useur);
			}
			else
			{
				echo "Mauvais password";
			}
		}
	}
?>












<?php

/*function connectPdo(){

	$servname = "localhost"; $dbname = "utilisateurs"; $user = "root"; $pass = "";

	try{
	$pdo = new PDO("mysql:host=$servname;dbname=$dbname", $user , $pass);
 	}
	catch(PDOException $e){
    	echo "Erreur : " . $e->getMessage();
    }

	return $pdo;
}
$db = connectPdo();

 $sel =$db->prepare("SELECT * FROM utilisateurs");
 $sel->execute();
 $res = $sel->fetchAll();
 foreach ($res as $row)*/

/* return json_encode($row)*/


//Il faut faire les vérification pour ce connecter en ajax sans rafraichissement de la pages du coup

  ?>
     <?php





    /*if( isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email'])  && isset($_POST['password']) && isset($_POST['c_password'])  && isset($_POST['envoyer']) ){

        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];


            $sel = $db->prepare("select * from utilisateurs where login=? limit 1");
            $sel->execute(array($prenom));
            $tab = $sel->fetch();

             foreach ($tab as $row) {

                 if ($row["nom"] !== $nom)
                 {
                     array_push($errors, "Le password n'est pas le bon");
                 }elseif ($row["email"] !== $email)
                 {
                     array_push($errors, "L'adresse email n'est pas la bonne");
                 }
        }

            $hpass = $tab["password"];

            if (!password_verify($this->password, $hpass)) {
                array_push($errors, 'Mot de passe invalide');
            }
            if (count($errors) < 1) {
                $_SESSION["user"] = $tab;
                $_SESSION["id"] = $tab["id"];
                $_SESSION["login"] = ucfirst(strtolower($tab["login"]));
            header("Location: index.php");
            } else {
                return $errors;
            }



    }*/

?>





<!--<script>

$(document).ready(function(){

    $("#submit").click(function{

        $.post(
            'connexion.php', // Un script PHP que l'on va créer juste après
            {
                nom : $("#nom").val(),
                password : $("#password").val()
                prenom : $("#prenom").val()
                email : $("#email").val()
                c_password : $("#c_password").val()
            },
            function(data){ // Cette fonction ne fait rien encore, nous la mettrons à jour plus tard
            },

            'text' // Nous souhaitons recevoir "Success" ou "Failed", donc on indique text !
         );

    });

});-->

<!--</script>-->





<!--<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body style="display: flex; justify-content: center;">
<h1>Connexion</h1>
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

    <input type="submit" name="envoyer" value="envoyer">
</form>



<a href="index.php">Index</a>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
-->
