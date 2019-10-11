<?php

 $account = filter_input(INPUT_POST, 'account');
$sal=filter_input(INPUT_POST, 'sal');

require 'connect.php';
$sql="Insert into salary(Acc_no,Salary)values($account,$sal)";
$result=mysqli_query($db,$sql) or die("error:$sql");
?>