<?php include("config1.php"); ?>
<?php
session_start();
session_destroy();
header('Location:accueil.php')


?>