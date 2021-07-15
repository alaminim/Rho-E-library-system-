<?php
include("con.php";
session_start();
$name=$_SESSION["sname"];
$email=$_SESSION["semail"];
$gender=$_SESSION["sgendef"];
$namecap=ucwords($name;
?>

<?php
$data=mysqli_query($conn,"SELECT * FROM 'book'");
while($row=mysqli_fetch_array($data))
{
if($row["dept"]=="cse")
{
echo"<tr>"
$bookid_cse=NULL;
$bookid_cse=$row["b_id"];
$lg1="<a href='Available_books.php?id=$bookid_cse'>"
echo"<td>"; echo $row["b_id"]; echo "</td>"
echo"<td>"; echo $lg1; echo $row["booksname"]; echo "</a>; echo "</td>"
echo"<td>"; echo $row["athrname"]; echo "</td>"
echo"<td>"; echo $row["available_copy"]; echo "</td>"
echo"<td>"; echo $row["filename"]; echo "</td>"
echo "</tr>";
$bookid_cse=NULL;
}
}
?>

<?php
$data=mysqli_query($conn,"SELECT * FROM 'book'");
while($row=mysqli_fetch_array($data))
{
if($row["dept"]=="tt")
{
echo"<tr>"
$bookid_tt=NULL;
$bookid_tt=$row["b_id"];
$lg2="<a href='Available_books.php?id=$bookid_cse'>"
echo"<td>"; echo $row["b_id"]; echo "</td>"
echo"<td>"; echo $lg2; echo $row["booksname"]; echo "</a>; echo "</td>"
echo"<td>"; echo $row["athrname"]; echo "</td>"
echo"<td>"; echo $row["available_copy"]; echo "</td>"
echo"<td>"; echo $row["filename"]; echo "</td>"
echo "</tr>";
$bookid_tt=NULL;
}
}
?>


<?php
$data=mysqli_query($conn,"SELECT * FROM 'book'");
while($row=mysqli_fetch_array($data))
{
if($row["dept"]=="me")
{
echo"<tr>"
$bookid_me=NULL;
$bookid_me=$row["b_id"];
$lg3="<a href='Available_books.php?id=$bookid_cse'>"
echo"<td>"; echo $row["b_id"]; echo "</td>"
echo"<td>"; echo $lg3; echo $row["booksname"]; echo "</a>; echo "</td>"
echo"<td>"; echo $row["athrname"]; echo "</td>"
echo"<td>"; echo $row["available_copy"]; echo "</td>"
echo"<td>"; echo $row["filename"]; echo "</td>"
echo "</tr>";
$bookid_me=NULL;
}
}
?>


<?php
$data=mysqli_query($conn,"SELECT * FROM 'book'");
while($row=mysqli_fetch_array($data))
{
if($row["dept"]=="ee")
{
echo"<tr>"
$bookid_ee=NULL;
$bookid_ee=$row["b_id"];
$lg4="<a href='Available_books.php?id=$bookid_cse'>"
echo"<td>"; echo $row["b_id"]; echo "</td>"
echo"<td>"; echo $lg4; echo $row["booksname"]; echo "</a>; echo "</td>"
echo"<td>"; echo $row["athrname"]; echo "</td>"
echo"<td>"; echo $row["available_copy"]; echo "</td>"
echo"<td>"; echo $row["filename"]; echo "</td>"
echo "</tr>";
$bookid_ee=NULL;
}
}
?>