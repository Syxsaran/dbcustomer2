<html>
<body>
<table border=1>
<tr>
<td>รหัสพนักงานขาย</td><td>ชื่อพนักงานขาย</td><td>เบอร์โทรศัพท์</td>
</tr>
<?php
	$link = mysqli_connect('localhost','root','','dbcustomer2') or die('Unable to connect');
	$sql = "select * from salesman";
	$result = mysqli_query($link,$sql);
	
	while ($data = mysqli_fetch_array($result))
	{
?>
	<tr>
		<td><?=$data['sid']?></td>
		<td><?=$data['sname']?></td>
		<td><?=$data['sphone']?></td>
	</tr>
<?php
	}
	mysqli_close($link);
?>
</table>
</body>
</html>