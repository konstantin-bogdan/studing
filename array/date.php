<?php


	$start = microtime (true);
	echo time () . "<br />"; // бере відлік з 01.01.1970 року заснування мови UNIX
	echo "<hr />";

	echo microtime (true) . "<br />";
	echo "<hr />";


	echo "Час роботи скрипта: " . (microtime(true) - $start) . "сикунд<br />";
	echo "<hr />";

	echo date ("Y-m-d H:i:s");
	echo "Сьогодняшня дата <br /> ";
 	echo "<hr />";




	$time = mktime (12, 35, 23, 12,7, 2007);

	echo date ("Y-m-d H:i:s", $time) . "<br />";
	echo "<hr />";



	$array = getdate($time);
	print_r ($array); // виводить масивом дату та час

	echo "<br />" . checkdate (2, 28, 2012); // перевіряє ,чи є така дата





?>