<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
<style type="text/css">


div
	{border-radius: 8px;}
body
	{font-family:Arial;}
#header
	{text-align:center;
	z-index:1;
	position:fixed;
	width:100%;
	margin-top:-7px;
	height:110px;
	background-color:#ffffff;
	margin-bottom:7px;
	font-family:Verdana,sans-serif;
	font-size:14px;
	color:#2f4f4f;
	box-shadow: 5px 5px 5px #888;}
#email
	{margin-right:5px;
	padding-top:5px;
	font-size:14px;
	font-family:Verdana,sans-serif;
	color: #800000;}
h3
	{margin-left: 5px;
	margin-bottom: 15px;
	FONT FACE="Calibri, sans-serif";}
.right p
	{margin-left:5px;
	margin-right:5px;
	margin-top:-10px;
	color:#000000;}
ul
	{margin:10px 10px 30px 10px;}
li
	{list-style-type:square;}
a:hover
	{font-weight:bold;}
.left
	{position:relative;
	float:left;
	margin-top:130px;
	height:2000px;
	width:60%;
	background-color:#B9D7D9;
	margin-bottom: 10px;}
.right
	{position:relative;
	float:right;
	margin-top:130px;
	width:38%;
	height:2000px;
	background-color:#F4EBC3;
	margin-bottom:10px;}
#footer
	{position:relative;
	height:50px;
	background-color:#668284;
	clear:both;
	font-size:14px;
	text-align:center;
	color: #ffffff;}
#footer p
	{position:relative;
	padding-top:15px;}

</style>
<title>John Meroth</title>
<?php

    # Define 4 different variables, which will each represent how much a given coin is worth
    $penny_value   = .01;
    $nickle_value  = .05;
    $dime_value    = .10;
    $quarter_value = .25;

    # Define 4 more variables, which will each represent how many of each coin is in the bank
    $pennies  = 100;
    $nickles  = 25;
    $dimes    = 100;
    $quarters = 34;

    # Add up how much money is in the piggy bank
    $total = ($pennies * $penny_value) + ($nickles * $nickle_value) + ($dimes * $dime_value) + ($quarters * $quarter_value);

    ?>
</head>
<body>
<div id="header"><strong>John F. Meroth</strong><br />
<img src="JohnSubway124_92.bmp" alt="my picture" /></div>
<div class="left"><p>I am an application developer working with web applications and databases.  I am currently studying dynamic web application technologies such as php and javascript.  I also have programming skills in C++, Java, pl/sql and Python.  I own both Linux and Windows machines.  My hobbies include running, hiking, motorcycles and travel.</p>

<p>
document.forms example
</p>

<form id="robby">
  <input type="button" onclick="alert(document.forms[0].id);" value="robby's form" />
</form>

<form id="dave">
  <input type="button" onclick="alert(document.forms[1].id);" value="dave's form" />
</form>

<form id="paul">
  <input type="button" onclick="alert(document.forms[2].id);" value="paul's form" />
</form>
</p>


    <img src='http://making-the-internet.s3.amazonaws.com/php-phpiggy-bank.png' alt='PHPiggy Bank Logo'>

    <p>
     You have $<?php echo $total; ?> in your piggy bank.
    </p>
	
	
</div>
<div class="right">
<h3>PROJECT1:</h3>
<br/>
<p>This Portfolio Page</p
<p><a href="https://github.com/jmeroth/p1.spidercode.biz">GitHub repository</a></p>
<br/>
<h3>PROJECT 2:</h3>
<br/>
<p><a href="http://p2.spidercode.biz">details</a></p>
<p><a href="https://github.com/jmeroth/p2.spidercode.biz">GitHub repository</a></p>
<br/>
<h3>PROJECT 3:</h3>
<br/>
<p><a href="http://p3.spidercode.biz">details</a></p>
<p><a href="https://github.com/jmeroth/p3.spidercode.biz">GitHub repository</a></p>
<br/>
<h3>PROJECT 4:</h3>
<br/>
<p><a href="http://p4.spidercode.biz">details</a></p>
<p><a href="https://github.com/jmeroth/p4.spidercode.biz">GitHub repository</a></p>
</div>
<div id="footer">
<p><em>Technologies: </em>HTML5, CSS, Git, Notepad&#43;&#43;</font></p>
</div>
</div>
</body>
</html>
