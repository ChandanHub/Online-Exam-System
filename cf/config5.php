<DOCTYPE! html>
 <html>
  <head>
   <title>User Table Creation</title>
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
$sql = "CREATE TABLE user(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
password VARCHAR(30) NOT NULL,
name VARCHAR(30) NOT NULL,
father_name VARCHAR(30) NOT NULL,
gender VARCHAR(30) NOT NULL,
semester VARCHAR(30) NOT NULL,
branch VARCHAR(30) NOT NULL,
college VARCHAR(30) NOT NULL,
house VARCHAR(30) NOT NULL,
street VARCHAR(30) NOT NULL,
city VARCHAR(30) NOT NULL,
state VARCHAR(30) NOT NULL,
pin INT(10) NOT NULL,
reg_date TIMESTAMP
) ";


if (mysqli_query($conn, $sql)) {
    echo " <h1 style=\"color:red\" >Table user created successfully</h1>";
} else {
    echo "<h1 style=\"color:red\" >Error creating user table: </h1>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<form action="config6.php" method="GET">
<input type="submit" value="Next"/>
</form>
</body >
</html>
