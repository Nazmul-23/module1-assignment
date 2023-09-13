<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        <?php include "simple_calculator.css"  ?>
    </style>

</head>

<body>
    <div class="container">
        <h1>Basic Calculator</h1>
        <form method="POST" action="">
            <input type="number" name="num1" placeholder="Enter first number" required><br>
            <input type="number" name="num2" placeholder="Enter second number" required><br>

            <select name="operation">
                <option value="#">Choice an operation</option>

                <option value="add">Addition</option>
                <option value="substrct">Subtraction</option>
                <option value="multiply">Multiplecation</option>
                <option value="devide">Division</option>
                <option value="binary">Binary convertion</option>
                <option value="octal">octal convertion</option>
                <option value="hexadecimal">Hexadecimal convertion</option>
            </select><br>
            <button type="submit">Calculator</button>
        </form>
        <div id="result">

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operation = $_POST["operation"];
                switch ($operation) {
                    case "add":
                        $result = $num1 + $num2;
                        echo "Result: $result";
                        break;

                    case "substrct":
                        $result = $num1 - $num2;
                        echo "Result: $result";
                        break;

                    case "multiply":
                        $result = $num1 * $num2;
                        echo "Result: $result";
                        break;

                    case "devide":
                        if (num2 != 0) {
                            $result = $num1 / $num2;
                            echo "Result: $result";
                        } else {
                            echo "the number cannot devided";
                        }
                        break;



                    case "binary":

                        echo "Binary number:" . decbin($num1);
                        echo PHP_EOL;

                        break;

                    case "octal":

                        echo "Octal number:" . decoct($num1);
                        break;

                    case "hexadecimal":

                        echo "Hexadecimal number:" . dechex($num1);
                        break;
                }
            }


            ?>







        </div>
    </div>
</body>

</html>