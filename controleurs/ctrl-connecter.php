<?php

try {
  $dbName = 'sbateliers';
  $host = 'localhost';
  $utilisateur = 'sanayabio';
  $motDePasse = 'sb2021';
  $port='3306';
  $dns = 'mysql:host='.$host .';dbname='.$dbName.';port='.$port;
  $connection = new PDO( $dns, $utilisateur, $motDePasse );

} catch ( Exception $e ) {
	echo 'probleme de connexion' ;
	die(); 
}

	$identifiant = $_POST['identifiant'];
	$mdp = $_POST['mdp'];
		
	$identification = $connection->query("SELECT mdp FROM `ResponsableAteliers` WHERE nomConnexion = '".$identifiant."'");
	
	$mdpIdentification = $identification-> fetchall() ;

	


	if ($mdpIdentification[0]['mdp'] == $mdp and $mdpIdentification[0]['mdp'] != null){
		$numeroResponsableAteliers = $connection->query("SELECT numero FROM `ResponsableAteliers` WHERE nomConnexion = '". $identifiant."'");
		$numeroResponsableAteliers = $numeroResponsableAteliers->fetchall();
		
		session_start();
		$_SESSION['numResponsableAteliers'] = $numeroResponsableAteliers[0][0];
		$_SESSION['identifiant'] = $identifiant;

		header("Location: ../vues/vue-liste-ateliers.php");

	}else{
		session_start();
		session_destroy();
		header("Location: ../vues/vue-connexion.php");
	}
?>
