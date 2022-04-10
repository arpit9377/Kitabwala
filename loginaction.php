<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "kitabwala";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
          $email=$_POST['email'];
          $password=$_POST['password'];
          
          $query="select * from users_table where email='$email' and password='$password'";
          $result=mysqli_query($conn,$query);
          $count=mysqli_num_rows($result);

          if($count>0)
          {
          	header("Location: index.php");
          }
          else
          {
          	echo "Sign UP First";
          }

?>