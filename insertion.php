<?php
$operator = $_SESSION["operator"];

$answerVar = $_SESSION["answerName"];
$mini = $_SESSION["mini"];
$maxi = $_SESSION["maxi"];
if (empty($erreur)) {

    $wipe = $bdd->prepare("TRUNCATE `4083211_mmg`.`pages`");
    $wipe->execute();

    switch ($check = $answerVar) {
        case $check < 10:
        case $check = 10:
            for ($occur = 1; $occur <= $answerVar; $occur++) {
                $nombr = rand($mini, $maxi);
                switch ($opera = $operator[array_rand($operator, 1)]) {
                    case $opera = "plus":
                        $opera = "+";
                        break;
                    case $opera = "moins":
                        $opera = "-";
                        break;
                    case $opera = "fois":
                        $opera = "*";
                        $nombr = rand(0, 10);
                        break;
                };
                $insert = $bdd->prepare("insert into pages (nombre, operation) values (?, ?)");
                $insert->execute(array($nombr, $opera));
            }
            $nombre = rand($mini, $maxi);
            $insert = $bdd->prepare("insert into pages (nombre) values (?)");
            $insert->execute(array($nombre));
            break;

        default:
            break;
    }
}
?>
<!-- closing php -->