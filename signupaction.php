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
         if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['branch']) && !empty($_POST['college']))
	{
          $name=$_POST['name'];
          $email=$_POST['email'];
          $password=$_POST['password'];
          $branch=$_POST['branch'];
          $college=$_POST['college'];

          $query="insert into users_table(name,email,password,branch,college) values('$name','$email','$password','$branch','$college')";
          $run=mysqli_query($conn,$query);
          if($run)
          {
          	echo"form Submitted";
          }
          else
          {
          	echo "NOt Submitted";
          }
    }
    else
    {
    	echo" Form not submitted as All feilds are mandatory";
    }      
	

?>