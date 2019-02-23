<DOCTYPE! html>
 <html>
  <head>
   <title>feedback Table Creation</title>
  </head>
<body bgcolor="grey">

<?php
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

// sql to create table
$sql = "CREATE TABLE feed(
id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,userid VARCHAR(30) NOT NULL,uname VARCHAR(30) NOT NULL,comment VARCHAR(30) NOT NULL)";


if (mysqli_query($conn, $sql)) {
    echo " <h1 style=\"color:red\" >Table user created successfully</h1>";
} else {
    echo "<h1 style=\"color:red\" >Error creating user table: </h1>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<form action="config7.php" method="GET">
<input type="submit" value="Next"/>
</form>
</body >
</html>
