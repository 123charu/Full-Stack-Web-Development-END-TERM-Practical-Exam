<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE employee (
emp_no INT(6)  PRIMARY KEY,
emp_name VARCHAR(30) NOT NULL,
deptt VARCHAR(30) NOT NULL,
mob_no VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table employee created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql1 = "INSERT INTO employee (emp_no, emp_name, deptt,mob_no)
VALUES (101, 'Ram', 'soc','12345')";

if (mysqli_query($conn, $sql1)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql2 = "SELECT *from employee";
$result = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["emp_no"]. " - Name: " . $row["emp_name"]. "-department " . $row["deptt"]. "-mobile".$row["mob_no"]."<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
