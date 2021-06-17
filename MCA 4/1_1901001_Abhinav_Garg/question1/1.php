<?php

$servername = "";
$username = "root";
$password = "";
$dbname = "questionDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "emp_no: " . $row["emp_no"]. "----emp_name: " . $row["emp_name"]. "----dept: " . $row["dept"]. "----mob_no: " . $row["mob_no"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?> 