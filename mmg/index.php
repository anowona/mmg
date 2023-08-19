<?php
$title = "MAIN";
$metaKeywords = "";
$metaDescription = "";
session_start();
?>

<?php include("head.php"); ?>
<!--...........................body...................................-->

<script>
    function fetch() {
        var min = document.getElementById("mini").value;
        document.getElementById("maxi").min = min;
        document.getElementById("maxi1").innerHTML = min;
        document.getElementById("min").innerHTML = min;

        var max = document.getElementById("maxi").value;
        document.getElementById("mini").max = max;
        document.getElementById("mini2").innerHTML = max;
        document.getElementById("max").innerHTML = max;
    }
</script>


<form method="POST" class="float" id="yourOp" action="moment.php">

    <legend>
        <h1> Mental Maths Generator</h1>
    </legend>


    <label>Set the range of numbers you want.</label>
    <br>
    Min selected: <span id="min" class="orange">0</span>
    <br>
    <span id="mini1">0</span>
    <input type="range" id="mini" name="mini" min="0" max="" onchange=fetch() value="0">
    <span id="mini2">100</span>
    <br>
    Max selected: <span id="max" class="orange">100</span>
    <br>
    <span id="maxi1">0</span>
    <input type="range" id="maxi" name="maxi" min="" max="100" onchange=fetch() value="100">
    <span id="maxi2">100</span>
    <br><br>

    <label>What operators would you want ?</label>
    <br>
    <input type="checkbox" id="plus" name="operator[]" value="plus" checked>
    <label for="plus"> + </label><br>
    <input type="checkbox" id="moins" name="operator[]" value="moins" checked>
    <label for="moins"> - </label><br>
    <input type="checkbox" id="fois" name="operator[]" value="fois" checked>
    <label for="fois"> * </label><br><br>

    <label>How many operators would you want ?</label>
    <br>
    <select name="answerName" id="answerId">
        <?php
        for ($val = 1; $val <= 10; $val++) {
            echo "<option value='$val'>$val</option>";
        }
        ?>
    </select>
    <br>
    <br>

    <input type="submit" value="GENERER" name="answer" class="gener" />
</form>


<!--.........................../body...................................-->
<?php include("footer.php"); ?>