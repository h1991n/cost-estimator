<?php
require("db_config.php");
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Get Prices from database
$sql = "SELECT Unit_Amount FROM price WHERE Material = 'Concrete';";
$result = $conn->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$Concrete_Unit_Amount = $row["Unit_Amount"];

//Get Total Pad_BlindingVolume from database
$sql = "SELECT SUM(Pad_BlindingVolume) as Total_Pad_BlindingVolume FROM foundation_pad;";
$result = $conn->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$Total_Pad_BlindingVolume = $row["Total_Pad_BlindingVolume"];

//Get Count_Foundation_Pad from database
$sql = "SELECT count(idfoundation_pad) as Count_Foundation_Pad FROM foundation_pad;";
$result = $conn->query($sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$Count_Foundation_Pad = $row["Count_Foundation_Pad"];

//Calculate Total Concrete Cost
$Total_Concrete_Cost = $Total_Pad_BlindingVolume * $Concrete_Unit_Amount;



$conn->close();
?>

<style>
table, th, td {
    border: 1px solid black;
}
</style>
<table style="margin-left: auto; margin-right: auto;" width="800">
<tbody>
<tr>
<td colspan="7" width="611">PROJECT :</td>
</tr>
<tr>
<td colspan="7" width="611">CLIENT NAME :</td>
</tr>
<tr>
<td colspan="7">BILL OF QUANTITY</td>
</tr>
<tr>
<td colspan="2" width="66">No.</td>
<td width="251">ITEM NAME</td>
<td width="59">UNIT</td>
<td width="59">Q T Y&nbsp;</td>
<td width="77">RATE</td>
<td width="99">AMOUNT (BHD)</td>
</tr>
<tr>
<td colspan="2">A</td>
<td>Site Mobilisation</td>
<td>LS</td>
<td><u>&nbsp;</u></td>
<td><u>&nbsp;</u></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan="2">B</td>
<td colspan="5" width="545">SUB-STRUCTURE</td>
</tr>
<tr>
<td>1</td>
<td>&nbsp;</td>
<td width="251">EarthWork Excavation as per drawing</td>
<td>M&sup3;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>2</td>
<td>&nbsp;</td>
<td>Back filling stone</td>
<td>M&sup3;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>3</td>
<td>&nbsp;</td>
<td>Back filling type .B</td>
<td>M&sup3;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>4</td>
<td>&nbsp;</td>
<td>Blinding for footing</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>5</td>
<td>&nbsp;</td>
<td>Blinding for Boundary wall footing</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>6</td>
<td>&nbsp;</td>
<td>Footing Concrete</td>
<td>M&sup3;</td>
<td><?php echo $Total_Pad_BlindingVolume; ?></td>
<td><?php echo $Concrete_Unit_Amount; ?></td>
<td><?php echo $Total_Concrete_Cost; ?></td>
</tr>
<tr>
<td>7</td>
<td>&nbsp;</td>
<td>Boundary wall footing</td>
<td>M&sup3;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>8</td>
<td>&nbsp;</td>
<td>Blinding for Grade Beam</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>9</td>
<td>&nbsp;</td>
<td>Grade Beam Concrete</td>
<td>M&sup3;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>10</td>
<td>&nbsp;</td>
<td>Damp Proofing</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>11</td>
<td>&nbsp;</td>
<td>Back Filling (up to grad slab lvl)</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>12</td>
<td>&nbsp;</td>
<td>Grade Slab Concrete 100mm thick</td>
<td>M&sup3;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td colspan="2">C</td>
<td colspan="5">SUPER STRUCTURE</td>
</tr>
<tr>
<td>1</td>
<td>&nbsp;</td>
<td>Column Concrete</td>
<td>M&sup3;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>2</td>
<td>&nbsp;</td>
<td>Compound Wall Column Concrete</td>
<td>M&sup3;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>3</td>
<td>&nbsp;</td>
<td>Roof Beams</td>
<td>M&sup3;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>4</td>
<td>&nbsp;</td>
<td>SLAB</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>a</td>
<td>Pre- cast(150mm)</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>b</td>
<td>Pre- cast(200mm+)</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>c</td>
<td>R.c.c slabs(300mm)</td>
<td>M&sup3;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>d</td>
<td>R.c.c sunken slabs(150mm)</td>
<td>M&sup3;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>5</td>
<td>&nbsp;</td>
<td>Stair Case</td>
<td>M&sup3;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>6</td>
<td>&nbsp;</td>
<td>Lintel (r.c.c)</td>
<td>M&sup3;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>7</td>
<td>&nbsp;</td>
<td>Damp Proofing Coarse</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>8</td>
<td>&nbsp;</td>
<td>Block Work</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>a</td>
<td>200mm Insulation Blocks</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>b</td>
<td>200mm Hollow Blocks</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>c</td>
<td>150mm Hollow Blocks</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>d</td>
<td>200mm Hollow Blocks for Compound</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>9</td>
<td>&nbsp;</td>
<td>PLASTERING WALLS</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>a</td>
<td>External</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>b</td>
<td>Internal</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>c</td>
<td>Compound Wall</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td colspan="2">D</td>
<td colspan="5">FINISHING WORKS</td>
</tr>
<tr>
<td>1</td>
<td>&nbsp;</td>
<td>PAINTING</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>a</td>
<td>External</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>b</td>
<td>Internal</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>2</td>
<td>&nbsp;</td>
<td>TILES WORK</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>a</td>
<td width="251">Floor (including skirting) tile cost -3BD</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>b</td>
<td>Toilets</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>Floor ( tile cost -3BD)</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td width="251">Wall( height at 3.90mtr)( tile cost -3BD)</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>c</td>
<td width="251">Kitchen&nbsp; &amp; pantry Floor( tile cost -3BD)</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>d</td>
<td>Kitchen&nbsp; &amp; pantry wall (3.90 mtr Ht)</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>e</td>
<td>Graniet flooring steps</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>3</td>
<td>&nbsp;</td>
<td>GYPSUM CEILINGS</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>a</td>
<td>all floors ( Plain design)</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>b</td>
<td>&nbsp;Toilets &amp; Kitchen(Water proof)&nbsp;&nbsp;&nbsp;&nbsp; </td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>6</td>
<td>&nbsp;</td>
<td>CUPBOARD WORK&nbsp;</td>
<td>RMTR</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>7</td>
<td>&nbsp;</td>
<td>ALUMINIUM DOORS &amp; WINDOWS&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>a</td>
<td>Door&nbsp;</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>b</td>
<td>WINDOWS&nbsp;</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>8</td>
<td>&nbsp;</td>
<td width="251">HandRail of stair case (STAINLESS STEEL)</td>
<td>RMTR</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>9</td>
<td>&nbsp;</td>
<td>Water Proofing</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>a</td>
<td>Roof</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>b</td>
<td>Toilets</td>
<td>M&sup2;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td colspan="2">E</td>
<td width="251">Lift installation</td>
<td>NO</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td colspan="2">F</td>
<td width="251">Electrifications</td>
<td>LS</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan="2">G</td>
<td>PLUMPING &amp; DRAINAGE WORKS</td>
<td>LS</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>1</td>
<td>&nbsp;</td>
<td>Sanitary wares&nbsp;</td>
<td>NOS</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td>2</td>
<td>&nbsp;</td>
<td>Septic tank</td>
<td>LS</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan="6">&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td colspan="7">EXCLUDED&nbsp; WORK</td>
</tr>
<tr>
<td colspan="2">1</td>
<td colspan="5">&nbsp;SWIMMING POOL WORK</td>
</tr>
<tr>
<td colspan="2">2</td>
<td colspan="5">LAND SCAPING &amp; OUT SIDE INTERLOCKING WORK</td>
</tr>
<tr>
<td colspan="2">3</td>
<td colspan="5">DECCORATIVE&nbsp; DESIGN &amp; FURNITURE WORK</td>
</tr>
<tr>
<td colspan="2">4</td>
<td colspan="5">AIR CONDITIONING&nbsp; WORKS</td>
</tr>
<tr>
<td colspan="2">5</td>
<td colspan="5">OTHER THAN ABOVE MENTIONED BOQ</td>
</tr>
<tr>
<td colspan="7">SUMMARY</td>
</tr>
<tr>
<td colspan="2">A</td>
<td colspan="4">SITE MOBILISATION</td>
<td>0.000</td>
</tr>
<tr>
<td colspan="2">B</td>
<td colspan="4">SUBSTRUCTURE WORK&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td colspan="2">C</td>
<td colspan="4">SUPER STRUCTURE WORK&nbsp;</td>
<td>0.000</td>
</tr>
<tr>
<td colspan="2">D</td>
<td colspan="4">FINISHING WORKS</td>
<td>0.000</td>
</tr>
<tr>
<td colspan="2">E</td>
<td colspan="4">LIFT INSTALLATION</td>
<td>0.000</td>
</tr>
<tr>
<td colspan="2">F</td>
<td colspan="4">ALL ELECTRICAL WORK</td>
<td>0.000</td>
</tr>
<tr>
<td colspan="2">G</td>
<td colspan="4">PLUMPING &amp; DRAINAGE WORKS</td>
<td>0.000</td>
</tr>
<tr>
<td colspan="7">&nbsp;</td>
</tr>
<tr>
<td colspan="6">TOTAL BD:</td>
<td>0.000</td>
</tr>
<tr>
<td colspan="7" width="611">Bahrain Dinar:</td>
</tr>
</tbody>
</table>