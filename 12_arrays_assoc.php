<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 

$number = array('juanita', 'maria', 'jose');

//print_r($number);

echo $number[0] . "<br>";
echo "<br>";  


// Associative Array Below

$names = array("first_name" => 'Edwin', "Last_Name" => 'Diaz' );

//print_r($names);

echo $names['first_name'] . " " . $names['Last_Name'] . "<br>";
    
?>

<?php
$universities = array
  (
  array("Bilgi",22,18),
  array("Bilkent",15,13),
  array("Sabancı",5,2),
  array("Koç",17,15)
  );

echo "<br>";
echo $universities[0][0].": Students: ".$universities[0][1].", graduate: ".$universities[0][2].".<br>";
echo $universities[1][0].": Students: ".$universities[1][1].", graduate: ".$universities[1][2].".<br>";
echo $universities[2][0].": Students: ".$universities[2][1].", graduate: ".$universities[2][2].".<br>";
echo $universities[3][0].": Students: ".$universities[3][1].", graduate: ".$universities[3][2].".<br>";
?>

<?php
$cars = array
  (
  array("reno",22,18),
  array("bemeve",15,13),
  array("mersedes",5,2),
  array("renc rovır",17,15)
  );
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>

</body>
</html>
