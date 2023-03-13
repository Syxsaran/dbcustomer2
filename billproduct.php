<html>
<body>
<table border=1>
<tr>
<td>ลำดับรายการ</td><td>เลขที่ใบสั่งซื้อ</td><td>รหัสสินค้าที่ซื้อ</td><td>จำนวนที่ซื้อ</td>
</tr>
<?php
	$link = mysqli_connect('localhost','root','','dbcustomer2') or die('Unable to connect');
	$sql = "select * from billproduct";
	$result = mysqli_query($link,$sql);
	
	while ($data = mysqli_fetch_array($result))
	{
?>
	<tr>
		<td><?=$data['bpid']?></td>
		<td><?=$data['bpbid']?></td>
		<td><?=$data['bppid']?></td>
		<td><?=$data['bpamount']?></td>
	</tr>
<?php
	}
	mysqli_close($link);
?>
</table>
</body>
</html>