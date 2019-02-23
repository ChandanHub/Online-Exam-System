<DOCTYPE! html>
 <html>
  <head>
   <title>User Connection</title>
  </head>

<body bgcolor="grey">
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<h1 style=\"color:red\" >User Connected successfully <h1><br><br>";
mysqli_close($conn);
?>
<form action="config2.php" method="GET">
<input type="submit" value="Next"/>
</form>

</body >
</html>