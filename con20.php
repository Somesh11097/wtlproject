<?php
    $server="localhost";
    $user="root";
    $pass="";
    $db="signupusers";
    $conn=mysqli_connect("$server","$user","$pass","$db");
     if(!$conn)
    {
        die("Connection failed".mysqli_connect.error()."<br/>");
    }
    else
    {
        echo "Success"."<br/>";
    }
    
    /*$sql="CREATE DATABASE DB1";
    if(mysqli_query($conn,$sql))
    {
        echo "Database created"."<br/>";
    }
    else
    {
        echo "Database creation failed"."<br/>";
    }*/
   
    $sql="CREATE TABLE Student(name VARCHAR(20),passw INT(15),branch VARCHAR(5),prn VARCHAR(8))";
    if(mysqli_query($conn,$sql))
    {
        echo "Table Created";
    }
    else
    {
        echo "Table creation failed";
    }
    
 
?>