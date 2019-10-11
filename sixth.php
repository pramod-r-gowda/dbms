<?php
$cid=filter_input(INPUT_POST, 'id');
 $cname = filter_input(INPUT_POST, 'name');
$qty=filter_input(INPUT_POST, 'qty');
$add=filter_input(INPUT_POST, 'address');
$cont=filter_input(INPUT_POST, 'contact');
$cat=filter_input(INPUT_POST, 'cattle');
require 'connect.php';
$sql="Insert into Customers(Cust_id,Cust_name,Req_qty,Address,Cust_Phone,Cattle_Type)values($cid,'$cname',$qty,'$add','$cont','$cat')";
$result=mysqli_query($db,$sql) or die("error:$sql");
?>