<?php
      echo __FILE__;
    if(isset($_POST["done"])) {

        var_dump($_POST);

	    if ($_POST["name"] == "") {

		    echo 'Додайте ім\'я. <a href="index.php">Виправити</a>'; // якщо не введене ім'я перенаправляє на корегування ім'я

	    } else {

		    header("Location:index.php"); //  якщо ім'я записано а немає інших данних перенаправляє на почасткову сторіну index.php
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Обробка форм</title>
</head>
<body>
 	<form name="test" action="" method="post">
		<label>Ім'я: </label><br />
		<input type="text" name="name" placeholder="Ім'я" /><br />

		<label>Email </label><br />
		<input type="text" name="email" placeholder="Email" /><br />

		<label>Повідомлення: </label><br />
		<textarea name="message" cols="40" rows="10"></textarea>

                 <br />
		<input type="submit" name="done" value="Готово" />
	</form>
</body>
</html>


