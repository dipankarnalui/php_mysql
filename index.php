<?php
$servername = "localhost";
$username = "user";
$password = "pwd";
$dbname = "employeeDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO employee (emp_name,emp_address,emp_salary)
VALUES ('John', 'CHennai', '3000')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
