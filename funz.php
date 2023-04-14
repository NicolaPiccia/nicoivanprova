<!DOCTYPE html>
<html>
<body>
<h1 style="text-align: center;">Stampa dati form con elementi a valore multiplo con programma PHP</h1>
<?php
session_start();
if(isset($_POST["invia"])) {
  if ($_REQUEST["nome"] != null && $_REQUEST["pass"] != null)
  {
      if(array_key_exists($_REQUEST["nome"],$_SESSION["lista"])) $_SESSION["lista"][$_REQUEST["nome"]]=$_REQUEST["pass"];
      else $_SESSION["lista"] += array($_REQUEST["nome"] => $_REQUEST["pass"]);
  }
  else echo "Nessuno dei due campi può essere nullo! <br>";
}
if(isset($_POST["stampa"]))
{
  foreach ($_SESSION["lista"] as $a => $b)
  {
    echo "nome utente: ".$a." password: ".$b."<br>";
  }
}
if(isset($_POST["reset"])) {
    $_SESSION["lista"] = array();
}
?>
</body>
</html>
