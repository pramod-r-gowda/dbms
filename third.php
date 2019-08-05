<?php
$adhaar = filter_input(INPUT_POST, 'adhaar');
 $account = filter_input(INPUT_POST, 'account');
$cattle=filter_input(INPUT_POST, 'cattle');
$fname=filter_input(INPUT_POST, 'fname');
$lname=filter_input(INPUT_POST, 'lname');
$address=filter_input(INPUT_POST, 'address');
$contact=filter_input(INPUT_POST, 'cont');
 if (!empty($adhaar)){
 if (!empty($account)){ $host = "localhost"; 
$dbusername = "root"; $dbpassword = ""; $dbname = "milk"; 
 $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname); 
if (mysqli_connect_error()){ die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error()); } 
else{ $sql = "INSERT INTO Sellers (Adhaar_no, Acc_no,Cattle_Type,Fname,Lname,Address,Phone_no) values ('$adhaar',$account,'$cattle','$fname','$lname','$address','$contact')"; 
if ($conn->query($sql)){ echo "New record is inserted sucessfully"; } 
else{ echo "Error: ". $sql ." ". $conn->error; } 
$conn->close(); } } 
else{ echo "Password should not be empty"; die(); } }
 else{ echo "Username should not be empty"; die(); }
?>