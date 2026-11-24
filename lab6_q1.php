<!DOCTYPE html>
<html lang="en">
<head>
    <title>Question 1</title>
</head>
<body>

<?php
    $name = "SATISH KUMAR A/L SATHIAYAMORTHY";
    $matric = "CI250112";
    $course = "BACHELOR OF COMPUTER SCIENCE (INFORMATION SECURITY) WITH HONOURS";
    $year = "Year 2";
    $address = "IPOH,PERAK.";
?>

<table border="1">
    <tr>
        <td>Name</td>
        <td><?php echo "$name"; ?></td>
    </tr>

    <tr>
        <td>Matric Number</td>
        <td><?php echo "$matric"; ?></td>
    </tr>

    <tr>
        <td>Course</td>
        <td><?php echo "$course"; ?></td>
    </tr>

    <tr>
        <td>Year of Study</td>
        <td><?php echo "$year"; ?></td>
    </tr>

    <tr>
        <td>Address</td>
        <td><?php echo "$address"; ?></td>
    </tr>
</table>

</body>
</html>
