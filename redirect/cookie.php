<?php

 	$num = (isset ($_COOKIE["num"])) ? $_COOKIE["num"] : 0;
	$num++;
	setcookie ("num", $num, time () + 4);
	echo "Користувач обновив сторінку $num раз ";


	/*
	if(isset ($_COOKIE["num"]))
		echo "Кукі встановлено";
	else
		echo"Кукі не встановлено ";
	*/



?>