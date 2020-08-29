<html>
<?php
$file = "log.txt";
$ip = $_SERVER['REMOTE_ADDR'];
$date = date("d-m-y");
$time = date("H:i:s");
$browser = $_SERVER['HTTP_USER_AGENT'];
$data = "IP: ".$ip.", Date: ".$date.", Time:".$time.", Browser: ".$browser;

$f=fopen($file, 'a');
fwrite($f,$data."\r\r\n");
fclose($f);
?>
<img src="img.jpg">
</body>
</html>