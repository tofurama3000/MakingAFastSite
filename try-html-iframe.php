<?php require_once("gzipstart.php"); ?>
<html>
<head>
<title>Try HTML</title>
<style>
body{
	background:#fff;
	color:#111;
	font-family: Calabri, Arial, Sans-Serif;
}
h1{font-size:22pt;}
.vd{width:100%;}
.hd{float:right;padding:3%;}
@media (max-width: 999px){
	.vd{
		height:20%;
	}
	.hd{
		width:94%;
	}
}
@media (min-width: 1000px){
	.vd{
		height:18%;
	}
	.hd{
		width:44%;
	}
}
textarea{
	border:2px solid #000;
	padding: 10px;
}
#submit{
	padding:15px 30px;
	background:#040;
	border-radius:22px;
	border:0px;font-size:16pt;
	color:#fff;
	cursor:pointer;
	font-weight:bold;
}
#submit:hover{
	background:#0d0;
	color:#000;
}
</style>
</head>
<body>
<div class="hd">
<h1>Preview</h1>
<div style="height:81%;">
<iframe id="pv" name="pv" src="code-preview.php" style="border:1px solid #000;width:100%;height:87%;">
</iframe>
</div>
</div>
<div class="hd">
<form submit="code-preview.php" action="code-preview.php" method="POST" target="pv">
<h1>HTML</h1>
<p><textarea class="vd" id="html" name="html">
</textarea></p>
<h1>CSS</h1>
<p><textarea class="vd" id="css" name="css">
</textarea></p>
<h1>JavaScript</h1>
<p><textarea class="vd" id="js" name="js">
</textarea></p>
<input id="submit" type="submit" onclick="window.scrollTo(0,0);" value="Try it!" />
</form>
</div>
</body>
</html>
<?php require_once("gzipend.php"); ?>
