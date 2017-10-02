   <?php
    $server="localhost";
    $user="root";
    $pass="";
    $db="DB1";
    $conn=mysqli_connect("$server","$user","$pass","$db");
   $a=$_POST["user"];
    $b=$_POST["password"];
    $c=$_POST["br"];
    $d=$_POST["pass"];
    $sql="INSERT INTO T1(name,passw,branch,prn) VALUES('$a','$b','$c','$d')";
    if(mysqli_query($conn,$sql))
    {
       echo "1 Value inserted into table";
    }
    
   ?>