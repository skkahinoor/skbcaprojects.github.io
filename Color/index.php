
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <form method="post">
        <h1>Color Condition</h1>
        <p>Select Color</p>
        <select name='color' id='color'>
            <option value=''>Select</option>
        <option value='blue'>Blue</option>
        <option value='green'>Green</option>
        <option value='yellow'>yellow</option>
        </select>
        <input type='submit' name="save" value="Send">
        </form>
        <br><br>
         <button type="submit" class="skhome"><a href="https://skbcaproject.000webhostapp.com/">Go To Home</a></button>
    </center>

<?php
if(isset($_POST ['save']))
 {
    $color = $_POST['color'];
    if($color == "blue") {
        echo "<br><div style='border:solid black 2px;padding:10px;text-align:center;background:blue;'>BCA</div>";
    }
    elseif($color == "green") {
                echo "<br><div style='border:solid black 2px;padding:10px;text-align:center;background:green;'>MCA</div>";
    }
     elseif($color == "yellow") {
                echo "<br><div style='border:solid black 2px;padding:10px;text-align:center;background:linear-gradient(dodgerblue,lightgreen,yellow);color:white;'>MBA</div>";
    }

}


?>

</body>
</html>