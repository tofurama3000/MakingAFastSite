<?php require_once("gzipstart.php"); ?>
<?php 
//makes it easier to test if non-iframe support works
$iframe = true;
if(isset($_GET['noiframe']))$iframe = false;
?>
<html>
<head>
<title>Try HTML</title>
<?php require_once("head.php"); ?>
<style>
h1{font-size:22pt;}
.vd{width:100%;}
.hd{float:right;padding:3%;}
@media (max-width: 999px){
	.vd{
		height:23%;
	}
	.hd{
		width:94%;
	}
}
@media (min-width: 1000px){
	.vd{
		height:23%;
	}
	.hd{
		width:44%;
	}
}
textarea{
	border:2px solid #fff;
	background:#200;
	color:#fff;
}
</style>
</head>
<body>
<div class="cntr">
<?php require_once("menu.php") ?>
</div>
<?php if($iframe){?>
<iframe src="try-html-iframe.php" style="border:0px;width:100%;height:90%;">
<?php }?>
<form submit="try-html.php" method="POST">
<div class="hd">
<h1>Preview</h1>
<div style="height:85%;">
<?php 
if(isset($_POST["html"])){
	echo $_POST["html"];
}
?>
</div>
</div>
<div class="hd">
<h1>HTML</h1>
<p><textarea class="vd" id="html" name="html">
<?php 
if(isset($_POST["html"])){
	echo htmlspecialchars($_POST["html"]);
}
?>
</textarea></p>
<input type="submit" value="Try it!" />
</div>
</form>
<?php if($iframe){?>
</iframe>
<?php }?>
<?php require_once ('foot.php'); ?>
</body>
</html>
<?php require_once("gzipend.php"); ?>
