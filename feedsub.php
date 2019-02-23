<DOCTYPE! html>
 <html>
  <head>
   <title>feedback</title>
   <style>
   img.a {
    position: absolute;
    left: 2px;
    top: 2px;
    z-index: +1;
</style>
</head>
<body bgcolor="GhostWhite">
<table width="100%" border="0" bgcolor="blue" height="60px" >
<tr ><td style="color:yellow"><center><h1><b>Feedback for CAA Online Exam</b><h1></center></td></tr>
</table><hr>
<a href="home.php"><img class="a" src="TT.png" style="width:100px;height:75px;"></a><center>
<?php

$uid= $_POST["uid"];
$uname= $_POST["uname"];
$comment=$_POST["comment"];

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

$sql = "INSERT INTO feed(userid, uname, comment)
VALUES ('$uid','$uname','$comment')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully \n";
	$last_id = mysqli_insert_id($conn);
	echo "<br><h1 style=\"color:red;\"> Your Feedback ID is  - ".$last_id."</h1>";
	
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	


mysqli_close($conn); 

?>

<h2> Thankyou for valuable Feedback </h2><br><br>
<a href="home.php" ><button> Go To HomePage </button></a>
</center>
</body>
</html>