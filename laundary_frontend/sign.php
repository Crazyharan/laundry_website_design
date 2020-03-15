
<?php

if(isset($_POST['signup']))	
{
    $email=$_POST['email'];
	$name=$_POST['uname'];
	$password=$_POST['pwd'];	
$con=mysqli_connect("localhost","root","","simple");
$insert="insert into simple(email,name,password) values('$email','$name','$password')";
 if(mysqli_query($con,$insert))
 {
	 echo" signup success";
 }
else
{
echo "sign up error";
}
}
else
{
	echo" submit error";
}
?>