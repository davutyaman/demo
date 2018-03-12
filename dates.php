<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>"; //l (lowercase 'L') - Represents the day of the week
echo "The time is " . date("h:i:sa") . "<br>";
?>

<?php
$startdate = strtotime("Monday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>

<br>
&copy; 2017-<?php echo date("Y");?>
