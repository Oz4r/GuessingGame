<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Game Theme</title>
		<?php wp_head(); ?>
	</head>

	<body>

		<h1>The Great 
    <br>
	<span id="colorDisplay">RGB</span> 
	<br>
	Guessing Game
 </h1>

    <div id="stripe">
    	<button id="reset">New Colors</button>
    	<span id="message"></span>
    	<button class="mode">Easy</button>
    	<button  class="mode selected">Hard</button>
    </div>
    

	<div id="container">
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
	</div>