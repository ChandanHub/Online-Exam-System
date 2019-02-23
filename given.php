<DOCTYPE! html>
 <html>
  <head>
   <title>Given details</title>
   <style>
  img {
    position: relative;
    left: 0px;
    top: 0px;
	right:0px;
    z-index: +1;
}
img.a {
    position: absolute;
    left: 10px;
    top: 210px;
    z-index: +1;
}
</style>
  </head>
    <body bgcolor="darkkhaki">
	<a href="home.php"><img class="a" src="TT.png" style="width:100px;height:75px;"></a>
	<img src="p3.jpg" style="width:100%;height:200px;">
<center>
<table width="100%" border="0" bgcolor="CadetBlue" height="60px" >
<tr><td><center><h1 style="color:orange"><b><marquee>Welcome! You Account is created</marquee></b><h1></center></td></tr>
<tr><td><center><h1 style="color:yellow"><b>Given Details are</b><h1></center></td></tr>
</table>
<?php

$name= $_POST["username"];
$father_name= $_POST["fname"];
$gender=$_POST["gen"];
$semester=$_POST["sem"];
$branch=$_POST["bra"];
$college=$_POST["coll"];
$house=$_POST["hn"];
$street=$_POST["str"];
$city=$_POST["ct"];
$state=$_POST["sta"];
$pin=$_POST["pn"];
$pass=$_POST["cpass"];

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

$sql = "INSERT INTO user (password, name, father_name, gender, semester, branch, college, house, street, city, state, pin, reg_date)
VALUES ('$pass','$name','$father_name','$gender','$semester','$branch','$college','$house','$street','$city','$state','$pin',CURRENT_TIMESTAMP)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully \n";
	$last_id = mysqli_insert_id($conn);
	echo "<br><h1 style=\"color:red;\"> Your UserID is  - ".$last_id."</h1>";
	
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn); 


echo "<h1 style=\"color:red;\"> Your Password is  - ".$pass."</h1><br>";
echo "<table border=\"1\"  width=\"30%\" >  ";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>Name</b></td><td>$name</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>Father Name</b></td><td>$father_name</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>Gender</b></td><td>$gender</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>Semester</b></td><td>$semester</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>Branch</b></td><td>$branch</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>College</b></td><td>$college</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>House Number</b></td><td>$house</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>Street Number</b></td><td>$street</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>City</b></td><td>$city</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>State</b></td><td>$state</td></tr>";
echo "<tr align=\"center\" bgcolor=\"white\" style=\"color:blue;\"><td><b>Pin Number</b></td><td>$pin</td></tr>";
echo "</table>";


?>
<br><hr><br>
<a href="home.php" ><button> Go To HomePage </button></a>
<br><hr>
</center>
    </body>
 </html>