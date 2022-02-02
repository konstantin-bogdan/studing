<?php

	session_start ();
	if($_GET["send"] == 1)
	echo "Ви успішно відправили повідомлення на email : " . $_SESSION["to"];


?>