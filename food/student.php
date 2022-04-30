<?php 
session_start();

	include("connection.php");


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="student.css">
    <title>Student Page</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="student.php" id="ab">Hostel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="student2.php" id="a">Home</a>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="student.php">Rules and Regulations</a></li>
            <li><a class="dropdown-item" href="food.php">Mess Food</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="login.php">Log out</a></li>
          </ul>
        </li>
          </ul>

        
        </div>
      </div>
    </nav>
    <div class="div1">
      <div class="div2">

        <h1>Rules and Regulations </h1>
        <ul>
        <li>
          <p class="p1">Smoking, Alcohol & Narcotic consumption is strictly prohibited in and around the Hostel premises. Strict action will be taken against offenders.
            </p>
          </li>
          <li>
            <p id="p2">Strict adherence to the prescribed dress code is required. Decency in dressing & demeanor is a must.
              </p>
            </li>
            <li>
              <p id="p3">Loitering in the Hostel campus during the class hours will not be appreciated.
                </p>
              </li>
              <li>
                <p id="p4">The Management & Staff will not be responsible for personal belongings.</p>
              </li>
              <li>
                <p id="p5">Late comers will be penalized.</p>
              </li>
              <li>
                <p id="p6">Students must keep the Campus & Rooms clean. Defacing walls, equipment, furniture etc., is strictly prohibited.</p>
              </li>
              <li>
                <p id="p7">Birthday/Other Celebrations are strictly prohibited in Hostel.
                  </p>
                </li>
                <li>
                  <p id="p8">Students must turn off all the electrical equipments & lights before leaving their rooms.</p>
                </li>
                <li>
                  <p id="p9">Students are not allowed to use electric stoves, heaters etc in rooms except in designated places.</p>
                </li>
                <li>
                  <p id="p10">Students are not allowed to organize any group activities in their room.</p>
                </li>
                <li>
                  <p id="p11">Food will be served only in the designated Dining Hall(s) and only during the specified timings. Wasting food & water will not be encouraged.</p>
                </li>
                <li>
                  <p id="p12">All lights must be switched off before 11 pm in the rooms. Only study lamps are permitted.</p>
                </li>
                <li>
                  <p id="p13">Students are not allowed to use Mobile phones after 10 pm. Cell phones of those at fault will be confiscated.</p>
                </li>
                <li>
                  <p id="p14">Tipping of Wardens, Security Guards, Cleaning staff etc., is not permitted.</p>
                </li>
                <li>
      <p id="p15">Visitors are allowed only in AV Room between: 4:30 p.m. and 6:30 p.m. Visitors are not allowed beyond the visiting area. No outside Guest\Students will be allowed inside the hostel.</p>
    </li>
    <li>
      <p id="p16">Any complaints regarding electric equipment, plumbing etc., is required to be entered in the ‘Complaints Book’.</p>
    </li>
    <li>
      <p id="p17">Students should not enter rooms of other students without permission.</p>
    </li>
    <li>
      <p id="p18">Silence: Strict silence shall be observed in hostel from 11.00 pm to 5.30 am. Care should be taken at all times to ensure that music\loud talking is NOT audible outside the room.</p>
    </li>
    <li>
      <p id="p19">Any manner of festivities and noise making\celebrations will not be entertained, which may cause disturbance to other inmates in the hostel premises.</p>
    </li>
    <li>
      <p id="p20">Students during their stay in the hostel will be governed by the management rules.</p>
    </li>
  </ul>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
