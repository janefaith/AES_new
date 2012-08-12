<?php
	//Start session
	session_start();
	require_once('config1.php');
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Answer Encoding System</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

<style type="text/css">
div.container
{
width:100%;
margin:0px;
border:0px;
line-height:150%;
}
div.header,div.footer
{
padding:0.5em;
color:white;
background-color:gray;
clear:left;
}
h1.header
{
padding:0;
margin:0;
}
div.left
{
float:left;
width:180px;
margin:0;
padding:1em;
}
div.right
{
margin-right;180px;
border-right:1px solid gray;
padding:1em;
}
div.content
{
margin-left:325px;
border-left:1px solid gray;
padding:1em;
}
</style>

			
<style type="text/css">

		ul {
			font-size: 14px;
			font-family: Arial, Verdana;
			margin-left: 310px;
			padding: 0;
			list-style: none;
		}
		ul li {
			display: block;
			position: relative;
			float: left;
		}
		li ul { display: none; }
		ul li a {
			display: block;
			text-decoration: none;
			color: #006600;
			border-top: 1px solid #342C29;
			padding: 5px 15px 5px 15px;
			background: #342C29	;
			margin-left: 1px;
			white-space: nowrap;
		}
		
		ul li a:hover { background: #342C29; }
		li:hover ul { 
			display: block; 
			position: absolute;
		}
		li:hover li { 
			float: none;
			font-size: 11px;
		}
		li:hover a { background: #CCCC66; }
		li:hover li a:hover { background: #999900; }

	</style>		
</head>

<body>	
<div class="container">

<div class="header"><h1 class="header">Answer Key</h1></div>
<form name="answerkeyForm" action="answer_encoder-exec.php" method="post" >
<div class="right">
	<div><p name="number" id="number1">1. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="radio" name="1" id="answer1" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="1" id="answer1" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="1" id="answer1" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="1" id="answer1" value="D" /> D</p></div>
	
	<div><p name="number" id="number2">2. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="radio" name="2" id="answer2" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="2" id="answer2" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="2" id="answer2" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="2" id="answer2" value="D" /> D</p></div>
	
	<div><p name="number" id="number3">3. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="radio" name="3" id="answer3" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="3" id="answer3" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="3" id="answer3" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="3" id="answer3" value="D" /> D</p></div>
			
	<div><p name="number" id="number4">4. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="radio" name="4" id="answer4" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="4" id="answer4" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="4" id="answer4" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="4" id="answer4" value="D" /> D</p></div>
			
	<div><p name="number" id="number5">5. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="radio" name="5" id="answer5" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="5" id="answer5" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="5" id="answer5" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="5" id="answer5" value="D" /> D</p></div>
			
	<div><p name="number" id="number6">6. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="radio" name="6" id="answer6" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="6" id="answer6" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="6" id="answer6" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="6" id="answer6" value="D" /> D</p></div>
			
	<div><p name="number" id="number7">7. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="radio" name="7" id="answer7" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="7" id="answer7" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="7" id="answer7" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="7" id="answer7" value="D" /> D</p></div>
			
	<div><p name="number" id="number8">8. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="radio" name="8" id="answer8" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="8" id="answer8" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="8" id="answer8" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="8" id="answer8" value="D" /> D</p></div>
			
	<div><p name="number" id="number9">9. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="radio" name="9" id="answer9" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="9" id="answer9" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="9" id="answer9" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="9" id="answer9" value="D" /> D</p></div>
			
	<div><p name="number" id="number10">10. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<input type="radio" name="10" id="answer10" value="A" /> A
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="10" id="answer10" value="B" /> B
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="10" id="answer10" value="C" /> C
			&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="10" id="answer10" value="D" /> D</p></div>
			
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type="submit" value="Save">
</form>
</body>
</html>
		