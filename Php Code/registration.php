<?php
include("con.php");
Session_Start();
if($_SERVE['REQUEST_METHOD']=="POST" and isset($_POST['submit']))
{
$name=$_POST['name1'];
$roll=$_POST['roll'];
$gender=$_POST['gender'];
$dept=$_POST['department'];
$year=$_POST['year'];
$email=$_POST['email'];
$password=$_POST['password'];

$_SESSION['sname']=$name;
$_SESSION['semail']=$email;
if($name="" && $roll="" && $dept="" && $gender="" && $year="" && $email="" && $password="");
$insert="INSERT into Student_registration('name', 'roll', 'gender', 'dept', 'year', 'email', 'password') VALUES(".$name." , ".$roll." , ".$gender." , ".$dept." , ".$year." , ".$email." , ".$password.");
$data=mysqli_query($conn, $insert);
if($data)
{
header("Location:thanks.php");
}
else
{
echo"Error Occurs!! Please try again";
}
}
else{
echo"Field should not be empty...!!!";
}
}
?>