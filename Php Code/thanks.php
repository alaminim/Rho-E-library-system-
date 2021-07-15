<?php
Session_Start();
$namee=$_SESSION['sname'];
$email=$_SESSION['semail'];
?>
<?php
header('Resfresh: 6; URL=index.php');
?>
<!Doctype html>
<html>
<head></head>
<body>
<div style=background:rgba(100,84,10,0.3); border:2px dotted green; margin:5% 10%;">
<center>
<h1>THANKS FOR YOUR EFFORT<?php echo $namee;?></h1>
<h1>YOUR EMAIL ID <u><?php echo $email;?></u>IS YOUR LOGIN ID</h1>
<h4>YOU CAN NOW LOG IN WITH YOUR ID AND PASSWORD AND THE PAGE IS REDIRECT TO THE LOGIN PAGE</h4>
</center>
 </div>
 <?php Session_destroy();?>
 </body>
 </html>