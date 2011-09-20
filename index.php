<?php
	print_r($_GET);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JSから簡単にPOST送信</title>
</head>
<body>
<a href="javascript:void(0)" onclick="sendPost('index.php', {'param1':'value1', 'param2':'value2', 'param3':'value3' },'get')">
	送信する
</a>

</body>
</html>
