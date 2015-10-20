<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Project 2: xkcd Password Generator</title>
	<!--[if lt IE 9]>
	 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="stylesheet.css">
	 <script type="text/javascript" src="random.js"></script>

</head>	

<body>
	<header>
		<h1>xkcd Password Generator</h1>
		<h3>This simple program will generate a passcode between 4 to 8 of random words or animals in this case. <br/>
		The combination of words is hard to crack yet easy to remember.</h3>
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
		<input type='checkbox' id='number' class="number "name='number' value="true"/>
		<label for='include_number'>Yes</label></p>
		
		<p>Include a symbol:
		<input type='checkbox' id='symbol' class="symbol" name='symbol'value="true"/>
		<label for='include_symbol'>Yes</label></p> <br/>
		 <div id="generate" class="button">Generate</div>
	</form>
		</br>
		<span class="password" id="password"></span>
</body>
</html>