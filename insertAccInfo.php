<?php
if(isset($_POST['submit'])){
    
}
$age = $_POST['age'];
$email = $_POST['email'];
$name = $_POST['name'];
$username = $_POST['username'];



$dbconnect=mysqli_connect('localhost','root','','ezwebdevdb');



$sql =mysqli_query($dbconnect, "insert into useraccinfo(age,email,name,username) values('$age','$email','$name', '$username')");




 if($sql){
     echo "Your data has successfully sent to the database";
     
 }
 else{
 echo "Error: Your data has not been sent to the database please contact support";}
?>
<html>
    <head>
        <title>Read Your Reviews!</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    </head>
    <body>
        <br>
        <br>
        <br>

                    

                 <p>Return back to the <a href="https://localhost/welcome.php" target="_blank" rel="noopener noreferrer">welcome page</a>.</p>
    

    </body>
</html>