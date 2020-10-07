<?php
require 'connection.php';
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['valider']))
{
	$matricule =  $_POST['matricule'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$dateNaissance = $_POST['dateNaissance'];
	$tel = $_POST['tel'];
	$sexe = $_POST['sexe'];
	$grade = $_POST['grade'];

	$query = "INSERT INTO DSC.Pompier VALUES "."('$matricule', '$nom', '$prenom', '$dateNaissance', '$tel', '$sexe', '$grade')";
	
	try
	{
		$db->exec($query);
		echo "Le pompier a bien été ajouté !";
	}
	catch(PDOException $e)
	{
        echo "Erreur : " . $e->getMessage();
    }
}

?>
