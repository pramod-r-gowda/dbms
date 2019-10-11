<html>
<head><h1> Enter new User</h1> </head>
<style>
h1{
background-color:rgba(0,0,0,.5);
color:green;
text-align:center;
background-image:url(cow.jpg);
}
.id {
padding:100px;
background:-webkit-linear-gradient(left,#5ffa,#3aff,white);
width:100%;
height:70%;
letter-spacing:1px;

margin:10px;
border-right:10px;
line-spacing:2px;
}
.id .ide input[type="text"]{
background:transparent;
padding:5px;

}
.id input[type="submit"]{
background:transparent;
border:none;
outline:none;
background:pink;
padding: 10px 50px;
border-radius:5px;
}
</style>
<body>
<div class="id">
<form action="third.php" method="post">
<div class="ide">
<pre>
Adhaar No    :<input type="text" name="adhaar" placeholder="12 digit Number"><br><br>
Account No:   <input type="text" name="account" ><br><br>
Cattle Type:  <input type="text" name="cattle" placeholder="cow or buffalo"><br><br>
First Name:   <input type="text" name="fname" ><br><br>
Last Name:    <input type="text" name="lname"><br><br>
Address:      <input type="text" name="address"><br><br>
Contact:      <input type="text" name="cont"><br>
</pre>
<div class="idee"><input type="submit" value="Add User"></div>.<br>
</div>

</form>
</div>
<a href="index.html"> <input type="submit" value="Go to Home"></a>

<a href="sal.html"> <input type="submit" value="Go to salary"></a>
</body>
</html>

