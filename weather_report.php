<!DOCTYPE html>
<html>

<head>
    <title>Weather Report</title>
    <style>
        <?php include "weather_report.css" ?>
    </style>
</head>

<body>
    <div class="container">
    <h2>Weather Report</h2><br><br>
    <form method="POST" action="">
        <label for="temperature">Enter temperature:</label>
        <input type="number" name="temperature" required><br><br>
        <button type="submit">check</button>


    </form>

    <div id="result">
    <?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $number = $_POST["temperature"];
        $temperature = $_POST["temperature"];


        if ($temperature <= 0) {
            echo "It's freezing!";
        } elseif ($temperature > 0 && $temperature <= 20) {
            echo "It's cool.";
        } elseif ($temperature > 20) {
            echo "It's warm.";
        }
    }
    ?>
    </div>
    </div>
</body>

</html>