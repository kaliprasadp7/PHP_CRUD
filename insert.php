<?php

 $insert=false;
 if(isset($_POST['firstname'])){
 //establishing connection
 $con = new mysqli("localhost","root","root@123","studentdata");
 if(!$con)
 {
   die("connection to this database is failed due to".mysqli_connect_error());
 }

  $firstname =  $_POST['firstname'];
  $lastname =  $_POST['lastname'];
  $fathername =  $_POST['fathername'];
  $address =  $_POST['address'];
  $phone =  $_POST['phone'];
  $email =  $_POST['email'];
 //form validation using php
  if(empty($firstname)){
    echo 'firstname not be empty';
    return;
  }
  if(empty($lastname)){
    echo 'lastname not be empty';
    return;
  }
  if(empty($fathername)){
    echo 'fathername not be empty';
    return;
  }
  if(empty($address)){
    echo 'address not be empty';
    return;
  }
  if(empty($phone)){
    echo 'phone no not be empty';
    return;
  }
  if(empty($email)){
    echo 'email not be empty';
    return;
  }


  //inserting the data into the table(query for inserting data)
  $sql="INSERT INTO `studentdata`.`studenttable`(`firstname`, `lastname`, `fathername`, `address`, `mobile`, `email`, `time`) VALUES ('$firstname', '$lastname', '$fathername', '$address', '$phone', '$email', current_timestamp());";
  //echo $sql;


 if($con->query($sql)==true)
 {
  $insert=true;
 } 
 else{
  echo "Error: $sql <br> $con->error";
 }

 $con->close();
 }

?>







<!doctype html>
<html lang="eng">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Registration form</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
          <a class="navbar-brand" href="view.php">Registration</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

       <br>
       <h1>Welcome to the Student Registration Page</h1>
       <?php
       if($insert==true)
          {
             echo "<h3 class='submitMsg'>Your details are submitted succesfully.</h3>";
          }
       ?>
       <br>
       <div class="frm" style="width: 800px; margin-left: 370px;" >
      <form method='POST'>
        <div class="row">
            <div class="col">First Name
              <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="firstname">
            </div>
            <div class="col">Last Name
              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lastname">
            </div>
          </div>
          <div class="col">Father Name
            <input type="text" class="form-control" placeholder="Father name" aria-label="Father name"  name="fathername">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
          </div>
          <div class="col-12">
            <label for="inputphone" class="form-label">Mobile</label>
            <input type="tel" class="form-control" id="inputAddress" placeholder="##########" maxlength="10" name="phone">
          </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    -->
  </body>
</html>