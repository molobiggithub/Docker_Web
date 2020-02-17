<?php
$servername = "database_server";
$username = "root";
$password = "rootpassword";
$dbname = "pn_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pn_db_sub (phon,name)
VALUES ('".$_POST["phon"]."','".$_POST["name"]."')";

if ($conn->query($sql) === TRUE) {
    echo "`Add already";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo"<head><meta http-equiv='Refresh'content = '2; URL = index.php'></head>";
?>

