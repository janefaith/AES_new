<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Member Index</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>

<style type="text/css">

a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover font{
	color: #fff;
}
a:hover img {
	color: #fff;
	}
a:active {
	text-decoration: none;
}

</style>

<body background="gray.jpg">
<<<<<<< HEAD

<div>Welcome <?php echo $_SESSION['SESS_NAME'];?> <p align="right"><a href="add.php">Settings</a> | <a href="logout.php">Logout</a></p></div>
<hr></hr>
<font color = "black" size = "3"> 




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
background-color:white;
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

<div class="left">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="pic.png">

</div>

<div class="content">
<h3><font color = "gray"><?php echo $_SESSION['SESS_NAME'];?></font></h3>
<font color = "gray" size="3"><?php echo $_SESSION['SESS_COURSEYR'];?> </br>
<?php echo $_SESSION['SESS_SUBJECT'];?> - <?php echo $_SESSION['SESS_SECTION'];?> </br>
</font>
</div>

=======
<div>Welcome <?php echo $_SESSION['SESS_NAME'];?> 
<a href="logout.php">Logout</a></div>
</br>
<font color = "white" size = "3"> 
<?php echo $_SESSION['SESS_NAME'];?></br> 
<?php echo $_SESSION['SESS_COURSEYR'];?></br> 
<?php echo $_SESSION['SESS_SUBJECT'];?></br>
</br>
>>>>>>> 96a6c0fb4083214844064966561eb6932c9df5be

<style type="text/css">
#students
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:100%;
border-collapse:collapse;
}
#students td, #students th
{
font-size:1em;
border:1px solid #98bf21;
padding:3px 7px 2px 7px;
}
#students th
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#6495ed;
color:#ffffff;
}
#students tr.alt td
{
color:#000000;
background-color:#9999cc;
}
</style>
</head>

<body>
<table id="students">
<tr>
<th>PRELIM</th>
<th>MIDTERM</th>
<th>FINALS</th>
</tr>
</body>
</html>