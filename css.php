<?php

$couleurs = array("violet", "blue", "green", "orange", "yellow", "red");
$couleur = $couleurs[array_rand($couleurs, 1)];

?>

<style>
    * {
        box-sizing: border-box;
        font-family: Poppins, sans-serif;
        /*
border: dotted 2px black;
*/
    }

    body {
        margin: 0;
        padding: 0;
        background-color: rgb(245, 245, 245);
    }

    #main {
        color: white;
        text-align: center;
        background-color: black;
        border: solid 5px <?php echo $couleur ?>;
        padding: 50px;
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 50%;
    }


    a {
        padding: 5px;
        background-color: <?php echo $couleur ?>;
        text-decoration: none;
        color: white;
    }

    .homer {
        position: absolute;
        transform: translate(-50%, 0%);
        left: 50%;
        top: -5px;
    }



    #myMath {
        padding: 10px;
        background-color: <?php echo $couleur ?>;
        color: black;
        border: solid 1px black;
        font-weight: bold;
    }

    .gener {
        position: absolute;
        transform: translate(-50%, -100%);
        left: 50%;
        top: 100%;
    }

    .orange {
        color: <?php echo $couleur ?> !important;
    }
</style>