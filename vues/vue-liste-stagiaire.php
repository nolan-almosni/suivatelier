<!DOCTYPE html>
<head>
  <title>page d'accueil</title>
  <meta charset="utf-8">
  <style type="text/CSS"></style>
</head>

<?php

session_start();

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

$requete = $connection->query("SELECT civilité, nom, prenom, dateNaissance, adresseMail, numeroTelephone FROM Client as C INNER JOIN Participation as P ON C.numero = P.numeroClient WHERE numeroAtelier = " . $_POST['numAtelier']);
$Stagiaires = $requete->fetchall();

?>

<body>
  <table style="border-collapse: collapse; width: 70%;">
    <thead>
      <tr>
        <th style="border:1px solid black; width:15% ;">civilité</th>
        <th style="border:1px solid black; width:15% ;">nom</th>
        <th style="border:1px solid black; width:15% ;">prenom</th>
        <th style="border:1px solid black; width:15% ;">date de naissance</th>
        <th style="border:1px solid black; width:20% ;">adresse mail</th>
        <th style="border:1px solid black; width:20% ;">numero de téléphone</th>
        <th><form method="POST" action="vue-gerer-atelier.php">
                <input type="hidden" name="numAtelier" value='<?php echo $_POST['numAtelier'] ?>'/>
                <input type="submit" value="suivre l'atelier"></form></a></th>
        <th><a href="vue-liste-ateliers.php"><button style="width: 120%">liste des ateliers</button></a></th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($Stagiaires as $Stagiaire){
        ?>
        <tr>
          <td style="border:1px solid black; text-align:center;"><?php echo $Stagiaire['civilité'];?></td>
          <td style="border:1px solid black; text-align:center;"><?php echo $Stagiaire['nom'];?></td>
          <td style="border:1px solid black; text-align:center;"><?php echo $Stagiaire['prenom'];?></td>
          <td style="border:1px solid black; text-align:center;"><?php echo $Stagiaire['dateNaissance'];?></td>
          <td style="border:1px solid black; text-align:center;"><?php echo $Stagiaire['adresseMail'];?></td>
          <td style="border:1px solid black; text-align:center;"><?php echo $Stagiaire['numeroTelephone'];?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>