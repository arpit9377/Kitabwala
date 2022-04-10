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
 
          $name=$_POST['name'];
          $bookname=$_POST['bookname'];
          $file=$_FILES['file'];

          $query="insert into uploads(name,bookname,file) values('$name','$bookname','$file')";
          $run=mysqli_query($conn,$query);
          if($run)
          {
            echo"form Submitted";
          }
          else
          {
            echo "NOt Submitted";
          }
 ?>   
          
 