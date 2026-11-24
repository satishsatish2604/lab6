
<!DOCTYPE html>
<html>
<head>
    <title>Question 3</title>
</head>
<body>

<?php

function calculateArea($length, $width) {
    $area = $length * $width;
    return $area;
}

$length = 4;
$width = 2;

$result = calculateArea($length, $width);

echo "The area of a rectangle with a length of 4 and a width of 2 : " . $result;

?>

</body>
</html>
