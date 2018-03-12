<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>

    </aside>
    <!--SIDEBAR-->
    <article class="main-content col-xs-8">

        <?php
    function returnCalc($num1, $num2) {
        $result = $num1 + $num2;
        echo $result . "<br>";
    }
    returnCalc(7,3);

function calculation() {
        $number1 = 78;
        $number2 = 92;
        $sum = $number1 + $number2;
    return $sum;
    }

$result = calculation();

        echo $result;
	
?>

    </article>
    <!--MAIN CONTENT-->

    <?php include "includes/footer.php" ?>
