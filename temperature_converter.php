<!DOCTYPE html>
<html>

<head>
    <title>Temperature Converter</title>
    <style>
        <?php include "temperature_converter.css" ?>
    </style>
</head>

<body>

    <div class="container">
        <h2>Temperature Converter</h2>
        <form method="post" action="">
            <label for="temperature">Enter Temperature:</label>
            <input type="number" name="temperature" required><br><br>

            <label for="conversion">Select Conversion:</label>

            <select name="conversion" required>

                <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>

                <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
            </select><br><br>

            <button type="submit">Converter</button>
        </form>
        <div class="result">

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $temperature = $_POST["temperature"];

                $conversion = $_POST["conversion"];

                function celsiusToFahrenheit($celsius)
                {
                    return ($celsius * 9 / 5) + 32;
                }

                function fahrenheitToCelsius($fahrenheit)
                {
                    return ($fahrenheit - 32) * 5 / 9;
                }

                if ($conversion == "celsius_to_fahrenheit") {

                    $result = celsiusToFahrenheit($temperature);

                    echo "{$temperature} &deg;C is equal to {$result} &deg;F";
                } elseif ($conversion == "fahrenheit_to_celsius") {

                    $result = fahrenheitToCelsius($temperature);

                    echo "{$temperature} &deg;F is equal to {$result} &deg;C";
                }
            }
            ?>

        </div>
    </div>
</body>

</html>