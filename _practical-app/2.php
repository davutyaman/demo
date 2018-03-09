<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		$number1 = 10;
		$number2 = 20;

		echo $number1 + $number2 . "<br>";

		$constant = 0;
		$array1 = array(1,2,3);
		$array2 = array("first_number" => 1,"second_number" => 2, "last_number" => 3);

		echo $array1[1] . "<br>";
		echo $array2['second_number'];

		?>

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
