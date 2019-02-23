<DOCTYPE! html>
 <html>
  <head>
   <title>Exam Database Creation</title>
  </head>

<body bgcolor="grey">
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername,$username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE exam";
if (mysqli_query($conn, $sql)) {
    echo "<h1 style=\"color:red\" >Database exam created successfully</h1>";
} else {
    echo "<h1 style=\"color:red\" >Error creating exam database: </h1>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<form action="config5.php" method="GET">
<input type="submit" value="Next"/>
</form>

</body >
</html>