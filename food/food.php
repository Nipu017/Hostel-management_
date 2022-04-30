<?php 
session_start();

	include("connection.php");
	include("functions.php");


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="food.css">
    <title>Student Page</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="student2.php" id="ab">Hostel</a>
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

        <h1>
          Food Menu
        </h1>
        <table border="5" cellspacing="0" aling="center" class="table-wrap">
          <tr>
            <td aling="center" height="50" width="100"><br>
            <b>Sl.no</b><br>
          </td>
          <td aling="center" height="50" width="100"><br>
          <b>Particulars</b>
        </td>
        <td aling="center" height="50" width="100"><br>
        <b>Timing</b>
      </td>
      <td aling="center" height="50" width="100"><br>
      <b>Monday</b>
    </td>
    <td aling="center" height="50" width="100"><br>
    <b>Tuesday</b>
  </td>
  <td aling="center" height="50" width="100"><br>
  <b>Wednesday</b>
</td>
<td aling="center" height="50" width="100"><br>
<b>Thursday</b>
</td>
<td aling="center" height="50" width="100"><br>
<b>Friday</b>
</td>
<td aling="center" height="50" width="100"><br>
<b>Saturday</b>
</td>
<td aling="center" height="50" width="100"><br>
<b>Sunday</b>
</td>
</tr>
<tr>
  <td aling="center" height="50">
    <b>1</b></td>
    <td aling="center" height="50"><b>BED TEA</b></td>
    <td aling="center" height="50"><b>6:30 to 7:30 am</b></td>
    <td aling="center" height="50">Tea/coffee</td>
    <td aling="center" height="50">Tea/coffee</td>
    <td aling="center" height="50">Tea/coffee</td>
    <td aling="center" height="50">Tea/coffee</td>
    <td aling="center" height="50">Tea/coffee</td>
    <td aling="center" height="50">Tea/coffee</td>
    <td aling="center" height="50">Tea/coffee</td>
  </tr>
  <tr>
    <td aling="center" height="50">
      <b>2</b></td>
      <td aling="center" height="50"><b>BREAKFAST</b></td>
      <td aling="center" height="50"><b>8:00 to 10:00am</b></td>
      <td aling="center" height="50">Tea/Coffee,Cornflakes with milk,Bread with Butter/Jam,Bedami Puri with Sabji,Boiled egg</td>
      <td aling="center" height="50">Tea/Coffee,Cornflakes with milk,Bread with Butter/Jam,Bedami Puri with Sabji,Boiled egg</td>
      <td aling="center" height="50">Tea/Coffee,Cornflakes with milk,Bread with Butter/Jam,Bedami Puri with Sabji,Boiled egg</td>
      <td aling="center" height="50">Tea/Coffee,Cornflakes with milk,Bread with Butter/Jam,Bedami Puri with Sabji,Boiled egg</td>
      <td aling="center" height="50">Tea/Coffee,Cornflakes with milk,Bread with Butter/Jam,Bedami Puri with Sabji,Boiled egg</td>
      <td aling="center" height="50">Tea/Coffee,Cornflakes with milk,Bread with Butter/Jam,Bedami Puri with Sabji,Boiled egg</td>
      <td aling="center" height="50">Tea/Coffee,Cornflakes with milk,Bread with Butter/Jam,Bedami Puri with Sabji,Boiled egg</td>
    </tr>
    <tr>
      <td aling="center" height="50">
        <b>3</b></td>
        <td aling="center" height="50"><b>LUNCH</b></td>
        <td aling="center" height="50"><b>12:30 to 2:30pm</b></td>
        <td aling="center" height="50">Seasonal dry veg<br>Kathi special<br>Plain rice<br>Tawa roti<br>Salad/Achar</td>
        <td aling="center" height="50">Seasonal dry veg<br>Dal tarka<br>Plain rice<br>Tawa roti<br>Salad/Achar</td>
        <td aling="center" height="50">Seasonal dry veg<br>Rajmah<br>Plain rice<br>Tawa roti<br>Salad/Achar</td>
        <td aling="center" height="50">Seasonal dry veg<br>Dal tarka<br>Plain rice<br>Tawa roti<br>Salad/Achar</td>
<td aling="center" height="50">Seasonal dry veg<br>Dal/Chholey<br>Plain rice<br>Tawa roti<br>Salad/Achar</td>
<td aling="center" height="50"><b>One Paneer Veg</b><br>Seasonal dry veg<br>Kathi special<br>Plain rice<br>Tawa roti<br>Salad/Achar</td>
<td aling="center" height="50">Seasonal dry veg<br>Dal Makhini<br>Plain rice<br>Tawa roti<br>Salad/Achar</td>
</tr>
<tr>
  <td aling="center" height="50">
    <b>4</b></td>
    <td aling="center" height="50"><b>EVENING TEA</b></td>
    <td aling="center" height="50"><b>4:30 to 7:00 pm</b></td>
    <td aling="center" height="50">Tea/coffee<br>& A-la-Carte Menu</td>
    <td aling="center" height="50">Tea/coffee<br>& A-la-Carte Menu</td>
    <td aling="center" height="50">Tea/coffee<br>& A-la-Carte Menu</td>
    <td aling="center" height="50">Tea/coffee<br>& A-la-Carte Menu</td>
    <td aling="center" height="50">Tea/coffee<br>& A-la-Carte Menu</td>
    <td aling="center" height="50">Tea/coffee<br>& A-la-Carte Menu</td>
    <td aling="center" height="50">Tea/coffee<br>& A-la-Carte Menu</td>
  </tr>
  <tr>
    <td aling="center" height="50">
      <b>5</b></td>
      <td aling="center" height="50"><b>DINNER</b></td>
      <td aling="center" height="50"><b>8:00 to 10:30pm</b></td>
      <td aling="center" height="50">Seasonal dry veg<br>Dal Tadka<br>Plain rice<br>Tawa roti<br>Salad/Achar</td>
      <td aling="center" height="50">Seasonal dry veg<br>Dal Arhar<br>Plain rice<br>Tawa roti<br>Salad/Achar<br><b>Sweet:Spl kheer/Ice cream</b></td>
      <td aling="center" height="50">Seasonal dry veg<br>Karthi Special<br>Plain rice<br>Tawa roti<br>Salad/Achar</td>
      <td aling="center" height="50">Seasonal dry veg<br>Rajmah<br>Plain rice<br>Tawa roti<br>Salad/Achar<br><b>Sweet:Halwa/Ice cream</b></td>
      <td aling="center" height="50">Seasonal dry veg<br>Dal Tadka<br>Plain rice<br>Tawa roti<br>Salad/Achar</td>
      <td aling="center" height="50">Seasonal dry veg<br>Dal Makhni<br>Plain rice<br>Tawa roti<br>Salad/Achar<br><b>Sweet:Spl kheer/Ice cream</b></td>
      <td aling="center" height="50"><b>One Paneer Veg</b><br>Seasonal dry veg<br>Dal Tadka<br>Plain rice<br>Tawa roti<br>Salad/Achar</td>
    </tr></table>
    
  </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
