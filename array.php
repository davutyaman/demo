<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>
    <?php

$numberList  = array('1,243,21,5,654', 65,745,22123,242, '<h1>selam</h1>');
$number = array('davut','yaman','selammal');

print_r($numberList);
echo "<br>";
echo $numberList[0];
echo "<br>";
echo $numberList[3];
echo "<br>";
echo $number[2];
echo "<br>";

$name = array("first_name" => 'mütabakat', "last_name" => 'anlaşma' );

print_r($name);
echo "<br>";
echo $name['last_name'];
echo "<br>";
echo $name['first_name'] . " = " . $name['last_name'];

    ?>
</body>
</html>
