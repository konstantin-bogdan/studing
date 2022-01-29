<?php
$array = array (12, 17, 5, 23, 56);
echo count ($array)."<br />";  // вказує кількість елементів в масиві

sort ($array);  // сортування масиву по наростаючий
print_r ($array);
echo"<br />";

rsort ($array); // сортування масиву по спаданню
print_r ($array);
echo "<br />";


asort ($array);  // зберігає значення ключа по наростанню
print_r ($array);
echo "<br />";

arsort ($array);   // зберігає значення ключа по спаданню
print_r ($array);
echo "<hr />";


//  асоціативні масиви , строкові

$alist = array("123" => 23, "12" => 45);
arsort ($alist); // ключі по спаданню, без "r" по наростанню
print_r ($alist);
echo "<br />";

ksort ($alist); // сортування по ключах
print_r ($alist);
echo "<br />";

krsort ($alist);  // зворонє  сортування по ключах
print_r ($alist);
echo "<hr />";


shuffle ($array);// змішування елементів масиву
print_r ($array);
echo "<br />";

echo in_array(12, $array);// функція на значення в масиві(виведе тру бо є такий елемент )
echo "<hr />";

// обєднання в один масив
$arr_1 = array (10, 2);
$arr_2 = array (4, 5, 7);
$array_3 = array_merge($arr_1, $arr_2);
print_r ($array_3);




echo "<br />";
echo "<br />";

echo "<hr />";


$fruits = [
	"d" => "lemon",
	"a" => "orange",
	"b" => "banana",
	"c" => "apple",
	"apple" => "apple"
];

krsort ($fruits);

foreach ($fruits as $key => $value){

	//echo "$key = $value <br>";

	echo $key . ' = ' .  $value . '<br>';

}
echo "<br />";


foreach ($fruits as $value){

	//echo "$key = $value <br>";

	var_dump( $value);

}

echo "<br />";

//d


$afruits =  [
	"d" 	=> "lemon",
	"a" 	=> "orange",
	"b" 	=> "banana",
	"c" 	=> "apple"
];

krsort ($afruits);
foreach ($afruits as $key => $value) {
	echo "$key = $value\n";
}
echo "<br />";
var_dump($afruits);

?>