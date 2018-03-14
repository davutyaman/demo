<?php include "functions.php" ?>

<?php
session_start();
$_SESSION['message'] = "merhaba benim adım nameee";


$expiration = time() + (60*60*24);

setcookie('Davut', 'This value is crazy value', $expiration);

?>



    <?php include "includes/header.php" ?>



    <section class="content">

        <aside class="col-xs-4">

            <?php Navigation();?>


        </aside>
        <!--SIDEBAR-->


        <article class="main-content col-xs-8">



            <?php

                if(isset($_GET['source'])) {
                    echo $_GET['source'] . "<br>";
                }

            if(isset( $_SESSION['message'])) {
                    echo  $_SESSION['message'] . "<br>";
                }

	?>


            <a href="9.php?source=12334">link</a>
<?php

            if(isset($_COOKIE["Davut"])) {
                echo $_COOKIE["Davut"];
            }
            ?>

        </article>
        <!--MAIN CONTENT-->
        <?php include "includes/footer.php" ?>
