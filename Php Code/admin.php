<?php
include("con.php");
?>


//html and css code for admin dashboard//


<table>
<?php
$data=mysqli_query("$con,"SELECT  * FROM 'book'");
while($row=mysqli_fetch_array($data))
{
echo"<tr>";
echo"<td">; echo $row["b_id"]; echo"</td>";
echo"<td">; echo $row["booksname"]; echo"</td>";
echo"<td">; echo $row["athrname"]; echo"</td>";
echo"<td">; echo $row["copies"]; echo"</td>";
echo"<td">; echo $row["available_copy"]; echo"</td>";
echo"<td">; echo $row["dept"]; echo"</td>";
echo"<td">; echo $row["file_name]; echo"</td>";
echo"</tr>";
?>