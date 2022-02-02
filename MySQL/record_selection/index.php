<?php

	function printResult ($result_set) {
		echo "Кількістьзаписів дорівнює - " . $result_set->num_rows. "<br />";
		while (($row = $result_set->fetch_assoc ()) != false){
		print_r ($row); // виводить масив
		//echo $row["login"]; // виводить всі логіни
			echo "<br />";


		}
		echo "<br />---------------";

	}

	$mysqli = new mysqli ("localhost", "root", "", "test_base");
	$mysqli->query("SET NAMES 'utf8'");

	$result_set = $mysqli->query ("SELECT * FROM `users`");
	printResult ($result_set);

	$result_set = $mysqli->query ("SELECT `id` FROM `users`");
	printResult ($result_set);


	var_dump ($mysqli);
	$mysqli->close();




?>

