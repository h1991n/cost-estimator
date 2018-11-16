<?php
require("db_config.php");


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO foundation_pad (Name, Pad_Quantity, Pad_Length, Pad_Width, Pad_Depth, Pad_SteelHeight, Pad_Length_TopSteelDiameter, Pad_Length_BottomSteelDiameter, Pad_x_Length_TopInterval, Pad_Length_TopInterval, Pad_x_Length_BottomInterval, Pad_Length_BottomInterval, Pad_Width_TopSteelDiameter, Pad_Width_BottomSteelDiameter, Pad_x_Width_TopInterval, Pad_Width_TopInterval, Pad_x_Width_BottomInterval, Pad_Width_BottomInterval, Pad_BlindingTopArea, Pad_BlindingVolume, Pad_BlindingSurfaceArea, Pad_Volume, Pad_CircumferenceArea, Pad_SurfaceArea, Pad_Length_SteelLength, Pad_Length_TopSteelNumber, Pad_Length_TopSteelWeight, Pad_Length_BottomSteelNumber, Pad_Length_BottomSteelWeight, Pad_Width_SteelLength, Pad_Width_TopSteelNumber, Pad_Width_TopSteelWeight, Pad_Width_BottomSteelNumber, Pad_Width_BottomSteelWeight)
VALUES ('$Name', '$Pad_Quantity', '$Pad_Length', '$Pad_Width', '$Pad_Depth', '$Pad_SteelHeight', '$Pad_Length_TopSteelDiameter', '$Pad_Length_BottomSteelDiameter', '$Pad_x_Length_TopInterval', '$Pad_Length_TopInterval', '$Pad_x_Length_BottomInterval', '$Pad_Length_BottomInterval', '$Pad_Width_TopSteelDiameter', '$Pad_Width_BottomSteelDiameter', '$Pad_x_Width_TopInterval', '$Pad_Width_TopInterval', '$Pad_x_Width_BottomInterval', '$Pad_Width_BottomInterval', '$Pad_BlindingTopArea', '$Pad_BlindingVolume', '$Pad_BlindingSurfaceArea', '$Pad_Volume', '$Pad_CircumferenceArea', '$Pad_SurfaceArea', '$Pad_Length_SteelLength', '$Pad_Length_TopSteelNumber', '$Pad_Length_TopSteelWeight', '$Pad_Length_BottomSteelNumber', '$Pad_Length_BottomSteelWeight', '$Pad_Width_SteelLength', '$Pad_Width_TopSteelNumber', '$Pad_Width_TopSteelWeight', '$Pad_Width_BottomSteelNumber', '$Pad_Width_BottomSteelWeight')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>