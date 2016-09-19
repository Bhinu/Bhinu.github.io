<?php
if(isset($_POST["submit"])){

if(!empty($_POST['username']) && !empty($_POST['mobile'])) {
    $mobile=$_POST['mobile'];
	$email=$_POST['email'];
   	$first=$_POST['first'];
	$last=$_POST['last'];
	$username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['password1']; 
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());
	$db_select=mysqli_select_db($con,'campus') or die("cannot select DB");
    if($con)
{
 echo"<h1>connection established</h1>";
}
if($db_select)
{
 echo"<h1></br>database selected</h1>";
}
    if($password==$cpassword)
    {
	$query=mysqli_query($con,"SELECT * FROM database WHERE email='".$email."'");     
	$numrows=mysqli_num_rows($query);
 
	if($numrows==0)
	{
	$sql="INSERT INTO database(first,last,username,email,mobile,password) VALUES('$first','$last','$username','$email','$mobile','$password')";            /* storing value in login table */
	$result=mysqli_query($con,$sql);
	if($result)
       {
        echo "<h3>Account Successfully Created</h3>";
       session_start();
	   $_SESSION['sess_user']=$username;
	  // header("Location: home.html");
	   } 
    else 
    {
	 echo "<h3>Failure!</h3>";
	}
	}
    if($numrows!=0)
    {
      echo "<h3></br>email-id already registered</h3>";
    }    
   }
else
{
  echo "<h3></br>password don't match</h3>";
} 
}else {
	echo "<h3>All fields are required!</h3>";
}
}
?>

