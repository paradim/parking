<?php
//$LicenseID = $_POST["lic"];

$servername = "localhost";
$username = "root";
$password = "xitgmLwmp";
$dbname = "Parking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM transaction_tbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        echo "found data";
    }
} else {
    echo "0 results";
}
$conn->close();
?>