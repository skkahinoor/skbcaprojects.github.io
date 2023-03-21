<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Selection</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <form method="post">
        <h1>Country selection</h1>
        <label>Select Your State: </label>
        <select name="state">
            <option value="Select">Select</option>
            <option value="Odisha">Odisha</option>
            <option value="California">California</option>
            <option value="Dubai">Dubai</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Get Country">
    </form>
    <button type="submit" class="skhome"><a href="https://skbcaproject.000webhostapp.com">Go To Home</a></button>

<?php
if(isset($_POST['submit'])) {
    $state = $_POST['state'];

    if($state == 'Select') {
        
    }
    if($state == 'Odisha') {
        echo "<br>
        <h2 style='color:dodgerblue;border:solid black 3px;padding:5px;width:50%;'>Country Result</h2>
        <br><b>
        $state is the state of India &hearts;</b>
        ";
    }
    if($state == 'California') {
         echo "<br>
        <h2 style='color:dodgerblue;border:solid black 3px;padding:5px;width:50%;'>Country Result</h2>
        <br><b>
        $state is the state of USA &hearts;</b>
        ";
    }
    if($state == 'Dubai') {
         echo "<br>
        <h2 style='color:dodgerblue;border:solid black 3px;padding:5px;width:50%;'>Country Result</h2>
        <br><b>
        $state is the state of UAE &hearts;</b>
        ";
    }
}
?>
</center>
</body>
</html>