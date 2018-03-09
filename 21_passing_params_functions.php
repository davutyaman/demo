<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php

    function normalSentence($sentence){
       echo $sentence;
    }
    
    normalSentence("am i normal or my sentences are normal i do not know right now, i will learn after this course <br>");
    
?>

    <?php
    
    function sumAndSubNumbers($number1, $number2, $number3) {
        $sum = $number1 + $number2 + $number3;
        $sub = $number1 - $number2 - $number3;

        echo $sum + $sub . "<br>" . $sum . "<br>" . $sub;
    }
    
    sumAndSubNumbers(1000,500,300);

?>

</body>

</html>
