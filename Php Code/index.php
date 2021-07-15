<?php
include("con.php");
$error="";
session_start();
if($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['submit']))
{
$count=0;
$data=mysqli_query($conn, select * from student_registration + *where emailid='$_POST[username]' && password='$_POST[password]');
$count=mysqli_num_rows($data);
$row=mysqli_fetch_array($data);
if($count==0)
{
$error="Invalid Username or password please check again and try again";
}
else{
if($row["type"]=="admin")
{
header("location:admin.php");
}
else{
$session["sname"]=$row["name"];
$session["semail"]=$row["emailid"];
$session["sgender"]=$row["gender"];
header("location:dashboard.php");
}
}
}