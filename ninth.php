<?php
$user='root';
$password='';
$db='milk';
$connect=new mysqli('localhost',$user,$password,$db)or die("unable to connect");
$query="SELECT * FROM `milk_rate` ";
$result=mysqli_query($connect,$query);
echo "<b>Fat</b>. <b>Price</b><br>";
while($row=mysqli_fetch_array($result))
{

echo "$row[0] - $row[1] <br>";
}
mysqli_free_result($result);
mysqli_close($connect);
?>