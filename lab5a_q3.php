<!DOCTYPE html>
<html>
<head>
    <title>Calculate Rectangle Area</title>
</head>
<body>
    <?php
    function calculateArea($width, $length)
    {
        $area = $width * $length;
        return $area;
    }

    $width = 4;
    $length = 2;

    $result = calculateArea($width, $length);

    echo "<h3>The area of a rectangle with a width of $width and $length is $result</h3>";
    ?>
</body>
</html>
