<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<?php

       $connection = mysqli_connect('localhost', 'root', '112358', 'loginapp');

        if(!$connection) {
            die("Database Connection Failed") . mysqli_error($connection);
        }

        $query = "SELECT * FROM users";

        $result = mysqli_query($connection,$query);

        if(!$result) {
            die("QUERY FAILED");
        }

	?>

    <section class="content">

        <aside class="col-xs-4">

            <?php Navigation();?>

        </aside>
        <!--SIDEBAR-->

        <article class="main-content col-xs-8">

            <?php

        while($record = mysqli_fetch_assoc($result)) {
            echo $record['password'] . "<br>";
        }

    ?>

        </article>
        <!--MAIN CONTENT-->

        <?php include "includes/footer.php" ?>
