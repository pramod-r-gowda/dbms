<?php
$fat=filter_input(INPUT_POST, 'fat');
 $tpl = filter_input(INPUT_POST, 'price');

require 'connect.php';
$sql="Insert into Milk_Rate(Fat_in_Milk,Price_ltr)values($fat,$tpl)";
$result=mysqli_query($db,$sql) or die("error:$sql");
?>