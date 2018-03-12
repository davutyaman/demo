<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

    <aside class="col-xs-4">
        <?php Navigation();?>

    </aside>
    <!--SIDEBAR-->

    <article class="main-content col-xs-8">

        <?php

    echo rand(1,100) . "<br>";

    $string = "asdfas aasdedASD asdASD Ewd dW cqewCc AS C!";

    echo strlen($string) . "<br>"; //

    $values = ['merhaba', 12312, 'nasılsın', 'iyiyim', 45, 21, $string];

    $found = in_array($string, $values); //in_array — Bir dizide bir değerin varlığını araştırır
        if($found) {
            echo "dogri";
        } else {
            echo "yannış!";
        }
	
?>

    </article>
    <!--MAIN CONTENT-->
    <?php include "includes/footer.php" ?>
