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

	$result_set = $mysqli->query ("SELECT * FROM `users`"); // виведуться всі
	printResult ($result_set);

	$result_set = $mysqli->query ("SELECT `id` FROM `users`"); // виведеться id
	printResult ($result_set);

	$result_set = $mysqli->query ("SELECT `id`, `login` FROM `users`"); // виведеться id , login
	printResult ($result_set);

	$result_set = $mysqli->query ("SELECT * FROM `users` WHERE  `id` < 7 ORDER BY `id` ASC"); // виведеться id < 7 сортування по зростанню
	printResult ($result_set);

	$result_set = $mysqli->query ("SELECT * FROM `users` WHERE  `id` < 7 ORDER BY `id` DESC "); // виведеться id < 7 сортування по спаданню
	printResult ($result_set);

	$result_set = $mysqli->query ("SELECT * FROM `users` WHERE  `id` < 7 ORDER BY `login` DESC LIMIT 0, 2");
	printResult ($result_set);

	$result_set = $mysqli->query ("SELECT * FROM `users` WHERE  `login` LIKE '%ser%'"); // виведуться тыльки з вмыстом "ser"
	printResult ($result_set);

	$result_set = $mysqli->query ("SELECT COUNT(`id`) FROM `users` "); // виве
 	printResult ($result_set);


	var_dump ($mysqli);
	$mysqli->close ();




?>

