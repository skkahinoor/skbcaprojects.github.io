

<html>
  <head>
    <title>Register Page</title>
     <link href="style.css" rel="stylesheet" type="text/css" />
    <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  </head>
  <body>
<div class="global">
  
    <div class="box">
  <h2>Registration Page</h2>
   <form method="post">
     <label>Course</label>
     <select name='course' id='course'>
       <option value="">Select</option>
       <option value="BCA">BCA</option>
       <option value="MCA">MCA</option>
       <option value="MBA">MBA</option>
     </select>
     <br>
     <label>Name</label>
     <input type="text" name="name" placeholder="Enter Name">
     <br>
     <label>Address</label>
     <input type="text" name="address" placeholder="Enter Address">
     <br>
     <label>Email</label>
     <input type="email" name="email" placeholder="Enter Email">
     <br>
     <label>Number</label>
     <input type="number" name="number" placeholder="Enter Number">
     <br>
     <input type="submit" name="register" value="Register">
     <br><br><br>
     <button type="submit" class="skhome"><a href="https://skbcaproject.000webhostapp.com/">Go To Home</a></button>
   </form>
 </div>
</div>

<?php
if(isset($_POST ['register'])){

  
echo "Course - ". $_POST['course'];
  echo "<br>Name - ". $_POST['name'];
  echo "<br>Address - ". $_POST['address'];
  echo "<br>Email - ". $_POST['email'];
  echo "<br>Number - ". $_POST['number'];
    
}

?>
    
  <script src="script.js"></script>
  </body>
</html>