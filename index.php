<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Project 2: xkcd Password Generator</title>
	<!--[if lt IE 9]>
	 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="stylesheet.css">
	<?php require 'logic.php'; ?>
</head>	

<body>
	<header>
		<h1>xkcd Password Generator</h1>
		<h3>This simple program will generate between 4 to 8 random animals.</h3>
		<ol>
			<li>Enter how many words you would like ( 4 - 8)</li>
			<li>Click button to include numbers</li>
			<li>Click button to include a symbol ( example: @)</li>
			<li>Click "Generate" button</li>
		</ol>
	</header>
	
	<!-- <form method='POST' action='index.php'> -->
	<form method="post" action='index.php'>
	
		<label>How many words?</label><input type='text' id='no_words' name='no_words'><br/>
		
		<p>Include a number:
		<input type='checkbox' id='include_number' name='number' value='yes' />
		<label for='include_number'>Yes</label></p>
		
		<p>Include a symbol:
		<input type='checkbox' id='include_symbol' name='symbols' value='yes'>
		<label for='include_symbol'>Yes</label></p> <br/>
		<input type='submit' value="Generate" name="submit" ><br/><br/>
	</form>
	
</body>
</html>