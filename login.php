<?php
if(isset($_POST["invia"]))
{
    if(array_key_exists($_REQUEST["username"],$_SESSION["lista"]))
        if($_SESSION["lista"][$_REQUEST["username"]]==$_SESSION["pwd"]) $_SESSION["login"]==true;
        else echo "<p>I dati inseriti non sono corretti</p>";
}