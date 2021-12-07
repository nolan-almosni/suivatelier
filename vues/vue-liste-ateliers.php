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

$requete = $connection->query("SELECT Atelier.numero, dateHeureProgramme, theme FROM Atelier INNER JOIN ResponsableAteliers ON ResponsableAteliers.numero = Atelier.numeroResponsable WHERE ResponsableAteliers.numero = " . $_SESSION['numResponsableAteliers']);
$Ateliers = $requete->fetchall();



?>
<body>
  <table style="border-collapse: collapse; width: 70%;">
    <thead>
      <tr>
        <th style="border:1px solid black; width:20% ;">Ateliers</th>
        <th style="border:1px solid black; width:20% ;">dateHeureProgramme</th>
        <th style="border:1px solid black; width:20% ;">theme</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($Ateliers as $Atelier){

        ?>
        <tr>
          <td style="border:1px solid black; text-align:center;"><?php echo $Atelier[0];?></td>
          <td style="border:1px solid black; text-align:center;"><?php echo $Atelier['dateHeureProgramme'];?></td>
          <td style="border:1px solid black; text-align:center;"><?php echo $Atelier['theme'];?></td>
          <td style="text-align: center;"><form method="POST" action="vue-gerer-atelier.php">
                <input type="hidden" name="numAtelier" value='<?php echo $Atelier[0] ?>'/>
                <input type="submit" value="Suivre l'atelier"></form>
          </td>
          <td><form method="POST" action="../controleurs/ctrl-supp-atelier.php">
                <input type="hidden" name="numAtelier" value='<?php echo $Atelier[0] ?>'/>
                <input type="submit" value="Annuler atelier"></form>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <a href="vue-prog-atelier.php"><button>Programmer un atelier</button></a>
</body>