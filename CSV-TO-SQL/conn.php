<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "web5";

//create connection
$conn = new mysqli($servername, $username, $password, $db_name);

//check connection
if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
}
echo "Connected Succesfully";

?>