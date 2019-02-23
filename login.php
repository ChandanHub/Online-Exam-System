 
<DOCTYPE! html>
 <html>
  <head>
   <title>login</title>
   <style>
   img.a {
    position: absolute;
    left: 2px;
    top: 2px;
    z-index: +1;
}
   img.out {
    position: absolute;
    right: 18px;
    top: 18px;
    z-index: +1;
}

a.top:link, a.top:visited {
    background-color: Orchid;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: block;
	
}


a.top:hover, a.top:active {
    background-color: green;
	
}

</style>
  </head>
    <body bgcolor="Wheat">
	<a href="home.php"><img class="a" src="TT.png" style="width:100px;height:75px;"></a>
	<a href="logout.php"><img class="out" src="out.png" style="width:109px;height:42px;"></a>
	<table width="100%" border="0" bgcolor="blue" height="60px" >
<tr ><td style="color:yellow"><center><h1><b>Profile Page </b><h1></center></td></tr>
</table>
<center><br>
<form name="log" action="dash.php">
<input type="submit" value="Go To DashBoard" />
</form><hr>
<?php
$id= $_POST["userid"];
$pass=$_POST["pass"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql= "Select * FROM user WHERE id='$id' AND password='$pass'  ";
$result = $conn->query($sql);

if($row = $result->fetch_assoc())
{
echo "<h1 style=\"color:red;\">You are Logged in !</h1>";	
}
else
{
	header("Location: wrong.html ");
}
mysqli_close($conn);
	
// Set session variables
//$_SESSION["userid"] = "$id";


?>
<hr>

</center>

<a class="top" href="details.php" ><b><h1> View Details</h1></b></a>
<a class="top" href="change.php" ><b><h1> Change Password</h1></b></a>
<a class="top" href="viewresult.php" ><b><h1> View Previous Results</h1></b></a></td></tr>
    </body>
 </html>