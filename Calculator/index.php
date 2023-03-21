<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    <form method="post">
        <label>Enter First Number</label>
        <input type="number" name="f" placeholder="Enter first number">
        <br>
        <label>Enter Second Number</label>
        <input type="number" name="s" placeholder="Enter second number">
        <br>
        <center><input type="submit" value="Calculate" name="submit"></center>
    </form><br><br>
    <center><button type="submit" class="skhome"><a href="https://skbcaproject.000webhostapp.com/">Go To Home</a></button></center>

<?php
if(isset($_POST['submit'])) {
    $f = $_POST['f'];
    $s = $_POST['s'];
    $add = $f+$s;
    $sub = $f-$s;
    $mul = $f*$s;
    $div = $f/$s;

    echo "<center><h2>Your Result</h2
    Addition of $f + $s = $add<br>
    Substraction of $f - $s = $sub<br>
    Multiplicaation of $f * $s = $mul<br>
    Division of $f / $s = $div
   </center> ";
}
?>

</body>
</html>