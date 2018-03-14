<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>

	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">
	
	<?php  

    class Dog {
        var $eyeColor = "black";
        var $nose = "good";
        var $behavior = "understandable";

        function showAll() {
           echo $this->eyeColor . "<br>";
           echo $this->nose . "<br>";
           echo $this->behavior . "<br>";
        }
    }

$pitbull = new Dog();
$pitbull->showAll();
	
	?>

</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
