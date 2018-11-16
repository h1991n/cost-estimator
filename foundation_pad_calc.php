<?php

//Calculate Results
$Pad_BlindingTopArea	=	$Pad_Quantity	*	( ( $BlindingSide	*	2 )	+	$Pad_Length )	*	( ( $BlindingSide	*	2 )	+ $Pad_Width);
$Pad_BlindingVolume	=	$Pad_BlindingTopArea	*	$BlindingDepth;
$Pad_BlindingSurfaceArea	=	( $Pad_Quantity	*	( 2	*	( ( $Pad_Length	+	$BlindingSide	*	2 )	+	( $Pad_Width	+	$BlindingSide	*	2 ) ) )	*	$BlindingDepth )	+	$Pad_BlindingTopArea;
$Pad_Volume	=	$Pad_Quantity	*	$Pad_Length	*	$Pad_Width	*	$Pad_Depth;
$Pad_CircumferenceArea	=	$Pad_Quantity	*	( 2	*	$Pad_Length	+	2	*	$Pad_Width )	*	$Pad_Depth;
$Pad_SurfaceArea	=	$Pad_BlindingSurfaceArea	+	$Pad_CircumferenceArea;
$Pad_Length_SteelLength	=	( $Pad_Length	-	2	*	$FoundationCover )	+	( 2	*	( $Pad_SteelHeight	-	2	*	$FoundationCover ) );
$Pad_Length_TopSteelNumber	=	ceil($Pad_Width	/	$Pad_Length_TopInterval);
$Pad_Length_TopSteelWeight	=	$Pad_Quantity	*	( $Pad_Length_SteelLength	*	$Pad_Length_TopSteelNumber )	/	$SteelCoefficient	*	$Pad_Length_TopSteelDiameter	*	$Pad_Length_TopSteelDiameter;
$Pad_Length_BottomSteelNumber	=	ceil($Pad_Width	/	$Pad_Length_BottomInterval);
$Pad_Length_BottomSteelWeight	=	$Pad_Quantity	*	( $Pad_Length_SteelLength	*	$Pad_Length_BottomSteelNumber )	/	$SteelCoefficient	*	$Pad_Length_BottomSteelDiameter	*	$Pad_Length_BottomSteelDiameter;
$Pad_Width_SteelLength	=	( $Pad_Width	-	2	*	$FoundationCover )	+	( 2	*	( $Pad_SteelHeight	-	2	*	$FoundationCover ) );
$Pad_Width_TopSteelNumber	=	ceil($Pad_Length	/	$Pad_Width_TopInterval);
$Pad_Width_TopSteelWeight	=	$Pad_Quantity	*	( $Pad_Width_SteelLength	*	$Pad_Width_TopSteelNumber )	/	$SteelCoefficient	*	$Pad_Width_TopSteelDiameter	*	$Pad_Width_TopSteelDiameter;
$Pad_Width_BottomSteelNumber	=	ceil($Pad_Length	/	$Pad_Width_BottomInterval);
$Pad_Width_BottomSteelWeight	=	$Pad_Quantity	*	( $Pad_Width_SteelLength	*	$Pad_Width_BottomSteelNumber )	/	$SteelCoefficient	*	$Pad_Width_BottomSteelDiameter	*	$Pad_Width_BottomSteelDiameter;

?>
