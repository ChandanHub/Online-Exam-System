<DOCTYPE! html>
 <html>
  <head>
   <title>Table Creation</title>
  </head>
<body bgcolor="grey">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE Mytest(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
) ";

if (mysqli_query($conn, $sql)) {
    echo " <h1 style=\"color:red\" >Table MyGuests created successfully</h1>";
} else {
    echo "<h1 style=\"color:red\" >Error creating table: </h1>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body >
</html>
