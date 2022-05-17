<?php
$title = "CALCULS";
$metaKeywords = "";
$metaDescription = "";
session_start();
?>

<?php include("head.php"); ?>
<!--...........................body...................................-->
<a href="index.php" class="homer">RETURN TO HOME</a>
<?php
/*
$count = $bdd->query("SELECT COUNT(*)-1 FROM `pages`");
$count2 = $count->fetch();
$lenght = $count2["COUNT(*)-1"];
*/



if (isset($_POST["next"])) {
    include("insertion.php");
}

$reponse = $bdd->query("SELECT * FROM `pages` WHERE id BETWEEN 1 AND (SELECT COUNT(*) FROM `pages`)");
?>
<p><?php
    while ($calc = $reponse->fetch()) {
    ?>
        <?php echo $calc["nombre"] ?> <?php echo $calc["operation"] ?>
    <?php } ?></p>

<?php
$reponse2 = $bdd->query("SELECT * FROM `pages` WHERE id BETWEEN 1 AND (SELECT COUNT(*) FROM `pages`)");
?>
<script>
    var x = <?php
            while ($calc2 = $reponse2->fetch()) {
            ?>
    <?php echo $calc2["nombre"] ?> <?php echo $calc2["operation"] ?>
    <?php } ?>;

    function myMath() {
        document.getElementById("myMath").innerHTML = x;
    }
</script>

<h1>Your answer</h1>

<form method="POST" class="float">

    <input type="text" name="yourMath" id="yourMathId" autocomplete="off"><br>

    <input type="submit" value="REPONSE" name="yourMathSub" />
</form>

<?php
$erreur = "";
if (isset($_POST["yourMathSub"])) {
    $yourMath = $_POST["yourMath"];

    if (empty($erreur)) {
        echo "Your answer: " . $yourMath;
        echo "<p id='myMath' onclick='myMath()'>SEE ANSWER</p>";
    }
}
?>
<form method='POST' class='float next' id="next">
</form>
<input type='submit' value='NEXT' name='next' form="next" class="gener" />

<!--.........................../body...................................-->
<?php include("footer.php"); ?>