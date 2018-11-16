<?php
require("db_config.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM variable where idvariable = 1;";
$result = $conn->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//Get Global Variables from database
$BlindingSide = $row["blinding_side"]; //(m)
$BlindingDepth = $row["blinding_depth"]; //(m)
$U_FoundationCover = $row["u_foundation_cover"]; // (cm)
$FoundationCover = $U_FoundationCover/100; //Convert to Meter unit
$Foundation_Heightpercantage = $row["foundation_height_percantage"];
$SteelDensity = $row["steel_density"];
$PI = pi();
$SteelCoefficient = 1000 /($PI / 4 / 1000000 * $SteelDensity);

$conn->close();
?>