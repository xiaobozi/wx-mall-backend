<?php
    include "TopSdk.php";
    date_default_timezone_set('Asia/Shanghai'); 
	$content = @file_get_contents('/Users/xt/Downloads/json.txt');
	echo $content;
?>