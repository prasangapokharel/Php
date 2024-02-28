<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AreA</title>
</head>
<body>
    
<form method="post" action="">

<input type="number" id="length" name="length" placeholder="Enter length"><br>
<input type="number" id="width" name="width" placeholder=" Enter width"><br>

<br><button name="calculate" type="Submit">Calculate Area</button>

</form>

<?php

if (isset($_POST['calculate'])){
    $length = $_POST['length'];
    $width = $_POST['width'];

    $area = $length * $width ;

    echo "Result <br>";
    echo "Length: $length <br>";
    echo " Width: $width <br>";
    echo "Area: $area <br>";
}
?>
</body>
</html>
