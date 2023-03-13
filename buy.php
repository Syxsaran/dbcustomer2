<html>
<body>
<table border=1>
<tr>
<td>เลขที่ใบสั่งซื้อ</td><td>รหัสลูกค้าที่ซื้อ</td><td>วันที่ซื้อ</td>
</tr>
<?php
	$link = mysqli_connect('localhost','root','','dbcustomer2') or die('Unable to connect');
	$sql = "select * from bill";
	$result = mysqli_query($link,$sql);
	
	while ($data = mysqli_fetch_array($result))
	{
?>
	<tr>
		<td><?=$data['bid']?></td>
		<td><?=$data['bcid']?></td>
		<td><?=$data['bdate']?></td>
		<td><a href="billedit.php?bid=<?=$data['bid']?>">edit bill</a></td>
		<td><a href="billcustomeredit.php?bcid=<?=$data['bcid']?>">edit customer</a></td>
	</tr>
	
<?php
	}
	mysqli_close($link);
?>
</table>
</body>
</html>