<?php
$user='root';
$password='';
$db='milk';
$connect=new mysqli('localhost',$user,$password,$db)or die("unable to connect");
$query="SELECT * FROM `sellers` WHERE Cattle_Type='buffalo'";
$result=mysqli_query($connect,$query);
echo "<b>AdhaarNumer</b>. <b>Acc</b>. <b>Fname</b>. <b>Lname</b><br>";
while($row=mysqli_fetch_array($result))
{
echo "$row[0] - $row[1] - $row[3] - $row[4] <br>";
}
mysqli_free_result($result);
mysqli_close($connect);
?>