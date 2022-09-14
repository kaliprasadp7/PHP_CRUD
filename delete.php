<?php

    //establishing connection
    $con = new mysqli("localhost","root","root@123","studentdata");
    if(!$con)
    
    die("connection to this database is failed due to".mysqli_connect_error());
    
    $sln=$_GET['delete'];
    
    //inserting the data into the table(query for inserting data)
    $sql="DELETE FROM `studenttable` WHERE sln= $sln";
    //echo $sln;

    mysqli_query($con,$sql);

    //for redirect the page after delete into view.php
    header('location:view.php');

?>