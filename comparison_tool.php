<!DOCTYPE html>
<html>

<head>
    <title>Comparison Tool</title>
    <style>
        <?php include "comparison_tool.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <h2>Comparison Tool</h2><br>

        
        <form method="post" action="">
            <label for="number1">Enter Number 1:</label>
            <input type="number" name="number1" required><br><br>

            <label for="number2">Enter Number 2:</label>
            <input type="number" name="number2" required><br><br>

            <button type="submit">compare </button>
        </form>

        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number1 = $_POST["number1"];
                $number2 = $_POST["number2"];


                $largerNumber = ($number1 > $number2) ? $number1 : $number2;

                echo "The larger number is: {$largerNumber}";
            }
            ?>
        </div>
    </div>

</body>

</html>