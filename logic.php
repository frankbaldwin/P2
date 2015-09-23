<?php

date_default_timezone_set('Asia/Bangkok');

//Get user input
$no_words = user_input($_POST["no_words"]);

//Create an error msg
$msg = "Please enter a number 4 - 8.";

function user_input($no_words) {
$no_words = htmlspecialchars($no_words);
return $no_words;
}

//Set conditionals for input: min, max and empty
$NotNumber = "";
$min = 4;
$max = 8;

if ($min > $no_words || $max < $no_words || $no_words == $NotNumber){
		echo '<pre>';
		echo htmlentities(print_r($msg, true));
		echo '</pre>'; 
		}else {
			$no_words = user_input($_POST["no_words"]);
		}

//Created an Array of words to be used
    $words = Array (
	0 => 'al',
	1 => 'bee',
	2 => 'cobra',
	3 => 'dog',
	4 => 'elephant',
	5 => 'flamingo',
	6 => 'gopher',
	7 => 'hippo',
	8 => 'ibis',
	9 => 'jackal',
	10 => 'kangaroo',
	11 => 'lynx',
	12 => 'mouse',
	13 => 'nutria',
	14 => 'opossum',
	15 => 'penguin',
	16 => 'quail',
	17 => 'rabbit',
	18 => 'serpent',
	19 => 'tapir',
	20 => 'uakari',
	21 => 'vole',
	22 => 'wombat',
	23 => 'xerus',
	24 => 'yak',
	25 => 'zebra',
	);

//Use array_random with perimeters $words array & user input $no_words user input
		$pwd = array_rand($words, $no_words);
//Iterate using foreach()
		foreach ($pwd as $key => $value) {
		$myPass = "$words[$value]";
//Echo into html
		echo '<pre>';
		echo htmlentities(print_r($myPass, true));
		echo '</pre>';
		}

?>
