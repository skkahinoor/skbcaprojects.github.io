<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Exam Software</title>
</head>
<body>
    <!-- Globar Part -->
    <div class="global">
        <h1>Exam Software</h1>
        <!-- Exam Info part -->
        <div class="einfo">
            <p class="einfo">Time Length - 1 hr</p>
            <p class="einfo">Full Mark - 10</p>
        </div>
        <br>
        <!-- Question Section Part -->
        <div class="questions">
            <h2>All questions</h2>
           <br><br>
           <form method="post">

               <p>1. What is C in BCA Course ?</p>
               <input type="radio" name="ans1" value="1" id="radioopt"> Programming Language
               <input type="radio" name="ans1" value="2" id="radioopt"> Alphabet
               <input type="radio" name="ans1" value="3" id="radioopt"> Coding
   <br><br>
                <p>2. What is SQL ?</p>
               <input type="radio" name="ans2" value="1" id="radioopt"> Key
               <input type="radio" name="ans2" value="2" id="radioopt"> Database
               <input type="radio" name="ans2" value="3" id="radioopt"> Query Language
   <br><br>
               <p>3. Javascript Vaiable Starts From ?</p>
               <input type="radio" name="ans3" value="1" id="radioopt"> var
               <input type="radio" name="ans3" value="2" id="radioopt"> car
               <input type="radio" name="ans3" value="3" id="radioopt"> char
   <br><br>
               <p>4. What is the Frame Work of Php ?</p>
               <input type="radio" name="ans4" value="1" id="radioopt"> Javascript
               <input type="radio" name="ans4" value="2" id="radioopt"> WordPress
               <input type="radio" name="ans4" value="3" id="radioopt"> React.js
   <br><br>
               <p>5. Which is the popular Library of Css ?</p>
               <input type="radio" name="ans5" value="1" id="radioopt"> Mongo db
               <input type="radio" name="ans5" value="2" id="radioopt"> Angular js
               <input type="radio" name="ans5" value="3" id="radioopt"> Bootstrap
   <br><br><br>
   <center><input type="submit" name="submit" value="Submit" id="sbtn"></center>
           </form>
        </div>
    </div>
    <center><button type="submit" class="skhome"><a href="https://skbcaproject.000webhostapp.com/">Go To Home</a></button>
</center>
<!-- Backend Part Start-->
    <?php
    $fullmark = 5;
    $temp = 0;

    if(isset($_POST['submit'])) {    
// variables
    // $sk1 = $_POST['ans1'];
    // $sk2 = $_POST['ans2'];
    // $sk3 = $_POST['ans3'];
    // $sk4 = $_POST['ans4'];
    // $sk5 = $_POST['ans5'];


    if($_POST['ans1'] =='' || $_POST['ans2'] == '' || $_POST['ans3'] == '' || $_POST['ans4'] == '' || $_POST['ans5'] == '') {
        echo "Please Complete all the Answer first!";
    }
    else {

         $sk1 = $_POST['ans1'];
    $sk2 = $_POST['ans2'];
    $sk3 = $_POST['ans3'];
    $sk4 = $_POST['ans4'];
    $sk5 = $_POST['ans5'];

        if($sk1 == 1) {
            $temp++;
        }
        if($sk2 == 3) {
            $temp++;
        }
        if($sk3 == 1) {
            $temp++;
        }
        if($sk4 == 2) {
            $temp++;
        }
        if($sk5 == 3) {
            $temp++;
        }
    }

    // Display Result
    $avg = $temp*5/100;
    $per = $temp/$fullmark*100;
    echo "<center><br><h2>Exam Result</h2>
    You score total $temp out of $fullmark 
    <br>Avarage mark is $avg <br>Total percentage is $per</center>";

}
    ?>
    <!-- Backend Part End -->
</body>
</html>