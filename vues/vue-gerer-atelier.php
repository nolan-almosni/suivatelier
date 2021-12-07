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

$requete = $connection->query("SELECT * FROM Atelier WHERE numero = " . $_POST['numAtelier']);
$Ateliers = $requete->fetchall();

?>
<body>
  <table style="border-collapse: collapse; width: 70%;">
    <thead>
      <tr>
        <th style="border:1px solid black; width:20% ;">numéro Ateliers</th>
        <th style="border:1px solid black; width:20% ;">date d'enregistrement</th>
        <th style="border:1px solid black; width:25% ;">date et heure programmée</th>
        <th style="border:1px solid black; width:10% ;">duree</th>
        <th style="border:1px solid black; width:10% ;">nbPlace</th>
        <th style="border:1px solid black; width:15% ;">theme</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($Ateliers as $Atelier){
        ?>
        <tr>
          <td style="border:1px solid black; text-align:center;"><?php echo $_POST['numAtelier'];?></td>
          <td style="border:1px solid black; text-align:center;"><?php echo $Atelier['dateEnregistrement'];?></td>
          <td style="border:1px solid black; text-align:center;"><?php echo $Atelier['dateHeureProgramme'];?></td>
          <td style="border:1px solid black; text-align:center;"><?php echo $Atelier['duree'];?></td>
          <td style="border:1px solid black; text-align:center;"><?php echo $Atelier['nbPlace'];?></td>
          <td style="border:1px solid black; text-align:center;"><?php echo $Atelier['theme'];?></td>
          <td><form method="POST" action="vue-liste-stagiaire.php">
                <input type="hidden" name="numAtelier" value='<?php echo $Atelier[0] ?>'/>
                <input type="submit" value="Liste des stagiaires"></form>
          </td>
          <td><a href="vue-liste-ateliers.php"><button style="width: 120%">liste des ateliers</button></a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
