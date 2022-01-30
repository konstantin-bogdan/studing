<?php
	echo __FILE__; //  виведе інфу про місце знаходження файлу
	echo "<>br /";

	echo fileperms(__FILE__);

	chmod(__FILE__, 0777); // зміна доступу до вайлу




?>