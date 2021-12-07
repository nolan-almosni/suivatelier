<!DOCTYPE html>
<head>
  <title>page d'accueil</title>
  <meta charset="utf-8">
  <style type="text/CSS"></style>
</head>

<?php

session_start();

?>

<form method="POST" action="../controleurs/ctrl-prog-atelier.php">
  <label>date d'enregistrement : </label>
  <input type="date" name="dateEnregistrement"/>
  <br>
  <label>date et heure programmer : </label>
  <input type="text" name="dateHeureProgramme" placeholder=" AAAA-MM-JJ hh:mm:ss " />
  <br>
  <label>durée : </label>
  <input type="text" name="duree" placeholder="hh:mm:ss" />
  <br>
  <label>nombre de place : </label>
  <input type="number" name="nbPlace"/>
  <br>
  <label>thème : </label>
  <input type="text" name="theme"/>
  <br>
  <input type="submit" value="valider">
</form>