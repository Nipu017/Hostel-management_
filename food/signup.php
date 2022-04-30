<?php
session_start();

  include("connection.php");
  include("functions.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
      $user_name = $_POST['user_name'];
      $password = $_POST['password'];

      if(!empty($user_name)&&!empty($password))
      {
  
        $query = "insert into users(user_name,password) values ('$user_name','$password')";

        mysqli_query($con, $query);
        header("LOCATION: login.php");
        die;

      }
      else {
        echo '<script>alert("Please enter valid information!")</script>';
      }
}
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">

    <title>Signup Page</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" id="ab">Hostel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="admin.php" id="a">Home</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#" id="a"></a>
            </li>

          </ul>

        </div>
      </div>
    </nav>
    <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Create account</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="http://localhost/phpmyadmin/index.php?route=/sql&db=hostel_management&table=users&pos=0" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Student Details</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Log out</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSirU-UB7PusqM6KwbV4LwzikBSwdMUxbKcPw&usqp=CAU" alt="" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Home</a></li>
                        <li><a class="dropdown-item" href="http://localhost/phpmyadmin/index.php?route=/sql&db=hostel_management&table=users&pos=0">student Registration</a></li>
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mydiv">
          
          <h1>CREATE ACCOUNT</h1><br>
          <div class="div1">

            <div class="div2">
              <form method="post">
              <p>Username:</p>
              <input type="text" name="user_name" placeholder="Enter Username" class="input1">
              <p>Password:</p>
              <input type="Password" name="password" placeholder="Enter Password" class="input1"><br><br>
              <input type="Submit" name="" value="CREATE" class="button"> <br>
              
            </form>
            
          </div>
          </div>
        </div>
        </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>