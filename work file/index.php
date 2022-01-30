<?php
	/*
	$file = fopen ("a.txt", "a+T");
	fwrite($file, "Exampele\nText\nNext");
	fclose ($file);
	// створити файл в дерикторії

	*/

	// ВИЧИТУВАННЯ ФАЙЛУ


	$file = fopen ("a.txt", "r+");
	while (!feof($file)){
		echo fread ($file, 1) . "<br />"; // вивод по кількості символів
	}

		fseek ($file, 0);  // свати курсор на початок



		echo fread ($file, 1);
	fclose ($file);
	echo " ---------------------------<br />";

	file_put_contents("c.txt",  "TEST test Test "); // запис однією строкою
	echo file_get_contents("c.txt") . "<br />";

	// перевірка , чи існує файл
	echo file_exists("b.txt") . "<br />";  // якщо не існує то фальш
	echo file_exists("a.txt") . "<br />";  // якщо  існує то true
	echo filesize("c.txt") . "<br />";//перевіряє розмір файла


	// перйменування файлу з c.txt  в b.txt
	rename ("c.txt", "b.txt");

	unlink("b.txt"); // відалення  файлу



?>