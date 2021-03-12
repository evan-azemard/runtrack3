
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
$db = connectPdo();

 $sel =$db->prepare("SELECT * FROM utilisateurs");
 $sel->execute();
 $res = $sel->fetchAll();
 foreach ($res as $row)

 echo json_encode($row)
 ?>