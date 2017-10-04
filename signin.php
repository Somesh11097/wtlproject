<?php
    $server="localhost";
    $user="root";
    $pass="";
    $db="signupusers";
    $conn=mysqli_connect("$server","$user","$pass","$db");

    $a=$_POST["user"];
    $b=$_POST["br"];
    $c=$_POST["pr"];
    session_start();
     $sql="SELECT * FROM Student WHERE name='$a' AND branch='$b' AND prn='$c'";
if($result=mysqli_query($conn,$sql))
{   
    if(mysqli_num_rows($result)>0)
    {   
        header("Location:postlogin.html");
        exit;
        
   	 }
            else
        {
           echo '<!DOCTYPE html>
                <html>
                <head">
                <script>
                alert("InCorrect Details\nTry Again");
                window.location = "login.html";
                </script>
                </head>
                <body>
                </body>
                </html>';
        }
}
 
?>