	<?php

		//$a = 2;
		//	 echo $a . 'Николай ';


	$a = 4;

	if ($a <5) {
		echo ' 5 більше ніж 4 '. "<br />";
	}

	if ($a <= 5) {
		echo 'значення менше , або = 5'. "<br />";
	}

	if ($a > 3) {
		echo 'змінна $a більше ніж 3 ' . "<br />";

	}
	if($a >= 3) {
		echo 'змінна $a більше або дорівнює 3 ' . "<br />";

	}

	if ($a == 4) {
		echo 'змінна $a дорівнює 4' . "<br />";

	}


	if ($a == 2*2) {
		echo 'Це правда ' . "<br />";

	}

	if ($a != 7){
		echo 'значення не дорівнює 7' . "<hr />";

	}



	// порівняння по типу

	$b = true; // тип даних boolean (має два хначення true  та false)

	if($b === true ) {
		echo 'значення $b має тип і дорівнює true' . "<br />";
	}

	if ($b !== false) {
		echo 'змінна  $b не маэ типу і  не  дорівнює false' . "<br />";

	}

	// умови можуть бути в два рядки .

	$q = 1;

	if ($q == 1){
		echo 'умова виконана ';
	} else{
		echo 'умова не виконана';
	}
	echo "<hr />";


	// декылька умов elseif

	$s = 2;

	if ($s == 1) {
		echo $s . ' == 1';
	}elseif ($s < 3){
		echo $s .' < 3';
	}elseif ($s <= 2){
		echo $s . '<= 2';
	} else{
		echo ' не підходить ';
	}


	?>