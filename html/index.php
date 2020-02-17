<html>
<head>
<title></title>
</head>
<body>
<form action="save.php" name="frmAdd" method="post">
<table width="284" border="1">
    <th width="120">Phone Number</th>
    <td width="238"><input type="text" name="phon" size="5"></td>
    <th width="120">Name of Phon</th>
    <td><input type="text" name="name" size="20"></td>
  <input type="submit" name="submit" value="submit">
</table>
</form>
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

$sql = "SELECT phon,name  FROM pn_db_sub";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Phone number: " . $row["phon"]. " - Name: " . $row["name"]. " " ."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
