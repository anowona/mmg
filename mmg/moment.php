<?php
$title = "preparation...";
$metaKeywords = "";
$metaDescription = "";
session_start();
?>

<?php include("head.php"); ?>
<!--...........................body...................................-->

<?php


$_SESSION["operator"] = $_POST["operator"];
$_SESSION["answerName"] = $_POST["answerName"];
$_SESSION["mini"] = $_POST["mini"];
$_SESSION["maxi"] = $_POST["maxi"];



include("insertion.php");



?>

<a href='page.php'>Commencer</a>

<!--.........................../body...................................-->
<?php include("footer.php"); ?>