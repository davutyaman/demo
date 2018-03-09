<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>

    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">

        <?php

        if(3 > 7) {
            echo "yoğ artığ";
        } elseif(4 == 5) {
            echo "ney";
        } else {
            echo "I love PHP" . "<br>";
        }

        for($number = 0; $number <= 10; $number++) {
            echo $number . "<br>";
        }

        $number = 3;

switch($number) {

    case 1:
        echo "that 1";
        break;
    case 2:
        echo "hoho 2";
        break;
    case 3:
        echo "toto 3";
        break;
    case 4:
        echo "hoho 4";
        break;
    case 5:
        echo "toto 5";
        break;

    default:
        echo "üzdün paşam";
}

?>


    </article>
    <!--MAIN CONTENT-->

    <?php include "includes/footer.php" ?>
