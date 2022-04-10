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
          $bookname=$_POST['search'];
          
          
          $query="select * from uploads where bookname='$bookname'";
          $result=mysqli_query($conn,$query);
          $count=mysqli_num_rows($result);

          if($count>0)
          {
            echo"Book Available !";
          }
          else
          {
            echo "Book not Available :(";
          }

?>