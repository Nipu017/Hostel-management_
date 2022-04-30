<?php
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "hostel_management";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
  die("Failed to connect");
}

if($_SERVER['REQUEST_METHOD']=="POST")
{
      $hname = $_REQUEST['hname'];
      $fname= $_REQUEST['fname'];
      $dob = $_REQUEST['dob'];
      $address= $_REQUEST['address'];
      $mobile = $_REQUEST['mobile'];
      $email= $_REQUEST['email'];      
 
      if(!empty($hname)&&!empty($fname)&&!empty($dob)&&!empty($address)&&!empty($mobile)&&!empty($email))
      {
  
        $query = "insert into registration(hname,fname,dob,address,moblie,email) values ('$hname','$fname','$dob','$address','$mobile','$email')";

        mysqli_query($con, $query);
        echo '<script>alert("Thank you for registering, we will contact you soon")</script>';

        die;

      }
      else 
      {
        echo '<script>alert("Please enter valid information!")</script>';
      }
     
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Hostel Management</title>
    <link rel="stylesheet" href="regi.css" />
    <link rel="icon" href="favicon.png" type="image/x-icon"/>

  </head>

  <body>
    <div class="div1">
      <div class="div3">

      <h1>HOSTEL MANAGEMENT</h1>
      <nav>
        <a href="login.php">Home</a>
        <a href="login.php">Login</a>
        <a href="#" id="contact">About Us</a>
        <a href="contact.php" id="">Contact</a>
      </nav>
    </div>
      <div class="div2">
        <h2>REGISTRATION FORM</h2>
        <form class="" action="" method="post">
          <label for="name">Name:</label>
          <input type="text" name="hname" value="" required /><br /><br />
          <label for="fname">Father's name</label>
          <input type="text" name="fname" value="" required /><br /><br />
          <label for="dob">Date of birth:</label>
          <input type="date" name="dob" value="" required /><br /><br />
          <label for="address">Address:</label>
          <textarea name="address" rows="8" cols="50" required></textarea
          ><br /><br />
          <label for="mobile">Mobile:</label>
          <input type="number" name="mobile" value="" required /><br /><br />
          <label for="email">Email:</label>
          <input type="email" name="email" value="" required /><br><br>
          <button class="button">SUBMIT</button>
          <div class="popup1" id="popup1">
            <div class="popup2">
              <div class="close">+</div>
              <h2>About us</h2>
              <p class="about">

                This is a hostel management project created by a team of four developers.
                In the team two of them worked on back-end i.e. php and mysql and two of them
                worked on front-end i.e. html, css, js and bootstrap.
              </p>
              </form>
            </div>
          </div>
      </div>
    </div>
   <script>
     document.getElementById('contact').addEventListener("click", function() {
	document.querySelector('.popup1').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.popup1').style.display = "none";
});
   </script>
  </body>
</html>