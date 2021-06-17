<?php

$host = "";
$user = "root";
$pass = "";
$name = "";

function create_db() {
    global $host;
    global $user;
    global $pass;
    global $name;
    
    $con = mysqli_connect($host, $user, $pass, $name);
 
    $query = "CREATE TABLE Employee (
        emp_no varchar(255),
        emp_name varchar(255),
        deptt varchar(255),
        mob_no varchar(255)
    )";
    
    $res = mysqli_query($con, $query);


    if($res) {
        echo "Table Created";
    } else {
        echo "Table not created";
    }
}

function readData() {
    global $db_host;
    global $db_user;
    global $db_pass;
    global $db_name;

    $con = mysqli_connect($host, $user, $pass, $name);
    $query = "SELECT * FROM Employee";
    $res = mysqli_query($con, $query);

    echo "<table>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
            echo "<td>" . $row['emp_no'] . "</td>";
            echo "<td>" . $row['emp_name'] . "</td>";
            echo "<td>" . $row['deptt'] . "</td>";
            echo "<td>" . $row['mob_no'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

create_db();
readData();

?>
