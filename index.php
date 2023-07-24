<?php

$conn = mysqli_connect("testsql", "root", "mantap?18", "mantap");

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to mySQL Successfully! ";

//query to database
$sql = "select name from account where id = '1'";
$result = $conn->query($sql);

//print to web
$row = $result->fetch_assoc();
echo "<br>Hello, " . $row["name"];

?>
