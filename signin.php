<?php
    $server="localhost";
    $user="root";
    $pass="";
    $db="DB1";
    $conn=mysqli_connect("$server","$user","$pass","$db");

    $a=$_POST["user"];
    $b=$_POST["br"];
    $c=$_POST["pr"];

    session_start();
     $sql="SELECT * FROM T1 WHERE name='$a' AND branch='$b' AND prn='$c'";
if($result=mysqli_query($conn,$sql))
{   
    if(mysqli_num_rows($result)>0)
    {
        
        echo $row["name"]." ".$row["branch"]." ".$row["prn"]."<br>";
   	 
    
    }
            else
        {
            echo "no data found";
        }
}

    

?>