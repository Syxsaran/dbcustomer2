<html>
<body>
<?php
	$ccid = $_REQUEST['ccid'];
	$csid = $_REQUEST['csid'];
	$link = mysqli_connect('localhost','root','','dbcustomer2') or die('Unable to connect');
	$sql = "insert into care values('$ccid','$csid')";
	echo $sql."<br>";
	$result = mysqli_query($link,$sql);
	if(!$result)
	{
		echo "cannot add<br>";
	}else
	{
		echo "add completed<br>";
	}
?>
<a href='customer.php?cid=<?=$ccid?>'>customer.php</a>
</body>
</html>