<?php require_once("gzipstart.php"); ?>
<html>
<head>
<style>
body{
	background:#fff;
}
<?php 
if(isset($_POST["css"])){
	echo $_POST["css"];
}
?>
</style>
<?php 
if(isset($_POST["js"])){
	echo "<script>".$_POST["js"]."</script>";
}
?>
</head>
<body>
<?php 
if(isset($_POST["html"])){
	echo $_POST["html"];
}
?>
</body>
</html>
<?php require_once("gzipend.php"); ?>