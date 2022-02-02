<?php

	session_start();
	if(isset($_POST["send"])) {
		//print_r($_POST); // перевірка , що відправляється
	$from        = htmlspecialchars ($_POST["from"]);
	$to          = htmlspecialchars ($_POST["to"]);
	$subject     = htmlspecialchars ($_POST["subject"]);
	$message     = htmlspecialchars ($_POST["message"]);
	$_SESSION["from"] = $from;
	$_SESSION["to"] = $to;
	$_SESSION["from"] = $from;
	$_SESSION["subject"] = $subject;
	$_SESSION["message"] = $message;

	$error_from = "";
	$error_to = "";
	$error_subject = "";
	$error_message = "";
		if($from == "" || !preg_match ("/@/",  $from)) {
			$error_from = "Введіть коректний email";
			$error = true;
		}
		if($to == "" || !preg_match ("/@/",  $to)){
			$error_to = "Введіть коректний email";
			$error = true;
		}
		if(strlen($subject) == 0){
			$error_subject = "Введіть тему повідомлення";
			$error = true;
		}
		if(strlen($message) == 0){
			$error_message = "Введіть тему повідомлення";
			$error = true;
		}
		if(!$error) {
		    $subject = "=?utf=8?B?".base64_encode($subject)."?=";
		    $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
		    mail ($to, $subject, $message, $headers);
		    header ("Location: success.php?send=1");
		    exit;

        }



	}


?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h2>Форма зворотнього зв'язку</h2>
	<form name="feadback" action="" method="post">
		<lebel>Від кого :</lebel><br />
		<input type="text" name="from" value="<?php echo $_SESSION["from"]?>"/>
		<span style="color:red"><?=$error_from?></span>
		<br />
		<lebel>Кому : </lebel><br />
		<input type="text" name="to" value="<?php echo $_SESSION["to"]?>">
		<span style="color:red"><?=$error_to?></span>
		<br />
		<lebel> Тема :</lebel><br />
		<input type="text" name="subject" value="<?php echo $_SESSION["subject"]?>">
		<span style="color:red"><?=$error_subject?></span>
		<br />
		<lebel>Повідомлення :</lebel><br />
		<textarea name="message" cols="30" rows="10" ><?php echo $_SESSION["message"]?></textarea>
		<span style="color:red"><?=$error_message?></span
		<br />
		<input type="submit" name="send" avlue="Відправити" />


	</form>
</body>
</html>
