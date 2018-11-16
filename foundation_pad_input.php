
<?php
/*
//Set Universal Variables
$BlindingSide = 0.15; //(m)
$BlindingDepth = 0.1; //(m)
$U_FoundationCover = 7.5; // (cm)
$FoundationCover = $U_FoundationCover/100; //Convert to Meter unit
$Foundation_Heightpercantage = 0.75;
$SteelDensity = 7850;
$PI = pi();
$SteelCoefficient = 1000 /($PI / 4 / 1000000 * $SteelDensity);
*/

//Get user inputs from the form
$Name = $_POST["Name"];
$Pad_Quantity = (float)$_POST["Pad_Quantity"];
$Pad_Length = (float)$_POST["Pad_Length"];
$Pad_Width = (float)$_POST["Pad_Width"];
$Pad_Depth = (float)$_POST["Pad_Depth"];
$Pad_SteelHeight = $Pad_Depth * $Foundation_Heightpercantage;

//Length Variables
$Pad_Length_TopSteelDiameter = (float)$_POST["Pad_Length_TopSteelDiameter"];
$Pad_Length_BottomSteelDiameter = (float)$_POST["Pad_Length_BottomSteelDiameter"];
$Pad_x_Length_TopInterval = (float)$_POST["Pad_x_Length_TopInterval"];
$Pad_Length_TopInterval = $Pad_x_Length_TopInterval / 1000; // Convert to Meter unit
$Pad_x_Length_BottomInterval = (float)$_POST["Pad_x_Length_BottomInterval"];
$Pad_Length_BottomInterval = $Pad_x_Length_BottomInterval / 1000; // Convert to Meter unit

//Width Variables
$Pad_Width_TopSteelDiameter = (float)$_POST["Pad_Width_TopSteelDiameter"];
$Pad_Width_BottomSteelDiameter = (float)$_POST["Pad_Width_BottomSteelDiameter"];
$Pad_x_Width_TopInterval = (float)$_POST["Pad_x_Width_TopInterval"];
$Pad_Width_TopInterval = $Pad_x_Width_TopInterval / 1000; // Convert to Meter unit
$Pad_x_Width_BottomInterval = (float)$_POST["Pad_x_Width_BottomInterval"];
$Pad_Width_BottomInterval = $Pad_x_Width_BottomInterval / 1000; // Convert to Meter unit

?>
