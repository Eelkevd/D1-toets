//oefening 1

<?php
/*echo​ "Sed ut perspiciatis unde omnis iste natus error sit
voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
dicta sunt explicabo.";*/
//for​($i=0; $i<100; $i++) {}
print '<br>';
?>

//oefening 2

<?php
	$a = 1000;
	$b = 1200;
	$c = 1400;

	$sumTotal = $a + $b + $c;

	print($sumTotal).'<br>';
?>

// Oefening 3 - Hij herkent de variablen niet omdat ze niet in de function staan. Kan opgelost door ze global te verklaren in de function, of ze direct in de function te stoppen.
<?php print '<br>'; ?>

//oefening 4

<?php
	$testString = "Hello World";
	echo strtolower($testString).'<br>';
?>

//oefening 5

<?php
	$name = "George";
	$age = 50;
	$male = true​;
	$list = [1,2,5,8,9];
	
	echo "Value is"." ".gettype($name).'<br>';
	echo "Value is"." ".gettype($age).'<br>';
	echo "Value is"." ".gettype($male).'<br>';
	echo "Value is"." ".gettype($list).'<br>';
?>

//oefening 6
<?php
	$a = 5;
	$b = 10;

	print ($a + $b).'<br>';
	print ($a - $b).'<br>';
	print ($a / $b).'<br>';
	print ($a * $b).'<br>';
	print ($a ** $b).'<br>';
?>
//oefening 7
<?php
	//$string1 = "the quick brown fox jumps over the lazy dog";
	print str_replace("the", "That", "the quick brown fox jumps over")." "."the lazy dog".'<br>';
	/*$count = 1;
	echo preg_replace("the", "That", "the quick brown fox jumps over the lazy dog", $count);*/
?>

//oefening 8
<?php
	$temp = 10;

	if($temp <= 50) {
		print "temperature is low";
	} else {
		print "temperature is ok";
	}
	print '<br>';
?>

//oefening 9
<?php

	$cityNames = array("New York City", "Seoul", "Tokyo", "Mexico City", "Shanghai", "Lagos", "Cairo", "Buenos Aires", "London", "Mumbai");
	for ($i=0; $i<count($cityNames); $i++) {
		print $cityNames[$i].","." ";
	}
	print '<br>';
	array_push($cityNames, "Calcutta", "Los Angeles", "Osaka", "Beijing");
	print_r($cityNames);
	print '<br>';
?>

//oefening 10
<?php
echo "<table border=\"2\">";
$rows = 6;
$cols = 6;

        for ($r =1; $r < $rows; $r++){

            echo'<tr>';

            for ($c = 1; $c < $cols; $c++)
                echo '<td>' .$c*$r.'</td>';
           echo '</tr>'; // close tr tag here

        }

  echo "</table>";
?>

//oefening 11

<html>
<head>
</head>
<body>
	<form action="d1 toets" method="get">
		<input type="text" name="width" placeholder="width">
		<input type="text" name="height" placeholder="height">
		<input type="submit" onclick= "function calcNum()" name="submit" value="Submit" />
	</form>
</body>

</html>

<?php
	//echo $_GET['width'].$_GET['height'];
?>
