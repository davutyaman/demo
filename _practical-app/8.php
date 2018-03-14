<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>

		</aside><!--SIDEBAR-->

	<article class="main-content col-xs-8">

	<?php

        $examplePassword = "davutspassword";

        $salt = "thisisprivate2";

        $passwordSS = crypt($examplePassword,$salt);

        echo $passwordSS;
	
	?>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>
