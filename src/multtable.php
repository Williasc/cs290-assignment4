<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Mult Table</title>
</head>
<body>';

$minMult = $_GET['min-multiplicand'];
$maxMult = $_GET['max-multiplicand'];
$minMultiplier = $_GET['min-multiplier'];
$maxMultiplier = $_GET['max-multiplier'];

if ($minMult > $maxMult){
    echo "ERROR: Minimum multiplicand is larger than the maximum multiplicand.<br>";
}
if ($minMultiplier > $maxMultiplier){
    echo "ERROR: Minimum multiplier is larger than the maximum multiplicand.<br>";
}
if (!is_numeric($minMult)){
    echo "ERROR: Minimum multiplicand must be an integer.<br>";
}
if (!is_numeric($maxMult)){
    echo "ERROR: Maximum multiplicand must be an integer.<br>";
}
if (!is_numeric($minMultiplier)){
    echo "ERROR: Minimum multiplier must be an integer.<br>";
}
if (!is_numeric($maxMultiplier)){
    echo "ERROR: Maximum multiplier must be an integer.<br>";
}

if (!isset($minMult)){
    echo "ERROR: Minimum multiplicand is not set.<br>";
}
if (!isset($maxMult)){
    echo "ERROR: Maximum multiplicand is not set.<br>";
}
if (!isset($minMultiplier)){
    echo "ERROR: Minimum multiplier is not set.<br>";
}
if (!isset($maxMultiplier)){
    echo "ERROR: Maximum multiplier is not set.<br>";
}

echo "The minimum multiplicand is $minMult.<br>";
echo "The maximum multiplicand is $maxMult.<br>";
echo "The minimum multiplier is $minMultiplier.<br>";
echo "The maximum multiplier is $maxMultiplier.<br>";

$tableHeight = ($maxMult - $minMult + 2);
$tableWidth = ($maxMultiplier - $minMultiplier + 2);

//create multiplicand row array
$wArray = array(0 => $minMult);
for ($i = $minMult; $i < $maxMult + 1; $i++){
    array_push($wArray, $i);
}

//create multiplier column array
$hArray = array(0 => $minMultiplier);
for ($i = $minMultiplier; $i < $maxMultiplier + 1; $i++){
    array_push($hArray, $i);
}

//fill in first row
echo "<table border = '1'>
<tr><td></td>";
for ($i = 1; $i < count($wArray); $i++){
    echo "<td>" . $wArray[$i] . "</td>";
}
echo "</tr>";

//populate the rest of the table data
for ($i = 1; $i < count($hArray); $i++){
    echo "<tr><td>" . $hArray[$i] . "</td>";
    for ($j = 1; $j < count($wArray); $j++){
        $tmp = $hArray[$i] * $wArray[$j];
        echo "<td>" . $tmp . "</td>";
    }
    echo "</tr>";
}
echo "</table>
</body>
</html>";

?>
