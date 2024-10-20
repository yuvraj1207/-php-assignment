 <?php
 $conn = mysqli_connect("localhost","root","");
 if($conn){
     echo"<br> connected sucessfully";
 }
 else{
     echo"<br> connection failed";  
     exit();
 }
    $q1 = "CREATE DATABASE 22co75";
    $r1 = mysqli_query($conn,$q1);
    if($r1){
        echo"<br> create database 22co75";
    }
    else{
        echo"<br> failed to create";
    }
    mysqli_select_db($conn, "22co75");
    $q2 = "CREATE TABLE student(NAME VARCHAR(20), GENDER VARCHAR(8),COUNTRY VARCHAR(20),DOB VARCHAR(15))";
    $r2 = mysqli_query($conn,$q2);
        if($r2){
            echo"<br> table INFO created";
        }
        else{
            echo"<br> failed ";
        }
    mysqli_close($conn);
    ?>