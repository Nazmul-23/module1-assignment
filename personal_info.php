<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal_info</title>
    <style>
        <?php include"personal_info.css" ?>
    </style>
</head>

<body>

  <div class="container">
    <?php

    $name = "Nazmul Hossain";
    $age = 22;
    $country = "Bangladesh";
    $study = "International islamic university chittagong(iiuc)";
    $dept = "computer and communication engineering(cce)";
    echo " My name is {$name}.<br>";
    echo PHP_EOL;
    echo " I am {$age} years old.<br>";
    echo PHP_EOL;
    echo " {$country} is my motherland.<br>";

    echo PHP_EOL;
    echo "Now i continue my study at {$study} in {$dept} dept. ";

    ?>


  </div>
</body>

</html>

