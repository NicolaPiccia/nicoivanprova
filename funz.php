<!DOCTYPE html>
<html>
<body>
<h1 style="text-align: center;">Stampa dati form con elementi a valore multiplo con programma PHP</h1>
<p>Nome= <?= $_POST["nome"] ?></p>
<p>Password= <?= $_POST["pass"] ?></p>
<?php $somma=$_POST["num1"]+$_POST["num2"]; ?>
  <p>la somma vale: <?= $somma ?>
</body>
</html>
