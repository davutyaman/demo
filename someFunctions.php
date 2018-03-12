<?php
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
    echo "<br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(35);
setHeight(80);
?>

    <?php
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";
?>

        <?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
    echo "<br>";
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}
?>


            <?php
$age = array("Davut"=>"25", "Ben"=>"36", "Yaman"=>"143");
asort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>
