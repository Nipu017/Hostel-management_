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
      $cname= $_REQUEST['cname'];
      $cp= $_REQUEST['cp'];
      $cemail= $_REQUEST['cemail'];
      
      if(!empty($cname)&&!empty($cp)&&!empty($cemail)){
        $query = "insert into contact(cname,mobile,email) values ('$cname','$cp','$cemail')";

        mysqli_query($con, $query);
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Thank you for reaching out to us, we will contact you soon.');
    window.location.href='registration.php';
    </script>");

        die;
      }
      else 
      {
        echo '<script>alert("Please enter valid information!")</script>';
      }
      
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css" />
</head>
<body>
<div class="popup1" id="popup1">
            <div class="popup2">
              <div class="close"><a href="registration.php" class="cross">+</a></div>
              <h2>Contact</h2>
              <form action="" method="post">
                <input type="text" placeholder="name" class="input1" name="cname">
                <input type="number" name="cp" placeholder="phone number" class="input1">
                <input type="email" name="cemail" placeholder="email" class="input1">
                <input type="submit" value="SUBMIT" class="button">          
                </a>
</body>
</html>