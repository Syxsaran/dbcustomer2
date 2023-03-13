<html>
<body>
<table border=1>
<tr>
<td>รหัสสินค้า</td><td>ชื่อสินค้า</td><td>ราคา</td>
</tr>
<?php
	$link = mysqli_connect('localhost','root','','dbcustomer2') or die('Unable to connect');
	$sql = "select * from product";
	$result = mysqli_query($link,$sql);
	
	while ($data = mysqli_fetch_array($result))
	{
?>
	<tr>
		<td><?=$data['pid']?></td>
		<td><?=$data['pname']?></td>
		<td><?=$data['pprice']?></td>
	</tr>
<?php
	}
	mysqli_close($link);
?>
</table>
</body>
</html>