<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php
    
function addNumbers($number1, $number2){
$sum = $number1 + $number2;
 
return $sum;

} 

$result = addNumbers(34,64);

echo $result; // result=98

echo "<br>";
    
$result = addNumbers(100, $result); //now result=198

echo $result;

echo "<br>";
    
$result = addNumbers(10000, $result); //finally result=10198

echo $result;
    
?>

</body>

</html>
