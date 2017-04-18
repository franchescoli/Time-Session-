<?php

session_start();

$_SESSION["ultimoacceso"]= date("Y-n-j H:s:i");
header("Location:index.php"); //te amo m

?>