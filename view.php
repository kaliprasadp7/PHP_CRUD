<?php
//establishing connection
$con = new mysqli("localhost","root","root@123","studentdata");
if(!$con)

 die("connection to this database is failed due to".mysqli_connect_error());
 $sln=$_GET['delete'];

 if($sln){
     //inserting the data into the table(query for inserting data)
$sql="DELETE FROM `studenttable` WHERE sln= $sln";
//echo $sln;

mysqli_query($con,$sql);

//for redirect the page after delete into view.php
header('location:view.php');

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

    <title>DISPLAY TABLE</title>
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
       <h1 class=" text-primary text-center">Display table data</h1>
       <br>
       <button type="button" class="btn btn-success btn-lg" ><a href="insert.php" class="text-white">New</a> </button>
       <br>


       <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr class="text-center bg-black text-white">
                    <th scope="col">sln</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
        <tbody>
        <?php
    
            

            //inserting the data into the table(query for inserting data)
            $sql="SELECT * FROM studenttable";
            $query=mysqli_query($con,$sql);
            while($res=mysqli_fetch_array($query)){
        ?>

            <thead>
                <tr class="text-center">
                    <td><?php echo $res['sln']; ?> </td>
                    <td><?php echo $res['firstname']; ?></td>
                    <td><?php echo $res['lastname']; ?></td>
                    <td><?php echo $res['fathername']; ?></td>
                    <td><?php echo $res['address']; ?></td>
                    <td><?php echo $res['mobile']; ?></td>
                    <td><?php echo $res['email']; ?></td>
                    <td> <button class="btn-danger btn"> <a href="view.php?delete=<?php echo $res['sln'];?>" class="text-white"> Delete </a></button></td>
                    <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['sln'];?>" class="text-white"> Update </a></button></td>
                </tr>
            </thead>
        <tbody>

        <?php
            }
        ?>
        </table>    

       





     <!-- Optional JavaScript; choose one of the two! -->

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>