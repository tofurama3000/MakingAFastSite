<?php
$str = ob_get_clean();
//$str = preg_replace("/\s\s+/"," ",$str);
if(!ob_start("ob_gzhandler")) ob_start();
echo $str;
ob_flush();
?>